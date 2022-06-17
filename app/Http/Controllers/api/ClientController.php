<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        return response()->json([
            'clients' => Client::all(),
        ]);
    }

    public function search(Request $request)
    {
        $client = DB::table('clients')
            ->where('document_type', $request->document_type)
            ->where('document_number', $request->document_number)
            ->first();
        return response()->json([
            'client' => $client,
        ]);
    }

    public function combos()
    {
        $districts = DB::table('districts')->pluck('name', 'id');
        return response()->json([
            'districts' => $districts,
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
