<?php

namespace App\Http\Controllers;

use App\Models\Notion;
use Illuminate\Http\Request;

class NotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

     /**
     * Display a listing of Topic.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notions = Notion::all();

        return view('admin.notions.index', compact('notions'));
    }

    public function create()
    {
        return view('admin.notions.create');
    }

    public function store(Request $request){

        Notion::create($request->all());

        return redirect('/notions');

    }

}
