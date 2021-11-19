<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{

    public function index()
    {
        $snippets = Snippet::all();

        return response()->json([
            'status' => 200,
            'snippets' => $snippets
        ]);
    }

    public function store(Request $request)
    {
        $snippet = new Snippet;
        $snippet->author = $request->input('author');
        $snippet->name = $request->input('name');
        $snippet->snippet = $request->input('snippet');
        $snippet->description = $request->input('description');
        $snippet->language = $request->input('language');
        $snippet->style = $request->input('style');
        $snippet->save();

        return response()->json([
            'status' => 200,
            'message' => 'Snippet added successfully'
        ]);
    }

    public function edit($id)
    {
        $snippet = Snippet::find($id);

        return response()->json([
            'status' => 200,
            'snippet' => $snippet
        ]);
    }

    public function update(Request $request, $id)
    {
        $snippet = Snippet::find($id);
        $snippet->author = $request->input('author');
        $snippet->name = $request->input('name');
        $snippet->snippet = $request->input('snippet');
        $snippet->description = $request->input('description');
        $snippet->language = $request->input('language');
        $snippet->style = $request->input('style');
        $snippet->update();

        return response()->json([
            'status' => 200,
            'message' => 'Snippet updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $snippet = Snippet::find($id);
        $snippet->destroy($id);

        return response()->json([
            'status' => 200,
            'message' => 'Snippet successfully deleted'
        ]);
    }

}
