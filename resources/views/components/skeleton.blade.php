<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <x-nav-link></x-nav-link>
                <x-nav-link>About</x-nav-link>
                <x-nav-link>Contact</x-nav-link>
                <x-nav-link>Team</x-nav-link>
            </ul>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer></footer>
</body>
</html>