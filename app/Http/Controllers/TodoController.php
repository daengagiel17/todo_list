<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Todo::with('label')->get();
    }

    public function show($id)
    {
        $todo = Todo::with('label')->find($id);

        return  $todo??'error';
    }

    public function store(Request $request)
    {
        $todo = Todo::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'judul' => $request->judul,
                'detail' => $request->detail,
                'gambar' => $request->gambar,
            ]
        );

        return  $todo??'error';
    }

    public function destroy($id)
    {
        return  Todo::destroy($id)? 'success' : 'error';
    }    
}