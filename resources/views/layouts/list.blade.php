<div class="mt-3">
    <ul class="list list-inline">
        @foreach ($todos as $todo)
            <li class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    @if ($todo->is_done)
                        <i class="fa fa-check-circle checkicon"></i>
                    @endif

                    <div class="ml-2">
                        <h6 class="mb-0">{{ $todo->title }}</h6>
                        <div class="d-flex flex-row mt-1 text-black-50 date-time">
                            <div><i class="fa fa-calendar-o"></i><span class="ml-2">{{ $todo->date }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div>
                        @if (!$todo->is_done)
                            <form action="{{ route('todo.done', $todo->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-success" type="submit"
                                    onclick="return confirm('Done ?')">Done</button>
                            </form>
                            <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-primary">Edit</a>
                        @endif
                        <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" class="form-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Delete ?')">Delete
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
