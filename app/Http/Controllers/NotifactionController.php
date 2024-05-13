<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\testingNotifiction;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;

class NotifactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $notifaction = Notification::get();
        // return view('dashboard')->with(''=>$notifaction);
        // $user =User::first();
        // $post= ['title'=>'Welocome to Our Practice Web Page','body'=>''];
        // $delay= now()->addMinute(1);
        // $user->notify((new testingNotifiction($post)));


        // dd('done');
        $user= Auth::user();

        $notifications =$user->notifications;
        // dd($notifications);
        return view('dashboard')->with('notifications',$notifications);
    }
    public function notify(){
    $user= User::whereId(5)->first();

    // dd( $user->notification());
        $loginUser=auth()->user();
        if($loginUser){
            $loginUser->notify(new WelcomeNotification($user));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function markRead($id)
    {
        auth()->user()->unReadNotifications->where('id',$id)->markAsRead();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
