<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(Request $request)
    {
        $publishers = Publisher::with('books')->get();
        if ($request->has('search')) {
            $publishers = Publisher::where('name', 'like', '%' . $request->search . '%')->with('books')->get();
        }
        return view('publishers.index', compact('publishers'));
    }

    public function show(Publisher $publisher)
    {
        return view('publishers.show', compact('publisher'));
    }
}
