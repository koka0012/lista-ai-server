@extends('layout.app')

@section('content_page')
		<header>
            <h3>DADOS <b>GERAIS</b></h3>
		</header>

		<section class="flex">

			<div class="flex-item">
				<div class="card cardbg darken-1">
					<div class="cardtitle">
						<span><h4>FORNECEDORES</h4></span>
					</div>
					<div class="cardtext">
						<span>1</span>
					</div>
				</div>
			</div>

			<div class="flex-item">
				<div class="card cardbg darken-1">
					<div class="cardtitle">
						<span><h4>PRODUTOS</h4></span>
					</div>
					<div class="cardtext">
						<span>{{$count}}</span>
					</div>
				</div>
			</div>

		</section>
@endsection
