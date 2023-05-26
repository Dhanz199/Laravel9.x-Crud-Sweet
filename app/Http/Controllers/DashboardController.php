<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RumahSakit;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $title['title'] = 'Dashboard';
        // $data = RumahSakit::all();
        $data = RumahSakit::orderBy('id_rs', 'ASC')->get();
        return view('dashboard.home')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validateion Sebelum menyimpan ke database
        $request->validate([
            'nama_rumah_sakit' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            // 'iamge' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1028'
        ]);

        $data = new RumahSakit;
        // Request Data Form HTML create
        $data->nama_rumah_sakit = $request->nama_rumah_sakit;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->telepon = $request->telepon;

        $data->save();
        return redirect()->route('dashboard.index')->with('success', 'Rumah Sakit Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_rs)
    {
        // $data = new RumahSakit;
        // $data = $id_rs->find($id_rs);
        $data = RumahSakit::find($id_rs);

        // Request Data Form HTML create
        $data->nama_rumah_sakit = $request->nama_rumah_sakit;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->telepon = $request->telepon;

        $data->save();
        return redirect()->route('dashboard.index')->with('success', 'Data Telah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_rs)
    {
        // RumahSakit::where('id_rs', $id_rs)->delete();
        $data = RumahSakit::find($id_rs);
        $data->delete();
        
        return response()->json([
            'status' => 'Data Telah Berhasil DiHapus',
        ]);
    }
}
