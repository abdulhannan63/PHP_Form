<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input form</title>
</head>
<body style="text-align: center;">
    <form action="connect.php" method="POST">

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br>

        <input type="submit" name='submit' id="submit">
    </form>
</body>
</html>