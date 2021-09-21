@extends('layouts/main')
@section('title','- Lista de Produtos')

@section('content')
<div class="container mt-3">
    <h3>Lista de Produtos</h3>
    <div class="table-responsive">
        <table class="table table-hover" id="myTable" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Data de Cadastro</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($produtos as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->produto }}</td>
                        <td>R$ {{ number_format($p->preco,2,',','.') }}</td>
                        <td>{{ date('d/m/Y',strtotime($p->created_at)) }}</td>
                        <td>
                            <a href="{{ route('produtos_edit',$p->id) }}" class="btn btn-info btn-sm text-white"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('produtos_warning',$p->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            
                        </td>
                    </tr>
                    @endforeach
                    
            </tbody>
        </table>
    </div>
</div>
@endsection