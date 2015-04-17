<?php
$dayToday = date('l');
$monthToday = date('F');
$dateToSubtract = intval(date('j'));
for($i=0;$i<100;$i++){//Tuka go pravq do 100 shoto da e nad 31 mesec nad 31 dni nqma i go break s edna proverka na mesec
    $dayToPrint  = date('l',mktime(0, 0, 0, date("m"),   date("d")-($dateToSubtract-1)+$i,   date("Y")));
    $monthToPrint = date('F',mktime(0,0,0,date("m"),date("d")-($dateToSubtract-1)+$i,date("Y")));
    $dateFormat = date('jS F ,Y',mktime(0,0,0,date("m"),date("d")-($dateToSubtract-1)+$i,date("Y")));
    if($dayToPrint =="Sunday"){
        if($monthToPrint!=date('F')){
            break;
        }
        echo $dateFormat."</br>";
    }
}