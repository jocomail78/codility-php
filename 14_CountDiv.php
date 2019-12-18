// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($A, $B, $K) {
    if($A == $B){
        if($A%$K == 0){
            return 1;
        }else{
            return 0;
        }
    }
    
    $distance = $B-$A;
    $full_down = intval(floor($distance/$K));
    
    $closest_first = intval(floor($A/$K))*$K;
    
    if($closest_first<$A){
        if($B%$K==0){
            return $full_down+1;
        }else{
            if(($closest_first + (($full_down+1)*$K)) < $B){
                return $full_down+1;
            }
            return $full_down;
        }
    }else if($closest_first == $A){
        return $full_down+1;
    }

}
