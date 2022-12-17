<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
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
            'status_kelayakan' => 'required|max:1'
        ];
        $validated = $request->validate($validated);

        pendonor::create($validated);
        return redirect()->route('pendonor.list');
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
        $pendonor->update($validated);
        return redirect()->route('pendonor.list');
    }
    // TODO: delete data with specified id
    public function destroy(pendonor $pendonor)
    {
        $pendonor->delete();
        return  redirect()->route('pendonor.list');
    }
}
