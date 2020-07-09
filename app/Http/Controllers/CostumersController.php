<?php

namespace App\Http\Controllers;

use App\costumers;
use App\products;
use Illuminate\Http\Request;

class CostumersController extends Controller
{
    public function index()     {
        return costumers::all();
    }
    public function show($id)
    {
        return costumers::find($id);
    }


    public function store(Request $request)
    {
        return costumers::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = costumers::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = costumers::findOrFail($id);         $article->delete();

        return 204;
    }
}
