// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($A) {
    $count = count($A);
    
    if(!$count){
        return 1;
    }
    
    $a = array_flip($A);
    
    for($i=1;$i<=$count;$i++){
        if(!isset($a[$i])){
            return $i;
        }
    }
    return $i;
}
