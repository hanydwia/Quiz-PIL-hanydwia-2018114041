<?php

namespace App\Http\Controllers;
Use App\Models\Matakuliahs;
use Illuminate\Http\Request;

class matakuliahsController extends Controller
{
    public function index()
    {
     $matakuliahs = Matakuliahs::orderBy('id','desc')->paginate(5);
     
     return view ('matakuliahs.index', compact('matakuliahs'));
    }
    public function create()
    {
     
     return view ('matakuliahs.create');
    }
    public function store(Request $request)
     {
         // Validate the request...
         $request->validate([
          'nama_matakuliah' => 'required',
          'sks' => 'required',
      ]);
 
         $matakuliahs = new matakuliahs;
 
         $matakuliahs->nama_matakuliah = $request->nama_matakuliah;
         $matakuliahs->sks = $request->sks;
 
         $matakuliahs->save();
 
         return redirect('/');
 
    }
    public function show($id)
    {
       $matakuliah = Matakuliahs::where('id',$id)->first();
       return view('matakuliahs.show', ['matakuliah' => $matakuliah]);
    }
    public function edit($id)
    {
       $matakuliah = Matakuliahs::where('id',$id)->first();
       return view('matakuliahs.edit', ['matakuliah' => $matakuliah]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
         'nama_matakuliah' => 'required',
          'sks' => 'required',
        ]);
   
         matakuliahs::find($id)->update([
            'nama_matakuliah_id' => $request->nama_matakuliah,
            'sks' => $request->sks,
            
         ]);
   
         return redirect ('/');
    }
    public function destroy($id)
    {
       Matakuliahs::find($id)->delete();
       return redirect ('/');
    }
}
