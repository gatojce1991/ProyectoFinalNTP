@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-dm-8 col-xs-12">
	<h3> Mensajes Recibidos</h3>
	@include('sistema.mensaje.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed table-hover">
	<thead>
		<th>Id</th>
		<th>Email</th>
		<th>Descripcion</th>
		<th>Contacto</th>
	</thead>
	@foreach ($mensajes as $mens)
	<tr>
		<td>{{$mens->IDMENSAJE}}</td>
		<td>{{$mens->MAIL}}</td>
		<td>{{$mens->DESCRIPCION}}</td> 
		<td>{{$mens->CONTACTO}}</td> 
		<td>
                         <form action="{{route('mensaje.destroy',$mens->IDMENSAJE)}}" method="POST">
						{{csrf_field()}}
                         <input type="hidden"  name="_method" value="DELETE">
                         <button class="btn btn-info btn-xs">Eliminar</button>
					</form>
					</td>
				</tr>
					
				@endforeach
			</table>
		</div>
		{{$mensajes->render()}}
	</div>
</div>
@endsection