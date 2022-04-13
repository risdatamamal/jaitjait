<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class DashboardUserController extends Controller
{
    public function index() 
    {
        $data = [
            'users' => User::all()
        ];

        return view('pages.admin.user.index', $data);
    }

    public function create()
    {
        return view('pages.admin.user.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($request->password);
        
        $item = User::where("email", $request->email)->first();

        if ($item != null) 
        {
            $item = $item->email;
        } 
            else 
        {
            $item = '';
        }

        if($request->email == $item)
        {
            $request->session()->flash('failed', 'Data gagal dibuat karena ' . 'Email ' . $request->email . ' sudah digunakan!' );

            return back()->withInput();
        }

        User::create($data);

        return redirect()->route('users.index')->with('success', 'Data berhasil dibuat');
    }

    public function edit(User $user)
    {
        return view('pages.admin.user.edit',[
            'item' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->all();

        if($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }
            else
        {
            unset($data['password']);
        }

        $item = User::where("email", $request->email)->first();

        if ($item != null) 
        {
            $item = $item->email;
        } 
            else 
        {
            $item = '';
        }

        if($request->email == $item)
        {
            $request->session()->flash('failed', 'Data berhasil di update kecuali ' . 'Email ' . $request->email . ' sudah digunakan!' );

            unset($data['email']);
        }

        $user->update($data);
        
        return redirect()->route('users.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Data berhasil dihapus');

    }
}
