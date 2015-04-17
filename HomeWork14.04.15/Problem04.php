<form>
    <input name="num">
    <input name="button" type="submit" value="Submit">
</form>
<?php
if(isset($_GET["button"])){
    $number = intval($_GET["num"]);
    $boolTrue = true;
    $count=(integer)100;

    if ($number < 102) {
        echo "no";
    } else {
        for($i = 1; $i <= 9;$i++){
            for($j = 0;$j <= 9;$j++){
                for($k = 0;$k <= 9;$k++){
                    if($i==$j||$i==$k||$j==$k){

                    }else {
                        echo $i . $j . $k . ", ";

                    }
                    if($count == $number){
                        $boolTrue = false;
                        break;
                    }
                    $count++;
                }
                if($boolTrue==false){
                    break;
                }
            }
            if($boolTrue==false){
                break;
            }
        }
    }
}
