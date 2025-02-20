@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto p-4">
<h1 class="text-2xl font-bold mb-4">Create New Task</h1>
<form action="" method="POST">
@csrf
{{-- Task Name --}}
<div class="mb-4">
    <label for="task_name" class="block mb-1">Task Name</label>
<input type="text" name="task_name" id="task_name" required
class="w-full border rounded px-3 py-2">
<!-- GUIDANCE
- Add a label for Task Name (e.g., <label for="task_name">Task Name</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> with name="task_name" and id="task_name".
- Consider making it required.
- Add a placeholder like "e.g., Take out trash".
-->
</div>
{{-- Task Location --}}
<div class="mb-4">

    <label for="task_location" class="block mb-1">Location (Optional)</label>
<input type="text" name="task_location" id="task_location"
class="w-full border rounded px-3 py-2">
<!-- GUIDANCE:
- Add a label for "Location" (e.g., <label for="task_location">Location</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> with name="task_location" and id="task_location".
- Indicate optional or required status.
- Add a placeholder like "Kitchen, Garage," etc.
-->
</div>

<label for="time_complexity" class="block mb-1">Time Estimate</label>
<select name="time_complexity" id="time_complexity" required
class="w-full border rounded px-3 py-2">
<option value="1">~10 minutes</option>
<option value="2">~30 minutes</option>
<option value="3">~1 hour</option>
<option value="4">~4 hours</option>
<option value="5">~1 day</option>
</select>
{{-- Time Estimate (or Time Complexity) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Time Estimate" (e.g., <label for="time_complexity">Time Estimate</label>)
- The label's 'for' should match the select's 'id'.
- Create a <select> element with name="time_complexity" and id="time_complexity".
- Add <option> items for 1-5, labeled as "10 min", "30 min", "1 hour", etc.
-->
</div>
{{-- Materials Required (Optional) --}}
<div class="mb-4">
    <label for="materials_required" class="block mb-1">Materials Required (Optional)</label>
<input type="text" name="materials_required" id="materials_required"
class="w-full border rounded px-3 py-2"
placeholder="e.g., Trash Bags, Broom">
<!-- GUIDANCE:
- Add a label for "Materials Required" (e.g., <label for="materials_required">Materials Requ
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> for name="materials_required".
- Add a placeholder like "e.g., Trash Bags, Broom".
-->
</div>
{{-- Deadline (Optional) --}}
<div class="mb-4">

    <label for="deadline" class="block mb-1">Deadline (Optional)</label>
<input type="datetime-local" name="deadline" id="deadline"
class="w-full border rounded px-3 py-2">
<!-- GUIDANCE:
- Add a label for "Deadline" (<label for="deadline">Deadline</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="datetime-local"> for name="deadline".
-->
</div>
{{-- Priority (Optional) --}}
<div class="mb-4">

    <label for="priority" class="block mb-1">Priority (Optional)</label>
    <select name="priority" id="priority" class="w-full border rounded px-3 py-2">
        <option value="">Select Priority</option>
        <option value="1">Low</option>
        <option value="2">Medium</option>
        <option value="3">High</option>
    </select>
<!-- GUIDANCE:
- Add a label for "Priority" (<label for="priority">Priority</label>)
- The label's 'for' should match the select's 'id'.
- Create a <select> for name="priority".
- Provide <option> items like "Low (1)", "Medium (2)", "High (3)".
-->
</div>
{{-- Category (Optional) --}}
<div class="mb-4">

    <label for="category" class="block mb-1">Category (Optional)</label>
<input type="text" name="category" id="category"
class="w-full border rounded px-3 py-2"
placeholder="e.g., chores, work, health">
<!-- GUIDANCE:
- Add a label for "Category" (e.g., <label for="category">Category</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> for name="category".
- Add a placeholder like "e.g., chores, work, health".
-->
</div>
{{-- Submit and Cancel Buttons --}}
<div class="flex gap-4">

    <button type="submit"
class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
Create Task
</button>
<a href="{{ url('/') }}"
class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
Cancel
</a>
<!-- GUIDANCE:
- Add a button for "Submit" or "Create Task" (type="submit").
- Add a link or button for "Cancel" that routes back to the homepage or tasks list.
-->
</div>
</form>
</div>
@endsection