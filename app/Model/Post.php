<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Menu;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Post extends Model implements ViewableContract
{
	use Viewable;
    protected $guarded = [];

    public function menu()
    {
    	return $this->belongsTo(Menu::class);
    }
}
