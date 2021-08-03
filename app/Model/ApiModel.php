<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model
{
    protected $table = "posts";

    protected $guarded = [];
}
