@extends('layouts/main')
@section('title','- Cadastro de Produto')

@section('content')

<div class="container">

    <div class="card shadow bg-light mt-1">
        <div class="card-header">
            <div class="row mt-3">
                <div class="col">
                    <h3>Produtos</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('produtos_store') }}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <label for="produto" class="text-secondary">Produto: </label>
                        <input type="text" name="produto" value="{{ old('produto') }}" maxlength="80" id="" class="form-control text-secondary">
                        <small class="text-secondary">*Campo Obrigatório</small>
                        <small class="text-danger"></small><br>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <label for="descricao" class="text-secondary">Descrição: </label>
                        <textarea name="descricao" class="form-control text-secondary" id="" cols="10" rows="3">{{ old('descricao') }}</textarea>
                        <small class="text-secondary">*Campo Obrigatório</small>
                        <small class="text-danger"></small><br>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-sm-12 col-lg-2">
                        <label for="preco" class="text-secondary">Preço:  </label>
                        <div class="input-group mb-1">
                            <span class="input-group-text text-white bg-secondary" id="basic-addon1">R$</span>
                            <input type="text" name="preco" value="{{ old('preco') }} " id="" class="form-control text-secondary">
                            <small class="text-danger"></small><br>
                        </div>
                        <small class="text-secondary">*Campo Obrigatório</small>
                    </div>
                </div>
                <div class="row mt-2">
                    
                    <div class="col">
                        <button type="submit" class="btn btn-info text-white">Gravar</button>
                        <button type="reset" class="btn btn-secondary">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection