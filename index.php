<!DOCTYPE html>
<html>
<head>
    <title>guestbook</title>
</head>
<body>
    <h1>guestbook</h1>
    <form method="post" action="process.php">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Message: <br>
        <textarea name="message"></textarea><br>
        <input type="submit" value="submit">
    </form>
    <br>
    <br>
    <a href="viewguestbook.php">view guestbook</a>
</body>
</html>
