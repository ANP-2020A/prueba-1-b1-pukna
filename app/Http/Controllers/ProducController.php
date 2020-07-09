<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProducController extends Controller
{
    public function index()     {
        return products::all();
    }
    public function show($id)
    {
        return products::find($id);
    }


    public function store(Request $request)
    {
        return products::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = products::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = products::findOrFail($id);         $article->delete();

        return 204;
    }
}
