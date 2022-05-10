
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>

<body class="h-screen flex flex-col">
    <header>
        @include('layouts.header')
    </header>

    <main class="py-10">
        <section class="container mx-auto">
            @yield('content')
        </section>
    </main>

    <footer class="mt-auto">
        @include('layouts.footer')
    </footer>
</body>

</html>