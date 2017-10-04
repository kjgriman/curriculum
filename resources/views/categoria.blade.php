@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Gestion de categoria</div>
					{{$data[0]['name']}}

					<div class="panel-body">
						
					<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">id</th>
      <th>nombre</th>
      <th>correo</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($data as $key => $value)
  		 <tr>
      <td class="mdl-data-table__cell--non-numeric">{{$value['id']}}</td>
      <td>{{$value['name']}}</td>
      <td>{{$value['email']}}</td>
      <td><button class="btn btn-primary">editar</button></td>
      <td><button class="btn btn-danger">eliminar</button></td>
    </tr>
  	@endforeach
   
    
  </tbody>
</table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection