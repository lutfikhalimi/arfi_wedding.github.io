<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page'] = "Pengguna";
        $data['pengguna'] = User::all()->sortBy('role');
        return view('pengguna',$data);
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
        $validated = $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|unique:users',
                'no_hp' => 'required',
                'password' => 'required',
                'role' => 'required',
            ],
            [
                'nama.required' => 'Nama Wajib Diisi',
                'email.required' => 'E-mail Wajib Diisi',
                'no_hp.required' => 'No HP Wajib Diisi',
                'password.required' => 'Password Wajib Diisi',
                'role.required' => 'Role Wajib Diisi',
            ]
        );

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect('/pengguna')->withSuccess(['Berhasil Menambahkan Data!']);
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
        $data['page'] = "Pengguna";
        
        $data['id'] = $id;
        $data['pengguna'] = User::where('id',$id)->get();
        return view('edit_pengguna',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

       $validated = $request->validate(
                [
                    
                    'nama' => 'required',
                    'tempat_lahir'=>'',
                    'tanggal_lahir'=>'',
                    'no_hp'=>'',
                    'role'=>'',
                    'password'=>'',
                    'foto' => 'mimes:jpg,jpeg,png',
                    'alamat' => 'required',
                ],
                [
                    'nama.required' => 'Nama Wajib Diisi',
                    'alamat.required' => 'Alamat Wajib Diisi',
                ]
        );
        $password = Hash::make($validated['password']);
        $password_lama = request()->input('password_lama');

        $validated['foto'] = $request->file('foto');

        if ($validated['foto']===null) {
            $validated['foto']=$request->input('foto_lama');
        }else{
            $validated['foto'] = $request->file('foto')->store('profil');
        }
        
        if ($password === null) {
            $validated['password'] = $password_lama;
        } else {
            $validated['password'] = Hash::make(request()->input('password'));
        }

        $data = User::find($id);
        $data->update($validated);
        return redirect('/pengguna')->withSuccess(['Berhasil Update Data!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/pengguna')->withSuccess(['Berhasil Update Data!']);
    }
}
