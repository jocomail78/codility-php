// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($N, $A) {
    // write your code in PHP7.0
    $tempMax = 0;
    $max = 0;
    $arrayItemNr = $N+1;
    $r = array_fill(0,$arrayItemNr,0);
    foreach($A as $val){
        if($val>$N){
            $tempMax = $max;
        }else{
            if($tempMax>$r[$val]){
                $r[$val]=$tempMax+1;
            }else{
                $r[$val]+=1;
            }  
            $max = max($max,$r[$val]);
        } 
    }
    if($tempMax>0){
        for($i=0;$i<count($r);$i++){
            $r[$i] = max($r[$i],$tempMax);
        }
    }
    array_shift($r);
    return $r;
}
