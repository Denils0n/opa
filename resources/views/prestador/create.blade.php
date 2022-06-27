<form action="{{route('prestador.store')}}" method="post">
    @csrf
    <input type="text" name="CPF" placeholder="cpf/cnpj">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="estado" placeholder="estado">
    <input type="text" name="cidade" placeholder="cidade">
    <input type="text" name="bairro" placeholder="bairro">
    <input type="text" name="rua" placeholder="rua">
    <input type="text" name="numero" placeholder="numero">
    <input type="text" name="complemento" placeholder="complemento">
    <input type="text" name="celular" placeholder="celular">
    <input type="submit" value="Enviar">
</form>