<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportsController extends Controller
{
    /**
     * Display about us view.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('supports.about');
    }

    /**
     * Help customers' and solve their problems
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supports.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Support::create($request->all());

        return redirect('contact')
            ->with('success', 'Message sent successfully.');
    }
}
