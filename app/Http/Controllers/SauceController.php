<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sauces = Sauce::all(); 
        return view('sauce.index', compact("sauces"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sauce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'userId' => 'required',
            'name' => 'required',
            'manufacturer'=>'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'heat' => 'required',
            ]);
        // var_dump($request);

        $requestData = $request->all();


        if (isset($_FILES['imageUrl'])) {
            $origine = $_FILES['imageUrl']['tmp_name'];
            $destination = 'images/'.basename($_FILES['imageUrl']['name']);
            move_uploaded_file($origine, $destination);
        }
        $requestData["imageUrl"] = 'images/'.$request->file('imageUrl')->getClientOriginalName();
        Sauce::create($requestData);

        return redirect()->route('sauce.index')->with('success','Client créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sauce = Sauce::find($id);
        return view('sauce.show', compact('sauce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sauce = Sauce::find($id);
        return view('sauce.edit', compact('sauce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sauce=Sauce::find($id);
        $requestData = $request->all();
        if ($request["imageUrl"] != null) {
            $origine = $_FILES['imageUrl']['tmp_name'];
            $destination = 'images/'.basename($_FILES['imageUrl']['name']);
            move_uploaded_file($origine, $destination);
            $requestData['imageUrl'] = 'images/'.$request->file('imageUrl')->getClientOriginalName();
        }
        else {
            $requestData['imageUrl']=$sauce['imageUrl'];
        }

        $sauce->update($requestData);
        return redirect()->route('sauce.index')->with('success','Client mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sauce = Sauce::find($id);
        if (!$sauce) {
            return redirect()->route('sauce.index');
        }
        $sauce->delete();
        return redirect()->route('sauce.index');
    }
}
