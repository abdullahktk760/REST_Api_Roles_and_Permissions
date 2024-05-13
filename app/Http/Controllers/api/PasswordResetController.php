<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PasswordResetToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    /**
     * Send a reset password email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendResetPasswordEmail(Request $request)
    {
        // Validate request data
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();

        if (!$user) {
            return response([
                'message' => 'Email does not exist',
                'status' => 'failed'
            ], 404);
        }

        $token = Str::random(60);

        // Save token in the password reset table
        PasswordResetToken::updateOrCreate(
            ['email' => $email],
            [
                'email' => $email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]
        );

        // Construct reset password URL
        $domain = URL::to('/');
        $url = $domain . '/reset-password?token=' . $token;
        $data['url'] = $url;
        $data['email'] = $email;
        $data['title'] = "Password Reset";

        // Send reset password email
        Mail::send('both.reset-link', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });


        return response([
            'message' => 'Password Reset Email Sent. Check Your Email',
            'status' => 'success'
        ], 200);
    }

    /**
     * Reset password view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request)
    {
        // Delete tokens older than 5 minutes
        $formatted = Carbon::now()->subMinutes(5)->toDateTimeString();
        PasswordResetToken::where('created_at', '<=', $formatted)->delete();

        // Find the password reset token
        $passwordreset = PasswordResetToken::where('token', $request->token)->first();

        if (!$passwordreset) {
            return response([
                'message' => 'Token is Invalid or Expired',
                'status' => 'failed'
            ], 404);
        }

        // Extract email and token
        $email = $passwordreset->email;
        $token = $request->token;

        // Find user associated with the email
        $user = User::where('email', $email)->first();

        if (!$user) {
            return response([
                'message' => 'User not found',
                'status' => 'failed'
            ], 404);
        }

        // Return the change password view with user and token
        return view('both.change_password', compact('user', 'token'));
    }

    /**
     * Update user password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        // Validate request data
        $request->validate([
            'password' => 'required|confirmed', // Ensure 'token' is sent along with the request
        ]);

        $user = User::find($request->id);
        if (!$user) {
            return response([
                'message' => 'User not found',
                'status' => 'failed'
            ], 404);
        }

        $user->password = Hash::make($request->password);
        $user->save();
        // Delete the password reset token
        PasswordResetToken::where('token', $request->token)->delete();

        return response([
            'message' => 'Password update successful',
            'status' => 'success'
        ], 200);
    }
}
