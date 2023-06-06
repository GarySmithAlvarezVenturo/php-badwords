<!DOCTYPE html>
<html>
<head>
    <title>Form PHP - Badwords</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="4" cols="50"></textarea><br><br>

        <label for="word">Parola da censurare:</label><br>
        <input type="text" name="word" id="word"><br><br>

        <input type="submit" value="Invia">
    </form>
</body>
</html>
