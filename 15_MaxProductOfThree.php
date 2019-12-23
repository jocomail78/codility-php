// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($A) {
    $c = count($A);
    if($c == 3){
        return $A[0]*$A[1]*$A[2];
    }else{
        $max1 = max($A);
        $i = array_search($max1,$A);
        unset($A[$i]);
        
        $max2 = max($A);
        $i = array_search($max2,$A);
        unset($A[$i]);
        
        $min1 = min($A);
        $i = array_search($min1,$A);
        unset($A[$i]);
        
        $min2 = min($A);
        $i = array_search($min2,$A);
        unset($A[$i]);
        
        if($c > 4){
            $max3 = max($A);
            return max($max1*$max2*$max3 ,$min1*$min2*$max1);
        }else{
            return max($max1*$max2*$min1, $max1*$max2*$min2,  $min1*$min2*$max1, $min1*$min2*$max2);
        }
    }
}
