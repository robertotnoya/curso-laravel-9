<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $users = User::where(function ($query) use ($search){
            if($search) {
                $query->where('email', 'LIKE', "%{$search}%");
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        })->get();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if(!$user = User::where('id',$id)->first())
            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        return redirect()->route('users.index');
    }

    public function edit($id){
        if(!$user = User::where('id',$id)->first())
            return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$user = User::where('id',$id)->first())
            return redirect()->route('users.index');

        $data = $request->only('name','email');
        if($request->password != '')
            $data['password'] = bcrypt('$request->password');


        //dd($data);
        $user->update($data);

        return redirect()->route('users.index');
    }
}
