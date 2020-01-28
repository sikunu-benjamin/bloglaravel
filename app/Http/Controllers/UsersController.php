<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateProfileRequest;

class UsersController extends Controller
{
    /**
     * take all users for us
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    public function edit()
    {

        /*->with('user', auth()->user())*/
        return view('users.edit')
            ->with('users', User::all())
            ->with('posts', Post::all())
            ->with('user', auth()->user());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'about' => $request->about
        ]);

        session()->flash('success', 'User updated successfully.');
        return redirect()->back();
    }

    public function makeAdmin(User $user)
    {
        $user->role = 'admin';

        $user->save();
        session()->flash('success', 'User made admin successfully.');
        return redirect(route('users.index'));
    }
}
