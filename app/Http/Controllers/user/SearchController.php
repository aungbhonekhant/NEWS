<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Title;
use App\Model\Menu;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$query = $request->input('query');
        $posts =	Post::where('title','LIKE',"%$query%")->get();
        $titles = Title::orderBy('id','desc')->get();
        $menus = Menu::orderBy('id','desc')->get();
        $recents = Post::orderBy('id','desc')->take(5)->get();

       return view('user.search', compact('posts','query','titles','menus','recents'));
    }
}
