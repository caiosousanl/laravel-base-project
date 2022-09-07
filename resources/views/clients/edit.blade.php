<x-layout title="Alteração de usuário">
    <h1>Alteração do cliente {{$client->nome}}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <x-client.form action="/client/{{$client->id}}" :client="$client" method="post"/>
</x-layout>

