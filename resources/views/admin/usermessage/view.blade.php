@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">

                               Message

                            </h1>
                        </div>

                        
                        
                    </div>
                    <div class="row">

                        <div class="col-lg-9">
                                <div class="panel panel-info">
                                   
                                    <div class="panel-heading">
                                       <h3>{{ $messages->name }}</h3>
                                       <email>{{ $messages->email }}</email>    
                                    </div>
                                    <div class="panel-body">
                                        <h4>{{ $messages->subject }}</h4>
                                        <p>{{ $messages->message }}</p>

                                    </div>
                                    <div class="panel-footer">
                                        {{$messages->created_at->diffForHumans()}}
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
@endsection

         