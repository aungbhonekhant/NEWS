<?php

namespace App\Http\Controllers\user;

use App\Model\Post;
use App\Model\Menu;   
use App\Model\Title;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;



class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('view_count','desc')->paginate(8);
        $recents = Post::orderBy('id','desc')->take(5)->get();
        $menus = Menu::orderBy('id','desc')->get();
        $titles = Title::orderBy('id','desc')->get();
        

    	return view('user.home',compact('posts','recents','menus'),compact('titles'));
    }

    public function menu($menu)
    {
       
        $recents = Post::orderBy('id','desc')->take(5)->get();
        $menus = Menu::orderBy('id','desc')->get();
        $titles = Title::orderBy('id','desc')->get();
    	$posts = Post::where('menu_id',$menu)->paginate(6);
        // dd($posts);
        
    	return view('user.menu', compact('posts','recents','menus'),compact('titles'));
    }

    public function post($id)
    {
        $recents = Post::orderBy('id','desc')->take(5)->get();

        $menus = Menu::orderBy('id','desc')->get();
        $titles = Title::orderBy('id','desc')->get();
        
    	$post_single = Post::find($id);

        views($post_single)->record();
        $blogKey = 'blog_' . $post_single->id;
            if (!Session::has($blogKey)) {
                $post_single->increment('view_count');
                Session::put($blogKey,1);
            };
        
    	return view('user.post', compact('recents','menus'),compact('titles','post_single'));
    }
   
}
