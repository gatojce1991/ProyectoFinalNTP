@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-dm-8 col-xs-12">
	<h3> Usuarios Existentes</h3>
	@include('sistema.usuario.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed table-hover">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Email</th>
	</thead>
	@foreach ($usuarios as $user)
	<tr>
		<td>{{$user->id}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td> 
		<td>
                         <form action="{{route('usuario.destroy',$user->id)}}" method="POST">
						{{csrf_field()}}
                         <input type="hidden"  name="_method" value="DELETE">
                         <button class="btn btn-info btn-xs">Eliminar</button>
					</td>
				</tr>
					
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
	</div>
</div>
@endsection