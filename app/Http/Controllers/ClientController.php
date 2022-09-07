<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientFormRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index(Request $request)
    {
        $request->get('id');
        $clients = Client::query()->orderBy('nome')->get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('clients.create', []);
    }

    public function store(ClientFormRequest $request)
    {

        Client::create($request->all());

        return redirect('clients');
    }

    public function destroy(Request $request)
    {
       Client::destroy($request->id);

        return redirect('clients');
    }

    public function edit(Request $request)
    {
        $client = Client::find($request->id);
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    public function update(ClientFormRequest $request)
    {
        $client = Client::find($request->id);
        $client->fill($request->all());
        $client->save();

        return redirect('/clients');
    }

}
