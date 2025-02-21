@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center text-center bg-red-900 border border-black rounded-lg p-4 pb-6 text-white w-1/2">
<h1 class="text-lg font-bold m-4 bg-yellow-600 text-black border border-yellow-600 rounded">Task Details</h1>
<div class="flex flex-col text-left relative left-20">
<div>
<strong>Task Name:</strong> {{ $task->task_name }}
</div>
<div>
<strong>Location:</strong> {{ $task->task_location }}
</div>
<div>
<strong>Time Complexity:</strong> {{ $task->time_complexity }}
</div>
<div>
<strong>Materials Required:</strong> {{ $task->materials_required }}
</div>
<div>
<strong>Deadline:</strong> {{ $task->deadline }}
</div>
<div>
<strong>Priority:</strong> {{ $task->priority }}
</div>
<div>
<strong>Category:</strong> {{ $task->category }}
</div>
<div class="text-black" style="margin-top:20px;">
<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary bg-green-500 p-2 m-1 border border-green-600 rounded">Edit Task</a>
<a href="{{ route('tasks.index') }}" class="btn btn-secondary bg-red-500 p-2 m-1 border border-red-600 rounded">Back to List</a>
</div>
</div>
</div>
@endsection