// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($A) {
    $cc = count($A);
    $a = array_flip($A);
    $c = count($a);
    if($c != $cc){
        return 0;
    }
    
    for($i=1;$i<=$c;$i++){
        if(!isset($a[$i])){
            return 0;
        }
    }
    return 1;
}
