<H1>EDITANDO: {{$prestador->mome}}</H1>
<form action="/update-prestador{{$prestador->id}}" method="POST">
    @csrf
    @method('PUT') 
    <input type="number" name="CPF/CNPJ" placeholder="CPF/CNPJ" value="{{$prestador ->CPF/CNPJ}}">
    <input type="text" name="nome" placeholder="nome" value="{{$prestador ->nome}}">
    <input type="number" name="estado" placeholder="estado" value="{{prestador->estado}}">
    <input type="text" name="cidade" placeholder="cidade" value="{{$prestador->cidade}}">
    <input type="text" name="bairro" placeholder="bairro" value="{{$prestador->bairro}}">
    <input type="text" name="rua" placeholder="rua" value="{{$prestador->rua}">
    <input type="text" name="complemento" placeholder="complemento" value="{{$prestador->complemento}}">
    <input type="text" name="celular" placeholder="celular" value="{{$prestador->celular}}">


    <input type="submit" value="Editar">
</form>
