@extends('layouts.main')
@section('content')
    <div class="container bg-info">
        <h1 class="text-white text-center">Simple Todo List</h1>

        <div class="container mt-5">
            <div class="row">

                <div class="col-md-12">
                    <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <div class="input-group-append">
                                <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
                            </div>
                            <input type="text" name="title" class="form-control" placeholder="Input Todo List"
                                value="{{ $todo->title }}" required>
                            <div class="input-group-append">
                                <input type="date" name="date" value="{{ $todo->date }}" required />
                                <button type="submit" class="btn btn-primary">Update Todo</button>
                            </div>
                        </div>
                    </form>
                    @include('layouts.list')
                </div>
            </div>
        </div>
    </div>
@endsection
