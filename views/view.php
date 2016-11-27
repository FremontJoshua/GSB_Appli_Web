<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>Contexte SEG</title>
</head>
<body>
    <header>
        <h1>SEG</h1>
    </header>
    <table border="1">
    <?php foreach ($communes as $commune): ?>
        <tr>
            <td><?php echo $commune->getNom() ?></td>
        </tr>
    <?php endforeach ?>
    </table> 
</body>
</html>