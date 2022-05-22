@extends('layouts.main')
@section('content')
    <div class="container bg-info">
        <h1 class="text-white text-center">Simple Todo List</h1>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('todo.store') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="title" class="form-control" placeholder="Input Todo List" required>
                            <div class="input-group-append">
                                <input type="date" name="date" required />
                                <button type="submit" class="btn btn-primary">Add Todo</button>
                            </div>
                        </div>
                    </form>
                    @include('layouts.list')
                </div>
            </div>
        </div>
    </div>
@endsection
