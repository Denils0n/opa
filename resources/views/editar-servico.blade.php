<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    
    <style>

    body{

        background-color: green;

    }
    input{

        background-color: blueviolet;


    }
    
    </style>
    
</head>
<body>
    
    <p style="color: red; background:blue; border-inline-color:green; font-size: large; font-size: larger;font-size: larger; font-size: larger; font-size: larger; font-size: larger; font-size: larger;" >Palominha a melhor </p>
    <H1>EDITANDO: {{$servicos->nome}}</H1>
<form action="/update-servicos/{{$servicos->id}}" method="POST">
    @csrf
    @method('PUT') 
    <input type="text" name="hora" placeholder="nome" value="{{$servicos ->hora}}">
    <input type="number" name="preco" placeholder="IDADE" value="{{$servicos->preco}}">
    <input type="text" name="descricao" placeholder="DESCRIÇAO" value="{{$servicos->descricao}}">
    <input type="submit" value="Editar">
</form>
</body>
</html>