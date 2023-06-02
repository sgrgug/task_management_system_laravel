<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-stone-300 py-10"> 
        <div class="max-w-screen-sm m-auto">
            <div class="bg-black text-white text-bold p-2">Create New Task Here</div>
            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                <label for="title">Title</label>
                <input class="w-full p-2" type="text" name="title" id="title" placeholder="Title">
                <label for="title">Description</label>
                <input class="w-full p-2" type="text" name="description" id="description" placeholder="Description">
                <input class="w-full p-2 bg-green-700 text-bold text-white uppercase" type="submit">
            </form>
        </div>
    </div>

</body>
</html>