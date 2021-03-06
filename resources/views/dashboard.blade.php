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
                <p> Seja bem vindo(a) {{ Auth::user()->name }}</p>

                @if(!Auth::user()->isPrestador())
                   
                   @can('usuario')
                   Eu tenho permissão de usuario
                   @elsecan('prestador')
                   Eu tenho permissão de prestador
                   @endcan
                   <table>
                       <tr>
                           <th>NOME</th>
                           <th>IDADE</th>
                           <th>DESCRICAO</th>
                           <th>TIPO</th>
                           <th>RACA</th>
                           <th>COMPROVANTE</th>
                       </tr>
                        @foreach(Auth::user()->animal as $animal)
                        
                        <tr>
                                <td>{{$animal->NOME}}</td>
                                <td>{{$animal->IDADE}}</td>
                                <td>{{$animal->DESCRICAO}}</td>
                                <td>{{$animal->TIPO}}</td>
                                <td>{{$animal->RACA}}</td>
                                <td>{{$animal->COMPRAVACINA}}</td>
                                <td>
                                <form action="/apagar-animal/{{$animal->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="Apagar" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Tem certeza que deseja excluir esse animal?');">APAGAR</button>
                                </form>
                                <a href="/editar-animal/{{$animal->id}}" method="GET"> editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <form action="/add-animal" method="POST">
                        @csrf
                        <input type="text" name="NOME" placeholder="NOME">
                        <input type="number" name="IDADE" placeholder="IDADE">
                        <input type="text" name="DESCRICAO" placeholder="DESCRIÇAO">
                        <input type="text" name="TIPO" placeholder="TIPO DO ANIMAL">
                        <input type="text" name="RACA" placeholder="RAÇA">
                        <input type="text" name="COMPRAVACINA" placeholder="COMPROVANTE DE VACINA">
                        <input type="submit" value="Adicionar">
                    </form>

                    
                    <table>
                        <tr>
                            <th> PRESTADOR</th>
                            <th> HORA</th>
                            <th> PREÇO</th>
                            <th> DESCRIÇAO</th>
                        </tr>
                        <tr>
                            
                            @foreach(App\Models\Prestador::all() as $prestador)
                            @foreach($prestador->servicos as $servico)
                            <td>{{$prestador->nome}}</td>
                            <td>{{$servico->hora}}</td>
                            <td>{{$servico->preco}}</td>
                            <td>{{$servico->descricao}}</td>
                            @endforeach

                        </tr>
                        @endforeach
                    </table>
                    
                    @else

                    <table>
                        <p>SEUS SERVIÇOES:</p>
                        <tr>
                            <th>SERVICO</th>
                            <th>HORA</th>
                            <th>PREÇO</th>
                            <th>DESCRIÇAO</th>
                        </tr>

                    
                    @foreach( Auth::user()->prestadorProfile->categorias as $servicos)
                        <tr>
                        <td>{{$servicos->nome}}</td>
                            @foreach(Auth::user()->prestadorProfile->servicos as $servico)
                             
                                <td>{{$servico->hora}}</td>
                                <td>  {{$servico->preco}}</td>
                                <td>  {{$servico->descricao}}</td>
                            @endforeach
                            <td>
                                <form action="/apagar-servico/{{$servico->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="Apagar" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Tem certeza que deseja excluir esse servico?');">APAGAR</button>
                                </form>
                            </td>
                            <td>
                                <a href="/editar-servico/{{$servico->id}}" method="GET"> editar</a>
                            </td>
                        </tr>

                            
                                

                    @endforeach
                    </table>

                    <form action="/add-servico" method="post">
                        @csrf
                        <input type="text" name="hora" placeholder="hora">
                        <input type="number" name="preco" placeholder="preço">
                        <input type="text" name="descricao" placeholder="Descrição">
                        <select name="servico">
                        @foreach(App\Models\Categoria::all() as $categorias)
                        <option>{{$categorias->id}}</option>
                        @endforeach
                        </select>
                        <input type="submit" value="Adicionar">
                    </form>
                    
                   

                    @endif
                    
                       

                            

                        

                    
                </div>
            </div>

        </div>
    </div>
    
</x-app-layout>


