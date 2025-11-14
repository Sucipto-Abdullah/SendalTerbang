<?php

use App\Http\Controllers\kelompokController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\proyekController;
use App\Models\proyek;

$array = kelompokController::getKelompokFromProyek(1);

// foreach($array as $grup){
//     echo $grup. "<br>";
// }

$mahasiswa = proyekController::getProyekByKeyWord("mata kuliah");

// proyekController::getImageProyekById(1);
// proyekController::getProyekById(1);

$cipto = mahasiswaController::getMahasiswaFromKeyword("24");

foreach($cipto as $c){
    echo $c.", ";
}

// echo $mahasiswa;