<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModuleManagment extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

     /* Get all of the comments for the ModuleManagment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permission()
    {
        return $this->hasMany(Permission::class, 'module_mangment_id', 'id');
    }

}
