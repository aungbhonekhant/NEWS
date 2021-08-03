<?php

namespace App\Http\Controllers\admin;

use App\Model\Title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class titleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::all(); 
        return view('admin.title.show', compact('titles'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        return view('admin.title.show', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        $data = $this->validateRequest($request);
        $title->update($data);
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        //
    }

    public function validateRequest($request){

        return $request->validate([

            'title_name' => 'max:50',
            'img'        =>  'max:255',
            'contact_address' => 'max:255',
            'contact_email'   => 'email',
            'ph_1' => 'min:11|numeric',
            'ph_2' => 'min:11|numeric',
            'head' => 'max:50',
            'description' => 'max:255',
            'youtube_link' => 'max:50'
            
        ]);

    }
}
