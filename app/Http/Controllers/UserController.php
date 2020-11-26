<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $address = User::find(1)->address;
        // $users = User::has('posts', '>=', 3)->with('posts', 'address')->get();
        // $users = User::has('addresses')->with('addresses')->get();
        // $users = User::has('addresses')->with('addresses')->get();
        
        //add this line :'use Illuminate\Database\Eloquent\Builder;' to execute 'whereHas' query
        // $users = User::with('posts','addresses')->whereHas('addresses', function(Builder $query) {
        //     $query->where('country','like','%a%');
        // })->get();
        
        // $users = User::with('posts','addresses')->whereHas('posts', function(Builder $query) {
        //     $query->where('title', 'like', '%e%');
        // });
        // $users = User::with('posts', 'addresses')->doesntHave('addresses')->get();
        
        // $users = User::with('posts', 'addresses')->has('addresses')->get();
        $users = User::with('posts', 'addresses')->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required||stringemail|unique:users,email',
            'password' => 'required|min:6|string'
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/users')->with('success', 'User has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('posts', 'addresses')->findOrFail($id);
        return view('users.showuser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('posts', 'addresses')->findOrFail($id);
        return view('users.editUser', compact('user'));        
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
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required|string',
            'email' => ['required','email','string', Rule::unique('users')->ignore($user->the_id, 'the_id')],
            // 'email' => 'required|email|unique:users,email,'.$user->the_id.',the_id',
            'password' => 'sometimes|nullable|string|min:6',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect('/users')->with('success', 'User informations has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'User has been successfully deleted!');
    }
}
