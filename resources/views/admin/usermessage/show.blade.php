@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">

                               User Message

                            </h1>
                        </div>

                        
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                        <th>Send at</th>
                                                        <th>Go to Message</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($messages as $msg)

                                                        <tr>
                                                            <td>{{$loop->index +1}}</td>
                                                            <td>{{$msg->name}}</td>
                                                            <td>{{$msg->email}}</td>
                                                            <td>{{$msg->subject}}</td>
                                                            <td>{{ str_limit($msg->message,'20') }}</td>
                                                            <td>{{$msg->created_at->diffForHumans()}}</td>
                                                            <td class="center"><a href="{{ route('message.view',$msg->id) }}"class="btn btn-outline btn-success"><i class="fa fa-arrow-right"></i></a></td>
                                                            

                                                   @endforeach
                                                   
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
@endsection

@section('footer-content')

<script>

            function getConfirm()
            {
                alert('ok');
            }
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });



            function ConfirmDelete(id)
            {
                var config = confirm('Are Your Sure');
                if(config)
                {
                  $('#delete-form-menu-'+id).submit();
                }
            }
 </script>
  @endsection          