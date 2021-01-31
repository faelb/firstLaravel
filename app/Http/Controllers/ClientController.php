<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $client = Testdata::all();
        return response($client, 200);
    }

    public function clientWithRelations()
    {
        $client = Client::with('Testdatas')->get();
        return response($client, 200);
    }
}
