@extends('admin.page')

@section('body')

    <h3>Novo link</h3>

    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif
    
    <form method="POST">
        @csrf

        <label>
            Status:<br>
            <select name="status">
                <option value="0">Desativado</option>
                <option value="1">Ativado</option>
            </select>
        </label>

        <label>
            Título do link: <br>
            <input type="text" name="title" placeholder="Título aqui">
        </label>

        <label>
            URL do link: <br>
            <input type="text" name="href" placeholder="Url">
        </label>

        <label>
            Cor do fundo: <br>
            <input type="color" name="op_bg_color" value="#FFFFFF">
        </label>

        <label>
            Cor do texto: <br>
            <input type="color" name="op_text_color" value="#000000">   
        </label>

        <label>
            Tipo de borda:<br>
            <select name="op_border_type">
                <option value="square">Quadrado</option>
                <option value="rounded">Arredondado</option>
            </select>
        </label>

        <label>
            <input type="submit" value="Salvar">
        </label>

    </form>

@endsection