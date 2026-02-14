<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get">
        <input type="number" name="radky" placeholder="Zadejte počet řádků">
        <input type="number" name="sloupce" placeholder="Zadejte počet sloupců">
        <input type="submit" value="Vytvořit tabulku">

    </form>
    <?php
    $radky = $_GET["radky"];
    $sloupce = $_GET["sloupce"];
    for (i=0;i<=$radky;i++){
        for (j=0;j<=$sloupce;j++){
            document.write("*");
        }
        document.write("<br>");
    }
    ?>
</body>
</html>