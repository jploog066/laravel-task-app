@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-bold  bg-yellow-600">All Tasks</h1>
{{-- search and sort form --}}
<form action="{{ route('tasks.index') }}" method="GET" class=" flex mx-auto border-6 bg-yellow-500 p-4 border-black-300 rounded max-w-2xl">
<!-- Search Field -->
<input
type="text"
name="search"
value="{{ request('search') }}"
placeholder="Search tasks..."
class="border border-gray-300 px-2 py-1 rounded"
>
<!-- Sort Options -->
<select name="sort" class="border border-black-300 px-2 py-1 rounded">
<option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>
Alphabetical
</option>
<option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>
Deadline
</option>
<option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>
Category
</option>
</select>
<button type="submit" class="bg-green-500 text-white px-4 py-2 ml-2 rounded hover:bg-green-600">
Search & Sort
</button>

<a href="{{ route('tasks.create') }}"
class="bg-green-500 text-white px-4 py-2 ml-2 rounded hover:bg-green-600">
Create a New Task
</a>

</form>
<ul>

@forelse($tasks as $task)
<li class="flex justify-center p-4 bg-red-900 text-yellow-500 ">
{{ $task->task_name }}
<!-- Link to the show page -->
<a href="{{ route('tasks.show', $task->id) }}" class="text-green-500 underline ml-2">
View
</a>
</li>
@empty
<li>No tasks yet.</li>
@endforelse
</ul>

@endsection