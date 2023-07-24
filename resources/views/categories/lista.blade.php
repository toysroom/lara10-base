<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    @if (count($categories))
                        <table class="table-auto">
                            <thead class="bg-gray-50">
                                <tr>
                                    <td class="px-6 py-2 text-xs text-gray-500">Nome</td>
                                    <td class="px-6 py-2 text-xs text-gray-500">Descrizione</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table >
                    @endif
</div>
</div>
</div>
</div>
</body>
</html>

