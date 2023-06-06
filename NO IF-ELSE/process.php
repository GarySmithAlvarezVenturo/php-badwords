<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords - Risultato</title>
</head>
<body>
    <h1>PHP Badwords - Risultato</h1>
    <?php
    $paragraph = isset($_POST['paragraph']) ? $_POST['paragraph'] : '';
    $word = isset($_POST['word']) ? $_POST['word'] : '';

    echo "<h2>Paragrafo originale:</h2>";
    echo "<p>$paragraph</p>";
    echo "<p>Lunghezza: " . strlen($paragraph) . "</p>";

    $censoredParagraph = str_ireplace($word, '***', $paragraph);

    echo "<h2>Paragrafo censurato:</h2>";
    echo "<p>$censoredParagraph</p>";
    echo "<p>Lunghezza: " . strlen($censoredParagraph) . "</p>";
    ?>
</body>
</html>
