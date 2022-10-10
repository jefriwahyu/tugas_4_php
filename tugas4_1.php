<?php

    // Yang diketahui
    $hb = 8000;
    $hj = 7500;
    $keuntungan = 300;

    // Operasi matematika
    $jk = $hb - $hj;
    $jk1 = $jk / $keuntungan;

    // Menampilkan output ke dalam browser
    echo "Harga Beli = Rp $hb <br>";
    echo "Harga Jual = Rp $hj <br>";
    echo "Keuntungan = Rp $keuntungan <br>";
    echo "Berapa Jumlah kambing yang dibeli? <br>";
    echo "Jawaban : jk = $hb - $hj <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp; = $jk <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp; = $jk : $keuntungan <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp; = $jk1 <br><br>";

    // Hasil di bulatkan dari 1.666 dibulatkan menjadi 2
    echo "Jadi jumlah kambing yang dibeli adalah 2 ekor kambing";

?>