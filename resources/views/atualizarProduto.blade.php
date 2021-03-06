@extends('layouts.app')


@section('content')

<div class="container">
	<div class="container-fluid">
			<form method="post" action="/cross373/public/atualizarproduto/{{ $produto -> idProdutos }}" style="margin-top:100px;text-align:left;">
			{!! csrf_field() !!}
			<h3>Atualize o Produto</h3>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nomeProdutos">Nome Produto</label>
							<input type="text" class="form-control" id="nomeProdutos" name="nomeProdutos" value="{{ $produto -> nomeProdutos }}">
						</div>
						<div class="form-group col-md-6">
							<label for="descricaoProdutos">Descrição do Produto</label>
							<input type="text" class="form-control" id="descricaoProdutos" name="descricaoProdutos" value="{{ $produto -> descricaoProdutos }}">
						</div>
					</div>

					<div class="form-row">
					<div class="form-group col-md-3">
							<label for="categoriaProdutos">Categoria do Produto</label>
							<input type="text" class="form-control" id="categoriaProdutos" name="categoriaProdutos" value="{{ $produto -> categoriaProdutos }}">
						</div>
						<div class="form-group col-md-3">
							<label for="valorProdutos">Valor do Produto</label>
							<input type="number" class="form-control" id="valorProdutos" name="valorProdutos" value="{{ $produto -> valorProdutos }}">
						</div>
						<div class="form-group col-md-6">
							<label for="caminhoImagemProdutos">Imagem do Produto</label>
							<input type="text" class="form-control" id="caminhoImagemProdutos" name="caminhoImagemProdutos" value="{{ $produto -> caminhoImagemProdutos }}">
						</div>
					</div>

					
					
					<button type="submit" class="btn btn-dark btn-primary btn-md" name="cadastrar" value="cadastrar" style="margin-bottom:20px;">Cadastrar</button>
			</form>

			@isset($msg)
            <h2 class="mensagem-admin">{{ $msg }}</h2>
            @endisset

		</div>
	</div>
    @endsection
