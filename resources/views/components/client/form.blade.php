<form {{ $attributes }} action="{{$action}}" method="{{$method}}" style="display: flex; flex-direction: column;">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="nome">Nome</label>
        <input class="form-control"
               type="text"
               id="nome"
               name="nome"
               @isset($client) value="{{$client->nome}}" @endisset>
        <label class="form-label" for="cpf">CPF</label>
        <input class="form-control"
               type="text"
               id="cpf"
               name="cpf"
               @isset($client) value="{{$client->cpf}}" @endisset>
        <label class="form-label" for="categoria">Categoria</label>
        <input class="form-control"
               type="text"
               id="categoria"
               name="categoria"
               @isset($client) value="{{$client->categoria}}" @endisset>
        <label class="form-label" for="cep">CEP</label>
        <input class="form-control"
               type="text"
               id="cep"
               name="cep"
               @isset($client) value="{{$client->cep}}" @endisset>
        <label class="form-label" for="rua">Rua</label>
        <input class="form-control"
               type="text"
               id="rua"
               name="rua"
               @isset($client) value="{{$client->rua}}" @endisset>
        <label class="form-label" for="bairro">Bairro</label>
        <input class="form-control"
               type="text"
               id="bairro"
               name="bairro"
               @isset($client) value="{{$client->cpf}}" @endisset>
        <label class="form-label" for="cidade">Cidade</label>
        <input class="form-control"
               type="text"
               id="cidade"
               name="cidade"
               @isset($client) value="{{$client->cidade}}" @endisset>
        <label class="form-label" for="uf">UF</label>
        <input class="form-control"
               type="text"
               id="uf"
               name="uf"
               @isset($client) value="{{$client->uf}}" @endisset>
        <label class="form-label" for="complemento">Complemento</label>
        <input class="form-control"
               type="text"
               id="complemento"
               name="complemento"
               @isset($client) value="{{$client->complemento}}" @endisset>
        <label class="form-label" for="telefone">Telefone</label>
        <input class="form-control"
               type="text"
               id="telefone"
               name="telefone"
               @isset($client) value="{{$client->telefone}}" @endisset>
        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
    </div>
</form>
