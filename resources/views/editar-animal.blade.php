<H1>EDITANDO: {{$animal->NOME}}</H1>
<form action="/update-animal/{{$animal->id}}" method="POST">
    @csrf
    @method('PUT') 
    <input type="text" name="NOME" placeholder="NOME" value="{{$animal ->NOME}}">
    <input type="number" name="IDADE" placeholder="IDADE" value="{{$animal->IDADE}}">
    <input type="text" name="DESCRICAO" placeholder="DESCRIÇAO" value="{{$animal->DESCRICAO}}">
    <input type="text" name="TIPO" placeholder="TIPO DO ANIMAL" value="{{$animal->TIPO}}">
    <input type="text" name="RACA" placeholder="RAÇA" value="{{$animal->RACA}}">
    <input type="text" name="COMPRAVACINA" placeholder="COMPROVANTE DE VACIA" value="{{$animal->COMPRAVACINA}}">
    <input type="submit" value="Editar">
</form>