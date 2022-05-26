<H1>EDITANDO: {{$animal->AN_NOME}}</H1>
<form action="/update-animal/{{$animal->id}}" method="POST">
    @csrf
    @method('PUT') 
    <input type="text" name="AN_NOME" placeholder="NOME" value="{{$animal ->AN_NOME}}">
    <input type="number" name="AN_IDADE" placeholder="IDADE" value="{{$animal->AN_IDADE}}">
    <input type="text" name="AN_DESCRICAO" placeholder="DESCRIÇAO" value="{{$animal->AN_DESCRICAO}}">
    <input type="text" name="AN_TIPO" placeholder="TIPO DO ANIMAL" value="{{$animal->AN_TIPO}}">
    <input type="text" name="AN_RACA" placeholder="RAÇA" value="{{$animal->AN_RACA}}">
    <input type="text" name="AN_COMPRAVACINA" placeholder="COMPROVANTE DE VACIA" value="{{$animal->AN_COMPRAVACINA}}">
    <input type="submit" value="Editar">
</form>