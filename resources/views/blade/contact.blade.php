<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
             <a href="{{'/'}}">Home</a> |
            <a href="{{'/about'}}">About</a> |
            <a href="{{'/contact'}}">Contact</a>
        </nav>
    </header>
    <main>
        <h2>Contact Form</h2>
        <form action="#" method="post">
            <label>Name:</label><br>
            <input type="text" name="name" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Message:</label><br>
            <textarea name="message" rows="5" required></textarea><br><br>

            <button type="submit">Send</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>
