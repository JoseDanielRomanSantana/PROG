<?php
function completarPoema(){
$poemaPar = "poema2.txt";
$poemaImpar = "poema1.txt";
$archivoPoema = fopen("poema.txt","w");
$lineaPoemaPar = file($poemaPar);
$lineaPoemaImpar = file($poemaImpar);
$longuitudPoemaPar = count($lineaPoemaPar);
$longuitudPoemaImpar = count($lineaPoemaImpar);
$numero1 = substr($lineaPoemaImpar[0],0,2);
$numero2 = substr($lineaPoemaPar[0],0,2);

    if ($numero1 < $numero2) {
        if ($longuitudPoemaImpar > $longuitudPoemaPar) {
            for ($i=0; $i < $longuitudPoemaImpar; $i++) { 
                if ($i > $longuitudPoemaPar - 1) {
                    fwrite($archivoPoema,$lineaPoemaImpar[$i]);
                }else{
                    fwrite($archivoPoema,$lineaPoemaImpar[$i]);
                    fwrite($archivoPoema,$lineaPoemaPar[$i]);
                }
            }
        }else {
            for ($i=0; $i < $longuitudPoemaPar; $i++) { 
                if ($i > $longuitudPoemaImpar - 1) {
                    fwrite($archivoPoema,$lineaPoemaPar[$i]);
                }else{
                    fwrite($archivoPoema,$lineaPoemaImpar[$i]);
                    fwrite($archivoPoema,$lineaPoemaPar[$i]);
                }
            }
        }
    }else{
        if ($longuitudPoemaImpar > $longuitudPoemaPar) {
            for ($i=0; $i < $longuitudPoemaImpar; $i++) { 
                if ($i > $longuitudPoemaPar - 1) {
                    fwrite($archivoPoema,$lineaPoemaImpar[$i]);
                }else{
                    fwrite($archivoPoema,$lineaPoemaImpar[$i]);
                    fwrite($archivoPoema,$lineaPoemaPar[$i]);
                }
            }
        }else {
            for ($i=0; $i < $longuitudPoemaPar; $i++) { 
                if ($i > $longuitudPoemaImpar - 1) {
                    fwrite($archivoPoema,$lineaPoemaPar[$i]);
                }else{
                    fwrite($archivoPoema,$lineaPoemaImpar[$i]);
                    fwrite($archivoPoema,$lineaPoemaPar[$i]);
                }
            }
        }
    }
    fclose($archivoPoema);
}

function contarPalabra(){
    $poemaCompleto = file_get_contents("poema.txt");
    $numeroPalabras = str_word_count($poemaCompleto);

    echo "El poema tiene $numeroPalabras palabras <br>";
}

function contarPalabrasLineas(){
    $poema = "poema.txt";
    $lineaPoema = file($poema);
    $longuitudPoema = count($lineaPoema);
    for ($i=0; $i < $longuitudPoema; $i++) { 
        $numeroPalabrasLinea = str_word_count($lineaPoema[$i]);
        echo $lineaPoema[$i]. "<br>";
        echo "El numero de palabras es $numeroPalabrasLinea <br>";
    }
}

function contarVocalesLinea(){
    $poema = "poema.txt";
    $lineaPoema = file($poema);
    $longuitudPoema = count($lineaPoema);
    $vocal = 0;
    for ($i=0; $i < $longuitudPoema; $i++) { 
        if (fgetc($lineaPoema[$i]) == "a" AND fgetc($lineaPoema[$i]) == "A" AND fgetc($lineaPoema[$i]) == "Á" AND fgetc($lineaPoema[$i]) == "á") {
            $vocal ++;
        }
        echo "El numero de A es $vocal <br>";
        $vocal = 0;
    }
}

completarPoema();
contarPalabra();
contarPalabrasLineas();


    
?>