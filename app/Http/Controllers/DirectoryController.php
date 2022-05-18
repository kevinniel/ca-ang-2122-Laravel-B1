<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Directory;

class DirectoryController extends Controller
{
    public function index() {
        $directories = Directory::all();
        return view('directory.index', compact('directories'));
    }
    
    public function show($id) {
        $directory = Directory::find($id);
        return view('directory.show', compact('directory'));
    }

    public function create() {
        return view('directory.create');
    }

    public function store(Request $request) {
        $directory = new Directory();
        $directory->name = $request->get('name');
        $directory->save();
        return redirect()->route('directory.index');
    }
    
    public function edit($id) {
        $directory = Directory::find($id);
        return view('directory.edit', compact('directory'));
    }
    
    public function update(Request $request) {
        $directory = Directory::find($request->get('id'));
        $directory->name = $request->get('name');
        $directory->save();
        return redirect()->route('directory.index');
    }
    
    public function destroy(Request $request) {
        Directory::destroy($request->get('id'));
        return redirect()->route('directory.index');
    }
}
