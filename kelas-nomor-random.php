<?php
function GenerasiRandom() {
    $nilais = [];


    for ($i = 0; $i < 50; $i++) {
        $nilai = mt_rand(0, 100);
        $nilais[] = $nilai;
        echo "nilai " . ($i + 1) . ": " . $nilai  ;
        echo "<br>";
    }


    $total = hitungtotal($nilais);


    $rata = hitungrata($nilais);


    $tertinggi = nilaiTertinggi($nilais);


    $terendah = nilaiTerendah($nilais);

    echo "<br>";
    echo "<br>";
    echo "Total: " . $total  ;
    echo "<br>";
    echo "rata: " . $rata  ;
    echo "<br>";
    echo "tertinggi: " . $tertinggi ;
    echo "<br>";
    echo "terendah: " . $terendah ;
}

function hitungtotal($nilais) {
    $total = 0;
    foreach ($nilais as $nilai) {
        $total += $nilai;
    }
    return $total;
}


function hitungrata($nilais) {
    $total = hitungtotal($nilais);
    $rata = $total / count($nilais);
    return $rata;
}


function nilaiTertinggi($nilais) {
    $tertinggi = $nilais[0];
    foreach ($nilais as $nilai) {
        if ($nilai > $tertinggi) {
            $tertinggi = $nilai;
        }
    }
    return $tertinggi;
}

function nilaiTerendah($nilais) {
    $terendah = $nilais[0];
    foreach ($nilais as $nilai) {
        if ($nilai < $terendah) {
            $terendah = $nilai;
        }
    }
    return $terendah;
}


GenerasiRandom();
?>