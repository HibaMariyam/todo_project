<a href="{{route('showTodo', $tod->id)}}">
<div class="flex justify-between bg-slate-100 p-4 w-full shadow-md rounded-xl">
        <div class="">{{$tod->title}}</div>
        <div class="flex gap-4">
        <a href="{{route('editTodo', $tod->id)}}" class="text-blue-500 underline ">Edit</a>
        <form action="{{route('deleteTodo', $tod->id)}}" method="POST" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 underline">Delete</button>
        </form>
        </div>
     
    </div>
</a>
