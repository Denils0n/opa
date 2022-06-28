<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table>
                       <tr>
                           <th>CPF/CNPJ</th>
                           <th>nome</th>
                           <th>estado</th>
                           <th>cidade</th>
                           <th>bairro</th>
                           <th>rua</th>
                           <th>complemento</th>
                           <th>celular</th>
                       </tr>
                        @foreach(Auth::user()->prestador as $prestador)

                            <tr>
                                <td>{{$prestador->CPF/CNPJ}}</td>
                                <td>{{$prestador->nome}}</td>
                                <td>{{$prestador->estado}}</td>
                                <td>{{$prestador->cidade}}</td>
                                <td>{{$prestador->bairro}}</td>
                                <td>{{$prestador->rua}}</td>
                                <td>{{$prestador->complemento}}</td>
                                <td>{{$prestador->celular}}</td>
                                <td>
                                <form action="/apagar-prestador/{{$prestador->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="Apagar" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Tem certeza que deseja excluir esse prestador?');">APAGAR</button>
                                </form>
                                <a href="/editar-prestador/{{$prestador->id}}" method="GET"> editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-prestador" method="POST">
                        @csrf
                        <input type="text" name="CPF/CNPJ" placeholder="CPF/CNPJ">
                        <input type="number" name="nome" placeholder="nome">
                        <input type="text" name="estado}" placeholder="estado}">
                        <input type="text" name="cidade" placeholder="cidade">
                        <input type="text" name="rua" placeholder="rua">
                        <input type="text" name="complemento" placeholder="complemento">
                        <input type="text" name="celular" placeholder="celular">
                        <input type="submit" value="Adicionar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>


