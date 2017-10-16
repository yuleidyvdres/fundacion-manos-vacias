<div class="modal fade" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="sesionLabel" data-backdrop="static" data-keyboard=false>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="sesionLabel">Iniciar Sesión</h3>
        </div>
        <div class="modal-body">
            
            <form class="form-horizontal form-sesion" method="POST" action="{{ route('representante.auth') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group input-group-md input-capsule">
                        <span class="input-group-addon borde-inc" id="inputEmail">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control borde" placeholder="Correo Electrónico" aria-describedby="inputEmail" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group input-group-md input-capsule">
                        <span class="input-group-addon borde-inc" id="inputPassword">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control borde" placeholder="Contraseña" aria-describedby="inputPassword" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12">
                        <div class="checkbox float-left">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group btn-send">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-default btn-lg btn-registrar">Iniciar Sesión</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12">
                        <a class="btn btn-link center-block" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>


