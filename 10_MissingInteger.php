// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function positive($p) {
    return $p>0;
}

function solution($A) {
    $p = array_filter($A,"positive");
    $a = array_flip($p);
    $c = count($a);
    for($i=1;$i<=$c;$i++){
        if(!isset($a[$i])){
            return $i;
        }
    }
    return $c+1;
}
