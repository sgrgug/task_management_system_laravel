<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-black text-white text-center text-3xl p-3">
      Show Task
    </div>
    <div class="max-w-screen-xl m-auto p-2">
      <a href="{{ route('home') }}">Home</a> > <a href="{{ route('tasks.index') }}">All Tasks</a> > <a href="#">Show Task</a>
    </div>
    <div class="max-w-screen-lg m-auto bg-stone-200 p-2">
        <div class="bg-white p-2 rounded">
            <img class="w-24 h-24" src="{{ asset('uploads/'.$task->photo) }}" alt="">
            <p class="font-bold p-4">{{ $task->title }}</p>
            <hr>
            <p class="p-4">{{ $task->description }}</p>
        </div>
    </div>
</body>
</html>