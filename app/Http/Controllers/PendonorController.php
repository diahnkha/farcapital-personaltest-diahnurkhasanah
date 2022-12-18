<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pendonor;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Storage;

class PendonorController extends Controller
{

    // TODO: show all pendonor data
    // public function index()
    // {
    //     $pendonors = pendonor::all();
    //     return view(
    //         'pendonor.list',
    //         compact('pendonors')
    //     );
    // }

    public function index()
    {
        return view(
            'pendonor.dashboard'
        );
    }

    public function list()
    {
        return view(
            'pendonor.list',
            [
                'pendonors' => pendonor::all()
            ]
        );
    }

    // TODO: show pendonor data by id cara biasa
    // public function show($id)
    // {
    //     $pendonor = pendonor::find($id);
    //     return view('pendonor.show', ['pendonor' => $pendonor])
    // }
    public function show(pendonor $pendonor)
    {
        return view('pendonor.show', ['pendonor' => $pendonor]);
    }
    // TODO: show create form
    public function create()
    {
        return view('pendonor.create');
    }

    // TODO: show create checkform
    public function checkformcreate()
    {
        return view('pendonor.checkformcreate');
    }

    // TODO: store pendonor data from request to database
    public function store(Request $request)
    {
        $validated = [
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'jenis_kelamin' => 'required|max:1',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|min:5',

        ];
        $validated = $request->validate($validated);

        $validated['password'] = Hash::make($validated['password']);

        // dd($validated);

        // if($request->has('kelayakanpertama')){
        //     //Checkbox checked //tidak layak
        //     $kelayakanpertama = 0;

        // }else{
        //     //Checkbox not checked //layak
        //     $kelayakanpertama = 1;

        // }
        $request->has('kelayakanpertama') ? $validated['status_kelayakan'] = 0 : $validated['status_kelayakan'] = 1;

        // if($request->has('kelayakankedua')){
        //     //Checkbox checked //layak
        //     $kelayakankedua = 1;

        // }else{
        //     //Checkbox not checked //tidak layak
        //     $kelayakankedua = 0;

        // }

        // $request->has('kelayakan1') ? $kelayakan1 = 1 : $kelayakan1 = 0;
        // $request->has('kelayakan2') ? $kelayakan2 = 1 : $kelayakan2 = 0;
        // $request->has('kelayakan3') ? $kelayakan3 = 1 : $kelayakan3 = 0;
        // $request->has('kelayakan4') ? $kelayakan4 = 1 : $kelayakan4 = 0;
        // $request->has('kelayakan5') ? $kelayakan5 = 1 : $kelayakan5 = 0;

        // $kelayakankedua = $kelayakan1 == 1 && $kelayakan2 == 1 && $kelayakan3 == 1 && $kelayakan4 == 1 && $kelayakan5 == 1;

        // var_dump($kelayakanpertama);
        // var_dump($kelayakankedua);
        // die;

        // if($kelayakanpertama == 1 && $kelayakankedua == 1 ){
        //     $validated['status_kelayakan'] = 1;
        // }else{
        //     $validated['status_kelayakan'] = 0;

        // }


        // dd($validated['status_kelayakan']);

        Pendonor::create($validated);
        Pengguna::create($validated);
        return redirect()->route('pendonor.dashboard')->with(['success' => 'Regist Berhasil']);
    }

    // TODO: show edit form
    public function edit(pendonor $pendonor)
    {
        return view('pendonor.edit', ['pendonor' => $pendonor]);
    }
    // TODO: update pendonor data with specified id
    public function update(Request $request, pendonor $pendonor)
    {
        $validated = [
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'jenis_kelamin' => 'required|max:1',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|min:5',
            'status_kelayakan' => 'required|max:1'
        ];
        $validated = $request->validate($validated);

        $request->has('kelayakan1') ? $kelayakan1 = 1 : $kelayakan1 = 0;
        $request->has('kelayakan2') ? $kelayakan2 = 1 : $kelayakan2 = 0;
        $request->has('kelayakan3') ? $kelayakan3 = 1 : $kelayakan3 = 0;
        $request->has('kelayakan4') ? $kelayakan4 = 1 : $kelayakan4 = 0;
        $request->has('kelayakan5') ? $kelayakan5 = 1 : $kelayakan5 = 0;

        $kelayakankedua = $kelayakan1 == 1 && $kelayakan2 == 1 && $kelayakan3 == 1 && $kelayakan4 == 1 && $kelayakan5 == 1;

        if ($kelayakankedua == $validated['status_kelayakan']){
            $validated['status_kelayakan'] = 1;
        } else {
            $validated['status_kelayakan']=0;
        }

        $pendonor->update($validated);
        return redirect()->route('pendonor.list');
    }
    // TODO: delete data with specified id
    public function destroy(pendonor $pendonor)
    {
        $pendonor->delete();
        return  redirect()->route('pendonor.list');
    }

    public function checkform(Request $request, pendonor $pendonor){

        $payload = [
            "status_kelayakan" => $request->input("status_kelayakan")
        ];
        if($request->has('fruits')){
            //Checkbox checked //tidak layak
            return redirect()->route('pendonor.list');
        }else{
            //Checkbox not checked //layak
            $payload = [
                "status_kelayakan" => $request->input("status_kelayakan")
            ];
            $pendonor->update($payload);
            return redirect()->route('pendonor.list');
        }
    }

    public function check(Request $request){

        if($request->has('fruits')){
            //Checkbox checked //tidak layak
            echo "tidak layak";

        }else{
            //Checkbox not checked //layak
            echo "layak";
        }
    }
 }

