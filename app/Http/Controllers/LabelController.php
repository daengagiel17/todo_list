<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Label;

class LabelController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Label::with('todo')->get();
    }

    public function show($id)
    {
        $label = Label::with('todo')->find($id);

        return  $label??'error';
    }

    public function store(Request $request)
    {
        $label = Label::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'judul' => $request->judul,
                'detail' => $request->detail,
                'gambar' => $request->gambar,
            ]
        );

        return  $label??'error';
    }

    public function destroy($id)
    {
        return  Label::destroy($id)? 'success' : 'error';
    }    
}