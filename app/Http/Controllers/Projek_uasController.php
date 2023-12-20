<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Projek_uas;
use Illuminate\View\View;

class Projek_uasController extends Controller
{

    public function index(): View
    {
        $gol = Projek_uas::all();
        return view ('gol.index')->with('gol', $gol);
    }

 
    public function create(): View
    {
        return view('gol.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Projek_uas::create($input);
        return redirect('gol');
    }

    public function show(string $id): View
    {
        $gol = Projek_uas::find($id);
        return view('gol.show')->with('gol', $gol);
    }

    public function edit(string $id): View
    {
        $gol = Projek_uas::find($id);
        return view('gol.edit')->with('gol', $gol);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $gol = Projek_uas::find($id);
        $input = $request->all();
        $gol->update($input);
        return redirect('gol');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!'); 
    }
}