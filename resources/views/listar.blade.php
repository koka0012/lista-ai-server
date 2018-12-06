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
						<th class="lista_desc">Descrição</th>
						<th>Valor</th>
						<th>Marca</th>
						<th>Categoria</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Produto 1</td>
						<td>R$0.87</td>
						<td>Marca 1</td>
						<td>Categoria 1</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Produto 2</td>
						<td>R$0.87</td>
						<td>Marca 2</td>
						<td>Categoria 2</td>
					</tr>
				</tbody>
			</table>
		</section>
@endsection
