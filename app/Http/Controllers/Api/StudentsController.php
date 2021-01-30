<?php

namespace App\Http\Controllers\Api;

Use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::orderBy('id','desc')->paginate(3);

        return response()->json([
            'success' => true,
            'message' => 'Daftar data Mahasiswa',
            'data'    => $students
        ], 200);
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
         'nama_mahasiswa' => 'required',
         'alamat' => 'required',
         'no_tlp' => 'required',
         'email' => 'required',
        ]);

        $students = students::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email
            
        ]);

        if($students)
        {
            return response()->json([
                'success' => true,
                'message' => 'Mahasiswa berhasil di tambahkan',
                'data'    => $students
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Mahasiswa gagal di tambahkan',
                'data'    => $students
            ], 409);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = students::where('id', $id)->first();

    return response()->json([
        'success' => true,
        'message' => 'Detail Data Mahasiswa',
        'data'    => $absen
    ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
        ]);
        
        $s = students::find($id)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email
        ]);

        return response()->json([
            'success' =>true,
            'message' =>'Post Updated',
            'data' => $s
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = students::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data'    => $cek
        ], 200);
    }
}
