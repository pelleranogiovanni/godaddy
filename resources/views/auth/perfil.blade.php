@extends('layouts.app')

@section('content')
	
	
	<h1>Perfil del Usuario</h1>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
	 Cambiar Contrase;a
	</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Contrasenia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="{{route('resetPass')}}" >
              {{ csrf_field() }}
                

                <div class="form-group">
                        <label for="pass">Password Actual</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>

                <div class="form-group">
                        <label for="pass">Password Nueva</label>
                        <input type="password" class="form-control" name="newpassword" placeholder="Password">
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>
                <div class="form-group">
                        <label for="pass">Re Escribir Password Nueva</label>
                        <input type="password" class="form-control" name="repassword" placeholder="Password">
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




@endsection