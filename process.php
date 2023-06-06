<!DOCTYPE html>
<html>
<head>
    <title>Elaborazione Richiesta</title>
</head>
<body>
<?php
if (isset($_POST['paragraph']) && isset($_POST['word'])) {
    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];

    // Stampa il paragrafo e la sua lunghezza
    echo "<h3>Paragrafo:</h3>";
    echo "<p>$paragraph</p>";
    echo "<p>Lunghezza: " . strlen($paragraph) . "</p>";

    // Sostituzione delle occorrenze della parola da censurare con ***
    $censoredParagraph = str_ireplace($word, '***', $paragraph);

    // Stampa di nuovo il paragrafo e la sua lunghezza con la parola censurata
    echo "<h3>Paragrafo censurato:</h3>";
    echo "<p>$censoredParagraph</p>";
    echo "<p>Lunghezza: " . strlen($censoredParagraph) . "</p>";
} else {
    echo "Errore: Dati mancanti.";
}
?>
</body>
</html>
