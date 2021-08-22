<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Tarefa::all();

        // Associando os arquivos baixados apenas ao usuários autenticados
        return auth()->user()->tarefas()->get();
    }

    public function headings():array {
        return [
            'ID da Tarefa',
            'Tarefa',
            'Data Limite Conclusão'
        ];
    }

    public function map($linha):array { // limitando informações exportadas
        return [
            $linha->id,
            $linha->tarefa,
            date('m/d/Y', strtotime($linha->data_limite_conclusao))
        ];
    }
}
