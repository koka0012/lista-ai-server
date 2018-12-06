@extends('layout.app')

@section('content_page')
		<header>
			<h3>CADASTRAR <b>PRODUTOS</b></h3>
		</header>

		<section class="container">

			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
						<input id="descricao" type="text" class="validate">
						<label for="descricao">Descrição</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<select class="browser-default">
								<option value="" disabled selected>Marcas</option>
								<option value="1">Option 1</option>
							</select>
						</div>
						<div class="input-field col s6">
							<select class="browser-default">
								<option value="" disabled selected>Categorias</option>
								<option value="1">Option 1</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
								<select class="browser-default">
									<option value="" disabled selected>Unidade de Medidas</option>
									<option value="1">Option 1</option>
								</select>
						</div>
						<div class="input-field col s6">
								<input id="valor" type="text" class="validate">
								<label for="valor">Valor</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 ">
								<input id="obs" type="text" class="validate">
								<label for="obs">Observações</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<a class="waves-effect waves-light btn">Cadastrar</a>
						</div>
					</div>
				</form>
			</div>


		</section>
@endsection
