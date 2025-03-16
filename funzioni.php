<?php

$dischi_json = file_get_contents('./albums.json');

$dischi = json_decode($dischi_json, true);


?>