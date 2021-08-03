<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   protected $guarded = [];

   public function posts()
   {
   	 	return $this->hasMany(Post::class);
   }
}
