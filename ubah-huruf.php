<?php
function ubah_huruf($string){
    $hasil = "";
    for($i=0;$i<strlen($string);$i++){
        $hasil = $hasil . chr(ord($string[$i])+1) ;
    }
    return $hasil."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>