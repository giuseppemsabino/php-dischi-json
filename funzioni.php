<?php

$dischi = file_get_contents('./albums.json');

$dischi = json_decode($dischi, true);


?>