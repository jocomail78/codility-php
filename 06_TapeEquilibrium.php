// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($A) {
    
    $firstPartSum = 0;
    $secondPartSum = array_sum($A);
    $min = PHP_INT_MAX;
    
    for($i=0;$i<count($A)-1;$i++){
        $firstPartSum += $A[$i];
        $secondPartSum -= $A[$i];
        $diff = abs($firstPartSum - $secondPartSum);
        if($diff<$min){
            $min = $diff;
        }
    }
    return $min;
}
