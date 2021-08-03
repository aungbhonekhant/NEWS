<?php

namespace App\Model;
use App\Model\Permission;
use App\User; 

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}
