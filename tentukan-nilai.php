<?php
function tentukan_nilai($number)
{
    if($number <= 100 && $number >= 85){
        return "Sangat Baik<br>" ;
    }
    else if($number < 85 && $number >= 70 ){
        return "Baik<br>";
    }
    else if($number < 70 && $number >= 60){
        return "Cukup<br>";
    }
    else{
        return "Kurang<br>";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>