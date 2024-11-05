<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function status()
    {
        // Retornando em formato json
        return response()->json(['status' => 'ok', 'message' => 'API is running OK!'], 200);
    }

    public function clients()
    {
        $clients = Client::paginate(10);

        // return response()->json($clients);

        return response()->json([
            'status' => 'ok',
            'message' => 'sucess',
            'data' => $clients
        ], 200);
    }

    public function clientById($id)
    {
        $client = Client::find($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'sucess',
            'data' => $client
        ], 200);
    }

    public function client(Request $request)
    {
        //check if id is provided
        if(!$request->id) {
            return response()->json([
                'status' => 'error',
                'message' => 'Client ID is required',
            ], 400);
        }

        $client = Client::find($request->id);

        return response()->json([
            'status' => 'ok',
            'message' => 'sucess',
            'data' => $client
        ], 200);
    }

    public function addClient(Request $request)
    {
        // Create a new client
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();

        return response()->json([
            'status' => 'ok',
            'message' => 'sucess',
            'data' => $client
        ], 200);
    }

    public function updateClient(Request $request)
    {
        //check if id is provided
        if(!$request->id) {
            return response()->json([
                'status' => 'error',
                'message' => 'Client ID is required',
            ], 400);
        }

        $client = Client::find($request->id);

        // update client
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();

        return response()->json([
            'status' => 'ok',
            'message' => 'sucess',
            'data' => $client
        ], 200);
    }

    public function deleteClient($id)
    {
        $client = Client::find($id);
        $client->delete();

        return response()->json([
            'status' => 'ok',
            'message' => 'sucess'
        ], 200);
    }
}
