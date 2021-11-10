<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc</title>
</head>
<body>
    <section>
        <form action="{{ route('debug') }}" method="post">
            {{-- token de autenticação --}}
            @csrf
            <label>Título</label>
            <input type="text" name="title"/>
            <br/><br/>
            <label>Sub Título</label>
            <input type="text" name="subtitle"/>
            <br/><br/>
            <label>Conteúdo do Artigo</label>
             <textarea name="content" cols="30" rows="10"></textarea>
            <br/><br/>
            <input type="submit" value="Cadastrar"/>
        </form>
    </section>
</body>
</html>