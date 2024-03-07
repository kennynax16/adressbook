<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\AdressBook;
use App\Models\User;
use Illuminate\Http\Request;

class AdressbookController extends Controller
{
    public function dashboard(User $user)
    {
        $users = User::paginate(10);
        return view('dashboard', compact('users', 'user'));
    }


    public function edit(User $user)
    {
        return view('post.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('dashboard');
    }

    public function delete(User $user, Request $request)
    {
        $user->delete();
        return redirect()->back()->with('success');
    }

    public function search(Request $request, User $user)
    {
        $s = $request->s;
        $users = User::where('name', 'LIKE', "{$s}%")->orWhere('PersonalNumber', 'LIKE', "{$s}%")->orWhere('WorkNumber', 'LIKE', "{$s}%")->paginate(10);
        return view('dashboard', compact('users', 'user'));

    }

}
