<?php

namespace App\Http\Controllers\Categorias;

use App\Http\Controllers\Controller;
use App\Models\Categorias as Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    protected $categorias;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::latest()->paginate(5);

        // return view('layouts.forms.categorias.index', compact('categorias'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        $categorias = Categorias::all();
        return view('layouts.forms.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = null;
        return view("layouts.forms.categorias.create");
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
            'descricao' => 'required',
        ]);
        Categorias::create($request->all());
     
        $categorias = Categorias::all();
        return view('layouts.forms.categorias.index', compact('categorias'));

        // return redirect()->route('categorias')
        //                 ->with('success','Categoria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Categorias::find($id);
        return view('layouts.forms.categorias.show', compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        printf('teste 1');
        $categorias = Categorias::find($id);
        return view('layouts.forms.categorias.edit',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias $categorias)
    {
        
        printf('teste 2');
        print($request);
        printf($categorias);
        


        $categorias->update($request->all());    
        $categorias = Categorias::all();
        // return view('layouts.forms.categorias.index', compact('categorias'));
        
        return redirect()->route('categorias.categorias')
        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias = Categorias::find($id);
        $categorias->delete();
    
        return redirect()->route('categorias.index')
                        ->with('success','User deleted successfully');
    }
}
