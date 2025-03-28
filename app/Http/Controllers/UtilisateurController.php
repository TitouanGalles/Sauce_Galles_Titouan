<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $utilisateurs = Utilisateur::paginate(10); 
        return view('utilisateur.index', compact("utilisateurs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Client::create($request->all());

        // return redirect()->route('client.index')->with('success','Client créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $client = Client::find($id);
        // return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $client = Client::find($id);
        // return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $client=Client::find($id);
        // $client->update($request->all());
        // return redirect()->route('client.index')->with('success','Client mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $client = Client::find($id);
        // if (!$client) {
        //     return redirect()->route('client.index')->with('error', 'Client non trouvé');
        // }
        // $client->delete();
        // return redirect()->route('client.index')->with('success','Client supprimé avec succès');
    }
}
