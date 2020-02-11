// Task Score -> 87%
// Correctness -> 100%
// Performance -> 75%

function solution($A, $B) {
    //all the fishes in one direction
    $sum = array_sum($B);
    $count = count($B);
    if($sum == 0 || $sum==$count){
        return $count;
    }
    
    $FD = 0;
    $pFD = 0;
    $FU = 0;
    $pFU = 0;
    
    for($i=0;$i<$count;$i++){
        if($B[$i] == 0){
            if($A[$i] > $FU){
                $FU = $A[$i];
                $pFU = $i;
            }
        }else{
            if($A[$i] > $FD){
                $FD = $A[$i];
                $pFD = $i;
            }
        }    
    }
    
    if($pFD > $pFU){
        //everything between the two biggest fish will be eaten
        for($i=$pFD+1;$i<$pFU;$i++){
            unset($A[$i]);
            unset($B[$i]);
        }
    }
    
    
    do{
        $conflictFound = false;
        $A = array_values($A);
        $B = array_values($B);
        
        $count = count($A);
        $sum = array_sum($B);
        
        
        if($count > 1 && $sum!=$count && $sum!=0){
            for($i=0;$i<$count-1;$i++){
                if($B[$i] == 1 && $B[$i+1] == 0){
                    $conflictFound = true;
                    //conflict zone
                    if($A[$i] > $A[$i+1]){
                        unset($A[$i+1]);
                        unset($B[$i+1]);
                    }else{
                        unset($A[$i]);
                        unset($B[$i]);
                    }
                    $i++;
                }
            }
        }
        //print_r($A);
        //print_r($B);
        
    }while($conflictFound);
    
    //print_r($A);
    //print_r($B);
    
    return count($B);
}
