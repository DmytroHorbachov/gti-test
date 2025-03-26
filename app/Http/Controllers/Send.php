<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Send extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = $i;
        }

        $news = [];

        for ($i = 1; $i <= 10; $i++) {
            $news[] = $i;
        }

        $users = [];

        for ($i = 1; $i <= 10; $i++) {
            $users[] = $i;
        }

        $articles = [];

        for ($i = 1; $i <= 10; $i++) {
            $articles[] = $i;
        }

        $items = [];

        for ($i = 1; $i <= 10; $i++) {
            $items[] = $i;
        }
      
        return view('send', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
