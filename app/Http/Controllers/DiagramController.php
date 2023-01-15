<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class DiagramController extends Controller
{
    //
    public function index()
    {
        return view ('admin.content.diagram',[
            'title' => 'Manage Pengunjung',
            'genres' => Visitor::all()
        ]);
    }
}
