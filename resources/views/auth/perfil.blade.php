@extends('layouts.app')

@section('content')
	
	
	<h1>Perfil de Usuario</h1>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
	 Cambiar Contraseña
	</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="{{route('resetPass')}}" >
              {{ csrf_field() }}
                

                <div class="form-group">
                        <label for="pass">Clave Actual</label>
                        <input type="password" class="form-control" name="password" placeholder="Clave actual">
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>

                <div class="form-group">
                        <label for="pass">Clave Nueva</label>
                        <input type="password" class="form-control" name="newpassword" placeholder="Clave nueva">
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>
                <div class="form-group">
                        <label for="pass">Escribir Nuevamente Clave Nueva</label>
                        <input type="password" class="form-control" name="repassword" placeholder="Clave nueva">
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
            </form>
      </div>
      
    </div>
  </div>
</div>




@endsection