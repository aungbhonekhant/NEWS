<?php

namespace App\Model;
use App\Model\Role;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];

    public function roles()
    {
    	return $this->belongsToMany(Role::class);
    }
}
