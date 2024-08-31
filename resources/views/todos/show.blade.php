@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10">
    <h1 class="text-black text-2xl font-bold text-center mb-6">Todo Details</h1>
    <div class="bg-white p-6 rounded-md shadow-md">
        <div class="mb-4">
            <h2 class="text-gray-800 text-xl font-semibold mb-2">Title:</h2>
            <p class="text-gray-700 text-base">{{ $todo->title }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-gray-800 text-xl font-semibold mb-2">Description:</h2>
            <p class="text-gray-700 text-base">{{ $todo->description }}</p>
        </div>

    </div>
    <a href="{{route('todoList')}}" class="text-blue-400 underline flex justify-center mt-4">Back to Todo</a>
</div>
@endsection
