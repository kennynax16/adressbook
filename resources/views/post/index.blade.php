@extends('app')
@section('content')

    <form action="{{route('create')}}">
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fullname</th>
            <th scope="col">сity</th>
            <th scope="col">Adress</th>
            <th scope="col">email</th>
            <th scope="col">PersonalNumber</th>
            <th scope="col">WorkNumber</th>
            <th scope="col">AdditionalNumber</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->fullname}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->adress}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->PersonalNumber}}</td>
                <td>{{$item->WorkNumber}}</td>
                <td>{{$item->AdditionalNumber}}</td>
                <td>
                    <form action="{{route('delete',$item->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </div>
                </td>
                <td>
                    <form>
                        <button class="btn btn-warning" type="submit"><a href="{{route('edit',$item->id)}}">Update</a>
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>{{ $items->appends(['s'=>request()->s])->links() }}</div>

@endsection
