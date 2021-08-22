<html lang="pt">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .title {
                background: #f2f3f5;
                border: 1px;
                text-align: center;
                width: 100%;
                text-transform: capitalize;
                font-weight: bold;
                margin-bottom: 25px;
            }

            .tabela {              
                width: 100%;
            }

            table th {
                text-align: left;
            }

            .page-break {
                page-break-after: always;
            }
        </style>
    </head>

    <body>
        <div class="title">
            <h2>Lista de Tarefas</h2>
        </div>

        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Data Limite de Conclusão</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $key => $tarefa)
                    <tr>
                        <td>{{ $tarefa->id }}</td>
                        <td>{{ $tarefa->tarefa }}</td>
                        <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="page-break"></div>
        
        <h2>Page 2</h2>
    </body>
</html>

