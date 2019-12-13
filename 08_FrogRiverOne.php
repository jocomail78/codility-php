// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($X, $A) {
    // write your code in PHP7.0
    $c = count($A);
    $min = $c;
    $a = array_reverse($A);
    $a = array_flip($a);
    for($i=1;$i<=$X;$i++){
        if(!isset($a[$i])){
            return -1;
        }else{
            if($min>$a[$i]){
                $min = $a[$i];
            }
        }
    }
    return $c-$min-1;
}
