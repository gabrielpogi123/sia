<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>https</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="flex h-screen bg-gray-100">

    <div class="flex w-full">

        <nav id="main-nav" class="bg-gray-800 text-white w-64 min-h-screen p-5 flex flex-col">
            <div id="brand" class="text-2xl mb-5">
                John Gabriel Anga
            </div>
            <a href="/" class="p-3 hover:bg-gray-700">Home</a>
            <a href="/about" class="p-3 hover:bg-gray-700">About</a>
            <a href="/products" class="p-3 hover:bg-gray-700">Products</a>
            <a href="/contact" class="p-3 hover:bg-gray-700">Contact</a>
        </nav>

        <div class="flex-1 flex flex-col">
            <div class="w-full mx-auto bg-white shadow-lg">
                <article id="content" class="min-h-[41rem] p-5">
                    @yield('content')
                </article>

                <footer class="text-center text-gray-600 py-3">
                    Copyright &copy; 2024. All rights reserved.
                </footer>
            </div>
        </div>
    </div>

</body>
</html>
