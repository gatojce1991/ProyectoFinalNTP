@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<h3>Nueva Cancha</h3>
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors-> all() as $error)
					<li>
					{{$error}}
					</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>
		{!!Form::open(array('url'=>'sistema/cancha','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
		{{Form::token()}}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">	
<div class="col-lg-6 col-md-6 col-dm-12 col-xs-12">
	<div class="form-group">
			<label for="nombre">Nombre del Lugar</label>
			<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Lugar ..."><br>
		</div>
</div>
<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="precio">Precio</label>
			<input type="text" name="precio" required value="{{old('precio')}}" class="form-control" placeholder="Precio..."><br>
		</div>
</div>
<div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
	<div class="form-group">
			<label for="horario_inicio">Horario Inicio</label>
			<input type="text" name="horario_inicio" required value="{{old('horario_inicio')}}" class="form-control" placeholder="Ingrese Hora Inicio 8:00:00">
		</div>
</div>
<div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
	<div class="form-group">
			<label for="horario_fin">Horario Fin</label>
			<input type="text" name="horario_fin" required value="{{old('horario_fin')}}" class="form-control" placeholder="Ingrese Hora Fin 10:00:00">
		</div>
</div>

<div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
	<div class="form-group">
			<label for="superficie">Superficie</label>
			<select name="superficie" id="superficie" required value="{{old('superficie')}}" class="form-control" >	
			<option value="Césped">Césped</option>
			<option value="Arcilla">Arcilla</option>
			<option value="Dura">Dura</option>
	</select>
		</div>
</div>

<div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
	<div class="form-group">
			<label for="cubierta">Cubierta</label>
			<select name="cubierta" id="cubierta" required value="{{old('cubierta')}}" class="form-control" >	
			<option value="Si">Si</option>
			<option value="No">No</option>
	</select>
		</div>
</div>

<div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
	<div class="form-group">
			<label for="red">Red</label>
			<select name="red" id="red" required value="{{old('red')}}" class="form-control" >	
			<option value="Si">Si</option>
			<option value="No">No</option>
	</select>
		</div>
</div>
<div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
	<div class="form-group">
			<label for="ubicacion">Ubicacion</label>
			<input type="text" name="ubicacion" required value="{{old('ubicacion')}}" class="form-control" placeholder="Ubicacion">
		</div>
</div>
<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a class="btn btn-danger" href="/almacen/articulo" role="button">Cancelar</a>
	</div>
</div>
</div>
{!!Form::close()!!}  
         @push ('scripts')
<script>

	function textCounter (field, countfield, maxlimit) {
    if (field.value.length > maxlimit) {
        field.value = field.value.substring(0, maxlimit);
        countfield.value = 'max characters';
    } else { // otherwise, update 'characters left' counter
        countfield.value = field.value.length;
    }
}

</script>
@endpush
@endsection