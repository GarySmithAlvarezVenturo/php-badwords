<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <form action="process.php" method="post">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="5" cols="40"></textarea><br><br>
        <label for="word">Parola da censurare:</label>
        <input type="text" name="word" id="word"><br><br>
        <input type="submit" value="Censura">
    </form>
</body>
</html>