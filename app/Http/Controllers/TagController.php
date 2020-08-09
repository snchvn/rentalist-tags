<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index(){
        return Tag::all();
    }

    public function show($id){
        return Tag::find($id);
    }

    public function store (Request $request){
        return Tag::create($request->all());
    }

    public function update(Request $request, $id){
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return $task;
    }

    public function delete(Request $request, $id){
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return 204;
    }
}
