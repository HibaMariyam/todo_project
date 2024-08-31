@extends('layouts.app')
@section('content')
<div class="flex flex-col gap-2 items-center">
<h1 class="text-black font-bold text-2xl">Todos List</h1>
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-10 py-1 rounded relative" role="alert">
        <h1 class="font-bold">Success!</h1>
</div>
@endif
<button class="bg-blue-500 hover:bg-blue-700 border text-white font-bold p-2 mb-2 rounded-lg w-[200px]" onClick="window.location.href='{{ route('createTodo') }}'">
Create Todo
</button>
    @foreach ($tods as $tod)
   <x-todos.todo-card :tod="$tod"/>
    @endforeach

</div>
@endsection 