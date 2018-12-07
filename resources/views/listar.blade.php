@extends('layout.app')

@section('content_page')
		<header>
			<h3>LISTAR <b>PRODUTOS</b></h3>
		</header>

		<section class="container">

			<table class="striped responsive-table">
				<thead>
					<tr>
						<th>#</th>
						<th class="lista_desc">Nome</th>
						<th>Valor</th>
						<th>Marca</th>
					</tr>
				</thead>

				<tbody>
					@foreach($produtos as $produto)
					<tr>
						<td>{{$produto->id}}</td>
						<td>{{$produto->nome}}</td>
						<td>{{'R$ '.number_format($produto->valor,2)}}</td>
						<td>{{$produto->marca}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</section>
@endsection
