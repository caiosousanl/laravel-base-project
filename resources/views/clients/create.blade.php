<x-layout title="Cadastro de usuário">
    <h1>Cadastro de Usuário</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <x-client.form action='/client' method="post" />
</x-layout>