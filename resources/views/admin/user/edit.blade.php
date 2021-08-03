@extends('admin.layout.app')
@section('head-section')

@endsection

@section('content')

     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    
                        <a class="btn btn-social btn-bitbucket" href="{{route('user.index')}}">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                        Edit User
                    </h1>
                </div>
                <div class = "row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <form method="POST" action="{{ route('user.update',  $user->id) }}">
                            @csrf
                            @method('PATCH')


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                        {{ __('Name') }}
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}"  autocomplete="name" autofocus>

                                    @error('name')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            {{--  <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{--  <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div> --}}
                            
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <div class="checkbox">
                                            <label>
                                            
                                                <input type="hidden" name="status" value="0">
                                                <input type="checkbox" name="status" @if (old('status') == 1 || $user->status == 1 )

                                                checked
                                                    
                                                @endif  value="1">
                                                
                                                Status
                                                
                                            </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                    <div class="col-md-8">
                                    <div class="row">
                                        @foreach ($roles as $role)
                                            
                                            <div class="col-md-6">
                                            <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="role[]" value="{{$role->id}}" @foreach($user->roles as $userrole) {{ $role->id ==$userrole->pivot->role_id ? 'checked':''}} @endforeach>
                                                        {{$role->name}}
                                                        
                                                    </label>
                                            </div>
                                            </div> 
                                            
                                            @endforeach    
                                        </div>           
                                        
                                    </div>
                                

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save Change
                                    </button>
                                </div>
                            </div>
            </form>
                        
                        </div>
                    


                </div>
                
            </div>
            </div>
        </div>  


@endsection

@section('footer-section')


  @endsection          