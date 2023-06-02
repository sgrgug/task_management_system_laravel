<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-black text-white text-center text-3xl p-3">
        Home
    </div>
    <div class="m-2">
        <div class="bg-green-400 px-10 py-5 w-56 text-center text-2xl text-white m-auto">
            <a class="" href="{{ route('tasks.index') }}">Task</a>
        </div>
    </div>
</body>
</html>