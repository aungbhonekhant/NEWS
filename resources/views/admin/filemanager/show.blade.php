@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                File Manager
                                

                            </h1>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
                        </div>
                    </div>
                </div>        
        </div>        