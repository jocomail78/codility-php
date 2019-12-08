//Task Score -> 100%
//Correctness -> 100%

function solution($N) {
    $bin = decbin($N);
    $str = strval($bin);
    $longest = 0;
    $counter = 0;
    for($i=0;$i<strlen($bin);$i++){
        if($str[$i] == '1'){
            if($counter>$longest){
                $longest = $counter;
            }
            $counter = 0;
        }else{
            $counter++;
        }
    }
    return $longest;
}
