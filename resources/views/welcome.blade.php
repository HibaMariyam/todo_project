@extends('layouts.app')
@section('content')
<div class="flex flex-col gap-2">
<button class="bg-slate-400 border text-blackp-4 ">
Todos List
</button>
    @foreach ($tods as $tod)
    <div class="flex justify-between bg-slate-400 p-4">
        <div class="">{{$tod->title}}</div>
        <a href="" class="text-red-500 underline">Edit</a>
    </div>
    @endforeach

</div>
@endsection