<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documento;
use App\Http\Requests\DocumentoRequest;
class DocumentoController extends Controller
{
    //
    public function index()
    {
        $documentos = Documento::all();
        return view('admin.documentos.index', compact('documentos'));
    }

    public function create()
    {
        return view('admin.documentos.create');
    }

    public function store(DocumentoRequest $request)
    {
        
        try {
            Documento::create($request->all());
            return redirect()->back()->with('store', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('store.error', 1);
        }
        
    }

    public function show(Documento $documento)
    {
        return view('admin.documentos.show', compact('documento'));
    }

    public function edit(Documento $documento)
    {
        return view('admin.documentos.edit', compact('documento'));
    }

    public function update(DocumentoRequest $request, Documento $documento)
    {try {
        $documento->update($request->all());
        return redirect()->back()->with('update', 1);
    } catch (\Throwable $th) {
        //throw $th;
        return redirect()->back()->with('update.error', 1);
    }
       
    }

    public function destroy(Documento $documento)
    {
        try {
            $documento->delete();
            return redirect()->back()->with('delete', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('delete.error', 1);
        }
      
    }
}
