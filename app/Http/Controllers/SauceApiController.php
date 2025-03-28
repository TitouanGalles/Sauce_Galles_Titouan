<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;

class SauceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sauces = Sauce::all(); 
        return response()->json($sauces);
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
        $sauces = Sauce::create($requestData);
        return response()->json($sauces);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sauce = Sauce::where('id', $id)->firstOrFail();
        return response()->json($sauce);
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

        $sauce = Sauce::where('id', $id)->update($requestData);
        return response()->json($sauce);
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
        $sauce = Sauce::where('id', $id)->delete();
        return response()->json(['message' => 'Sauce supprimé']);
    }
}
