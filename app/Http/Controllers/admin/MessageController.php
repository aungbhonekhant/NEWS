<?php

namespace App\Http\Controllers\admin;

use App\Model\user\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
    	$messages = contact::orderBy('id', 'desc')->get();
    	return view('admin.usermessage.show',compact('messages') );
    }


    public function view($id)
    {
    	$messages = contact::find($id);
    	return view('admin.usermessage.view', compact('messages'));
    }
}
