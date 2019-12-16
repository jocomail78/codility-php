// Task Score -> 50%
// Correctness -> 40%
// Performance -> 60%

function solution($A) {
    $minVal = ($A[0]+$A[1])/2;
    $minIndex = 0;
    
    $a[0] = $A[0]/2;
    for($i=1;$i<count($A);$i++){
        $a[$i] = $A[$i]/2;
        $try = $a[$i]+$a[$i-1];
        if($try<$minVal){
            $minVal = $try;
            $minIndex = $i-1;
        }
    }
    return $minIndex;
}

// Task Score -> 60%
// Correctness -> 100%
// Performance -> 20%
//Detected time complexity: O(N ** 2)

function solution($A) {
    $minVal = floatval(($A[0]+$A[1])/2);
    $minIndex = 0;
    $count = count($A);
    $sum = array();
    
    for($i=0;$i<$count-1;$i++){
        $sum[$i][$i] = $A[$i];
        for($j=$i+1;$j<$count;$j++){
            $sum[$i][$j] = $sum[$i][$j-1]+$A[$j];
            $calcMin = $sum[$i][$j]/(($j-$i)+1);
            //print_r("Index ".$i." -> Count".(($j-$i)+1)." = ".$calcMin."\r\n");
            if($calcMin<$minVal){
                $minVal = $calcMin;
                $minIndex = $i;
            }
        }
    }
    //print_r($sum);
    
    return $minIndex;
}
