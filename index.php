<?php

require_once('./funzioni.php');

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Spotify</title>
</head>
<body>
    <div class="container">

        <h1>Spotify</h1>
        
        <ul>
        <?php foreach ($dischi as $album) : ?>
            <li>
                <strong><?php echo $album['titolo']; ?></strong> - 
                <?php echo $album['artista']; ?> (<?php echo $album['anno_pubblicazione']; ?>)
                <br>
                <em>Genere: <?php echo $album['genere']; ?></em>
                <br>
                <img src="<?php echo $album['url_cover']; ?>" alt="Cover di <?php echo $album['titolo']; ?>" width="100">
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
