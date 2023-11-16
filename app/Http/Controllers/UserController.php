<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::query()->paginate(10, ['id', 'name', 'email'], 'page');
        if ($users->lastPage() < $request->get('page', 1)) {
            return \redirect($users->url($users->lastPage()));
        }

        return view('user_list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => bcrypt($request->get('password'))
        ]);

        return redirect('users');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::query()->findOrFail($id);

        return view('user_show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::query()->findOrFail($id);

        return view('user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::query()->findOrFail($id);
        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = User::query()->findOrFail($id);
        $record->delete();

        return back();
    }
}
