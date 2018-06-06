<!--@extends('layouts.app')-->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2 d-none d-sm-block">
            <img src="img/SMA-Iglesia.jpg" class="img-fluid" alt="Responsive image">
        </div>

        <div class="col-md-6 col-md-offset-6 text-right"> 
            <div>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                               <i class="fa fa-lock amber-text" aria-hidden="true"></i>     ¿Olvidó su contraseña?
                                </a>
                </div>
            <div class="d-flex justify-content-center align-items-center h-100"> 
                <div class="col-md-12">
            <div class="col-md-8 offset-md-2 text-center"> 
                <div class="col-md-6 offset-md-3 " style="padding: 15px;">                         
                <img src="img/SMA-Logo.png" class="img-fluid" alt="Responsive image">
                </div>
            </div>    
            <div class="col-md-8 offset-md-2" style="background-color: white; padding: 20px;">                          
                <div class="col-md-12 text-center">
                    <div class="panel-body">
                        <strong>Iniciar Sesión</strong>
                    </div>
                 </div>
                  <div class="col-md-12 text-center">
                    <div class="form-group">
                        <strong>Ingrese sus datos a continuación</strong>
                    </div>
                 </div>                
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                                                        
                            <div class="md-form">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="email" >Usuario</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class=" form-group{{ $errors->has('password') ? ' has-error' : '' }}">                            
                            <div class="md-form">
                                <input id="password" type="password" class="form-control" name="password" required>                                 
                                <label for="password" >Contraseña</label>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <!--<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Entrar
                                </button>                              
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                </div> 
            </div>
            <div class="col-md-12 text-center">San Miguel de Allende <i class="fa fa-copyright" aria-hidden="true"></i> 2018</div>
        </div>
    </div>
</div>
@endsection
