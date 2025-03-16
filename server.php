<?php 
echo 'ciao';
if(isset($_POST['titolo'])) { // Controlla se 'titolo' è stato inviato
    $titolo = $_POST['titolo'];
    var_dump($_POST);
    echo 'Titolo inserito: ' . $titolo;
} else {
    echo 'Nessun titolo inviato!';
}
?>
