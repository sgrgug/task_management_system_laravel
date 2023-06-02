<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-black text-white text-center text-3xl p-3">
      All Tasks
    </div>
    <div class="max-w-screen-xl m-auto p-2">
      <a href="{{ route('home') }}">Home</a> > <a href="{{ route('tasks.index') }}">All Tasks</a>
    </div>
    <div class="text-center my-5">
      <div class="max-w-screen-lg m-auto bg-green-500 text-white font-bold p-2 text-2xl">
        <a href="{{ route('tasks.create') }}">Create Tasks</a>
      </div>
    </div>

    @if (session()->has('status'))
        <div class="bg-green-600 text-center text-white">{{ session('status') }}</div>
    @endif

    <div class="max-w-screen-lg m-auto bg-stone-200 p-2">
      @foreach ($tasks as $task)
        <div class="bg-white m-2 p-4">
          {{ $loop->iteration }}. <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
        </div>
      @endforeach
    </div>
</body>
</html>