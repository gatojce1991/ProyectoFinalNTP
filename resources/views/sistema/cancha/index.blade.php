@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-dm-8 col-xs-12">
	<h3> Canchas Existentes<a href="cancha/create"><button class="btn btn-success btn-xs" >Nuevo</button></a>
	@include('sistema.cancha.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed table-hover">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Hora Inicio</th>
		<th>Hora Fin</th>
		<th>Lugar</th>
		<th>Cubierta</th>
		<th>Superficie</th>
		<th>Red</th>
		<th>Rating</th>
	</thead>
	@foreach ($canchas as $canch)
	<tr>
		<td>{{$canch->IDCANCHA}}</td>
		<td>{{$canch->NOMBRE}}</td>
		<td>{{$canch->PRECIO}}</td> 
		<td>{{$canch->HORARIO_INICIO}}</td> 
		<td>{{$canch->HORARIO_FIN}}</td> 
		<td>{{$canch->UBICACION}}</td> 
		<td>{{$canch->CUBIERTA}}</td> 
		<td>{{$canch->SUPERFICIE}}</td> 
		<td>{{$canch->RED}}</td> 
		<td>{{$canch->RATING}}</td> 
		<td>
                         <form action="{{route('cancha.destroy',$canch->IDCANCHA)}}" method="POST">
						{{csrf_field()}}
                         <input type="hidden"  name="_method" value="DELETE">
                         <button class="btn btn-info btn-xs">Eliminar</button>
					</form>
					</td>
				</tr>
					
				@endforeach
			</table>
		</div>
		{{$canchas->render()}}
	</div>
</div>
@endsection