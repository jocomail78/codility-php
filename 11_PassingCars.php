// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($A) {
    $sum = array_sum($A);
    $count = count($A);
    $passingBy = 0;
    
    if($sum==$count){
        return 0;
    }
    if(!$sum){
        return 0;
    }
    
    for($i=0;$i<count($A);$i++){
        if($A[$i]){
            $sum--;
        }else{
            $passingBy+=$sum;
        }
        if($passingBy>1000000000){
            return -1;
        }
    }
    return $passingBy;
    
}
