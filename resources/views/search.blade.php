<link rel="stylesheet" href="{{ asset('/css/app.css') }}">

<form action="{{ route('search.search') }}" method="POST">
    @csrf
    <label for="cliente">Cliente:</label>
    <input type="text" name="cliente" id="cliente" value="{{$cliente ?? ''}}">
        <br><br>
    <label for="vendedor">Vendedor:</label>
    <input type="text" name="vendedor" id="vendedor" value="{{$vendedor ?? ''}}">
        <br><br>
    <label for="date">Data Inicial:</label>
    <input type="date" name="data_inicial" id="data_inicial" value="{{$data_inicial ?? ''}}">
    <br><br>
    <label for="date">Data Final:</label>
    <input type="date" name="data_final" id="data_final" value="{{$data_final ?? ''}}">
    <br><br>

    <button type="submit">Pesquisar</button>
</form>

@if(isset($results))
    <h2>Resultados da Pesquisa:</h2>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Vendedor</th>
                <th>Data e Hora</th>
                <th>Descrição</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->cliente }}</td>
                    <td>{{ $result->vendedor }}</td>
                    <td>{{ $result->data_hora }}</td>
                    <td>{{ $result->descricao }}</td>
                    <td>

                        <a href="{{ route('edit', ['id' => $result->id]) }}">Editar</a>
                        <a href="{{ route('remove', ['id' => $result->id]) }}">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
