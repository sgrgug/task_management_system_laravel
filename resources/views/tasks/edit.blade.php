<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-black text-white text-center text-3xl p-3">
      Create Task
    </div>
    <div class="max-w-screen-xl m-auto p-2">
      <a href="{{ route('home') }}">Home</a> > <a href="{{ route('tasks.index') }}">All Tasks</a> > <a href="">Edit Task</a>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $message)
            <div class="bg-red-400 text-center text-white">{{ $message }}</div>
        @endforeach
    @endif
    <div class="max-w-screen-lg m-auto bg-stone-200 p-2">
        <form class="p-4" action="{{ route('tasks.update', $task) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title">Title</label>
            <input class="w-full p-2" type="text" name="title" value="{{ $task->title }}">

            <label for="description">Description</label>
            <textarea class="w-full p-2" type="text" name="description" placeholder="sd"></textarea>

            <label for="time">Time</label>
            <input class="w-full p-2" type="text" name="time" value="{{ $task->time }}">

            <label for="priority">Priority</label>
            <select class="m-1 w-full" name="priority">
                <option value="1">More Priority</option>
                <option value="0">Less Priority</option>
            </select>
            <input type="file" name="photo" accept="image/*">
            <input class="w-full bg-green-400 p-3 font-center text-white text-2xl cursor-pointer" type="submit" value="Create Task">
        </form>
    </div>
</body>
</html>