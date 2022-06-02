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
                   <p> You're logged in!</p>
                   <table>
                       <tr>
                           <th>NOME</th>
                           <th>IDADE</th>
                           <th>DESCRICAO</th>
                           <th>TIPO</th>
                           <th>RACA</th>
                           <th>COMPOVANTE</th>
                       </tr>
                        @foreach(Auth::user()->animal as $animal)

                            <tr>
                                <td>{{$animal->AN_NOME}}</td>
                                <td>{{$animal->AN_IDADE}}</td>
                                <td>{{$animal->AN_DESCRICAO}}</td>
                                <td>{{$animal->AN_TIPO}}</td>
                                <td>{{$animal->AN_RACA}}</td>
                                <td>{{$animal->AN_COMPRAVACINA}}</td>
                                <td>
                                <form action="/apagar-animal/{{$animal->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="Apagar" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Tem certeza que quer deletar esse animal?');">APAGAR</button>
                                </form>
                                <a href="/editar-animal/{{$animal->id}}" method="GET"> editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-animal" method="POST">
                        @csrf
                        <input type="text" name="AN_NOME" placeholder="NOME">
                        <input type="number" name="AN_IDADE" placeholder="IDADE">
                        <input type="text" name="AN_DESCRICAO" placeholder="DESCRIÇAO">
                        <input type="text" name="AN_TIPO" placeholder="TIPO DO ANIMAL">
                        <input type="text" name="AN_RACA" placeholder="RAÇA">
                        <input type="text" name="AN_COMPRAVACINA" placeholder="COMPROVANTE DE VACIA">
                        <input type="submit" value="Adicionar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>


