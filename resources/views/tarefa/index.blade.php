@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="font-weight-bold" href="{{route('tarefa.create')}}">Nova Tarefa</a>
                    <a class="float-right font-weight-bold mr-2" href="{{route('tarefa.exportacao', ['extensao' => 'xlsx'])}}">XLSX </a>
                    <a class="float-right font-weight-bold mr-2" href="{{route('tarefa.exportacao', ['extensao' => 'csv'])}}">CSV</a>
                    <a class="float-right font-weight-bold mr-2" href="{{route('tarefa.exportacao', ['extensao' => 'pdf'])}}">PDF</a>
                    <a class="float-right font-weight-bold mr-2" href="{{route('tarefa.exportar')}}" target="_blank">PDF V2</a> {{-- _blank abre uma nova aba --}}
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Limite Conclusão</th>
                                <th scope="col">Edição</th>
                                <th scope="col">Exclusão</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($tarefas as $key => $tarefa)
                                <tr>
                                    <th scope="row">{{ $tarefa['id'] }}</th>
                                    <td>{{ $tarefa['tarefa'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime($tarefa['data_limite_conclusao'])) }}</td>
                                    <td><a href="{{ route('tarefa.edit', $tarefa['id']) }}">Editar</a></td>
                                    <td>
                                        <form id="form_{{$tarefa['id']}}" method="post" action="{{ route('tarefa.destroy', ['tarefa' =>$tarefa->id ]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="#" onclick="document.getElementById('form_{{$tarefa['id']}}').submit()">Excluir</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach                          
                        </tbody>
                    </table>
                    
                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>

                            @for($i = 1; $i <= $tarefas->lastPage(); $i++ )
                                <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : ''}}">
                                    <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
