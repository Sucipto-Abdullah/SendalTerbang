<?php

use App\Http\Controllers\kelompokController;
use App\Http\Controllers\proyekController;

$array = kelompokController::getKelompokFromProyek(1);

// foreach($array as $grup){
//     echo $grup. "<br>";
// }

$mahasiswa = proyekController::getProyekByKeyWord("mata kuliah");

echo $mahasiswa;