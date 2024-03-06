<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\AdressBook;
use Illuminate\Http\Request;

class AdressbookController extends Controller
{
    public function index(AdressBook $item)
    {
        $items = AdressBook::paginate(10);
        return view('post.index', compact('items', 'item'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        AdressBook::create($data);
        return redirect()->route('index');
    }


    public function edit(AdressBook $item)
    {
        return view('post.edit', compact('item'));
    }

    public function update(UpdateRequest $request, AdressBook $item)
    {
        $data = $request->validated();
        $item->update($data);
        return redirect()->route('index', compact('item'));
    }

    public function delete(AdressBook $item, Request $request)
    {
        $item->delete();
        return redirect()->route('index', ['page' => $request->page]);
    }

    public function search(Request $request, AdressBook $item)
    {
        $s = $request->s;
        $items = AdressBook::where('fullname', 'LIKE', "{$s}%")->orWhere('PersonalNumber', 'LIKE', "{$s}%")->orWhere('WorkNumber', 'LIKE', "{$s}%")->orWhere('AdditionalNumber', 'LIKE', "{$s}%")->paginate(10);
        return view('post.index', compact('items', 'item'));

    }
}
