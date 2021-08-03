<?php

namespace App\Http\Controllers\user;

use App\Model\User\contact;
use App\Model\Title;
use App\Model\Post;
use App\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recents = Post::orderBy('id','desc')->take(5)->get();
        $menus = Menu::orderBy('id','desc')->get();
        $titles = Title::orderBy('id','desc')->get();
        return view('user.contact',compact('titles','recents','menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validateRequest($request);
        contact:: create($data);
        return redirect(route('contact.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\User\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\User\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\User\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\User\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }


    public function validateRequest($request)
    {
        return $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'subject' => 'required|max:50',
            'message' => 'required'

        ]);
    }
}
