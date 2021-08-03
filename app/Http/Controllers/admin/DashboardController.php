<?php

namespace App\Http\Controllers\admin;
use App\Model\Post;
use App\Model\Menu;
use App\User;

use App\Charts\HightChart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	$menus = Menu::all();
    	$users = User::all();
    	$all_views = DB::table('views')->count();
    	$popular_posts = Post::orderBy('view_count','desc')->take(5)->get();

    		 $data = collect([]);
	    	 for ($days_backwards = 6; $days_backwards >= 0; $days_backwards--) {
		    
				    $data->push(DB::table('views')->whereDate('viewed_at', today()->subDays($days_backwards))->count());
				}
	        
	    	  $chart = new HightChart;
	    	  $chart->labels(['6 Day Ago','5 Day Ago','4 Day Ago','3 Day Ago','2 Day Ago','Yesterday', 'Today']);
	    	  $chart->dataset('viewer', 'bar', $data)
	    	  ->backgroundColor(['rgb(138, 202, 255,0.4)',
	    	  	'rgb(186, 104, 200,0.3)',
	    	  	'rgb(102, 187, 106,0.4)',
	    	  	'rgb(233, 30, 99,0.4)',
	    	  	'rgb(212, 225, 87,0.4)',
	    	  	'rgb(255, 152, 0,0.4)',
	    	  	'rgb(69, 90, 100,0.4)'])

	    	  ->color(['rgb(138, 202, 255,1)',
	    	  	'rgb(186, 104, 200,1)',
	    	  	'rgb(102, 187, 106,1)',
	    	  	'rgb(233, 30, 99,1)',
	    	  	'rgb(212, 225, 87,1)',
	    	  	'rgb(255, 152, 0,1)',
	    	  	'rgb(69, 90, 100,1)']);
	    	  

    	return view('admin.dashboard.show', compact('posts','menus','users','all_views','popular_posts','chart'));
    }

 

}
