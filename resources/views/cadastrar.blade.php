@extends('layout.app')
@section('content_page')
<header>
<h3>CADASTRAR <b>PRODUTOS</b></h3>
</header>

<section class="container">

<div class="row">
	<form class="col s12" action="/produtos/cadastrar/go" method="POST">
		<div class="row">
			<div class="input-field col s12">
			<input id="descricao" type="text" class="validate" name="name" require>
			<label for="descricao">Nome</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
					<input id="valor" type="text" class="validate" name="price" require>
					<label for="valor">Valor</label>
			</div>
			<div class="input-field col s6">
					<input id="marca" type="text" class="validate" name="marca" require>
					<label for="marca">Marca</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 ">
					<input id="obs" type="text" class="validate" name="desc" require>
					<label for="obs">Observações</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<button class="waves-effect waves-light btn" type="submit">Cadastrar</button>	
			</div>
		</div>
		{{ csrf_field() }}
	</form>
</div>


</section>

@endsection
