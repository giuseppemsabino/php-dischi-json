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
        <div class="row row-cols-3">

            <?php foreach ($dischi as $album) : ?>
            <div class="col">
                
                <div class="card m-2" style="width: 18rem;">
                    <img src="<?php echo $album['url_cover']; ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $album['titolo']; ?></h5>
                    <h6><?php echo $album['artista']; ?> (<?php echo $album['anno_pubblicazione']; ?>)</h6>
                    <strong><?php echo $album['anno_pubblicazione']; ?></strong>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            
        </div>
        <form action="./server.php" method="post">
            <input class="form-control m-1" type="text" value="test" id="titolo" name="titolo" placeholder="Inserisci il titolo">
            <input class="form-control m-1" type="text" value="test" id="artista" name="artista" placeholder="Inserisci l'artista">   
            <input class="form-control m-1" type="text" value="test" id="anno_pubblicazione" name="anno_pubblicazione" placeholder="Inserisci l'anno di pubblicazione">
            <input class="form-control m-1" type="text" value="test" id="url_cover" name="url_cover" placeholder="Inserisci l'url della cover">
            <input class="form-control m-1" type="text" value="test" id="genere" name="genere" placeholder="Inserisci il genere">
            <button class="btn btn-primary m-1" type="submit" >Aggiungi</button>
        </form>
    </div>

</body>
</html>
