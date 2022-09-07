<x-layout title="User">
    <h1>Users</h1>
    <a class="btn mb-2 btn-dark" href="/client/create">Create</a>
    <ul class="list-group">
        @foreach($clients as $client)
            <li class="list-group-item d-flex justify-content-between align-items-center" >{{$client->nome}}
                <span class="d-flex">
                    <a class="btn btn-primary btn-sm" href="/client/{{$client->id}}/edit">Editar</a>
                    <form action="/clients/destroy/{{$client->id}}" method="post" class="ms-2">
                        @csrf
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>