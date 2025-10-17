<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - Home</title>
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <a href="{{'/'}}">Home</a> |
            <a href="{{'/about'}}">About</a> |
            <a href="{{'/contact'}}">Contact</a>
        </nav>
    </header>
    <main>
        <h2>Home Page</h2>
        <p>This is the home page of your awesome website.</p>
    </main>
    <footer>
        <p>&copy; 2025 Franklin Prakash</p>
    </footer>
</body>
</html>
