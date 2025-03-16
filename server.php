<?php 
if(isset($_POST['titolo'], $_POST['artista'], $_POST['anno_pubblicazione'], $_POST['url_cover'],$_POST['genere'] )  ) { // Controlla se 'titolo' è stato inviato
    $titolo = $_POST['titolo'];
    $artista = $_POST['artista'];
    $anno_pubblicazione = $_POST['anno_pubblicazione'];
    $url_cover = $_POST['url_cover'];
    $genere = $_POST['genere'];


    $dischi_json = file_get_contents('./albums.json');
    $dischi = json_decode($dischi_json, true);
    $dischi[] = [
        'titolo' => $titolo,
        'artista' => $artista,
        'anno_pubblicazione' => $anno_pubblicazione,
        'url_cover' => $url_cover,
        'genere' => $genere
    ];

    $dischi_jason = json_encode($dischi);

    file_put_contents('./albums.json', $dischi_jason);

    header('Location: ./index.php');




} else {

header('Location: ./index.php');
}
?>
