<?php

namespace App\Http\Controllers\Categorias;

use Exception;
use App\Http\Controllers\Controller;
use App\Models\Categorias as Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriasController extends Controller
{
    protected $categoria;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categorias = Categorias::latest()->paginate(5);

        // return view('categorias.index',compact('categorias'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);


        $categoria = Categorias::latest()->paginate(5);

        $categoria = Categorias::all();
        return view('layouts.forms.categorias.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = null;
        return view('layouts.forms.categorias.create');
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

        $categoria = Categorias::all();
        return view('layouts.forms.categorias.index', compact('categoria'));

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
        $categoria = Categorias::find($id);
        return view('layouts.forms.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $categoria)
    {
        return view('layouts.forms.categorias.edit', compact('categoria'));
    }

    /**
     * 
     */
    public function update(Request $request, Categorias $categoria)
    {
        $request->validate([
            'descricao' => 'required',
        ]);


        $categoria->update($request->all());

        // $idRegistro = Categorias::updateProperties($categoria);

        if (!empty($categoria)) {
            return redirect()->route('categorias.index')
                ->with('success', 'User updated successfully');
        }

        return response()->json(['msg' => 'REGISTER.UPDATE.ERROR'], 203);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $categoria)
    {        
        $categoria->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'User deleted successfully');
    }
}
