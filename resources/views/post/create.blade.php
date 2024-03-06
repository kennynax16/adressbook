@extends('app')
@section('content')
    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="text" class="form-label">name</label>
            <input type="text"  name="name" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Adress</label>
            <input type="text" name="adress" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">PersonalNumber</label>
            <input type="text" name="PersonalNumber" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">WorkNumber</label>
            <input type="text" name="WorkNumber" class="form-control" id="text">
        </div>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
