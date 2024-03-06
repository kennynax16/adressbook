<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <form action="{{route('search')}}" class="d-flex" role="search">
                <input class="form-control me-2" id="s" value="{{old('s')}}" name="s" type="search" placeholder="Поиск"
                       aria-label="Поиск">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>

        </h2>
        <h1><a href="{{route('dashboard')}}">Сбросить фильтры</a></h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            @can('view',auth()->user())
                            <th scope="col">role</th>
                            @endcan
                            <th scope="col">сity</th>
                            <th scope="col">Adress</th>
                            <th scope="col">email</th>
                            <th scope="col">PersonalNumber</th>
                            <th scope="col">WorkNumber</th>
                            @can('view',auth()->user())
                                <th scope="col" colspan="2">Action</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user )
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                @can('view',auth()->user())
                                <td>{{$user->role}}</td>
                                @endcan
                                <td>{{$user->city}}</td>
                                <td>{{$user->adress}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->PersonalNumber}}</td>
                                <td>{{$user->WorkNumber}}</td>
                                @can('view',auth()->user())
                                    <td>
                                        <form action="{{route('delete',$user->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-link" type="submit">Delete</button>
                                            </div>
                                    </td>
                                    <td>
                                        <form>
                                            <button class="btn btn-link" type="submit"><a
                                                    href="{{route('edit',$user->id)}}">Update</a>
                                            </button>
                                        </form>

                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{ $users->appends(['s'=>request()->s])->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
