//Task Score -> 100%
//Correctness -> 100%

function solution($A, $K) {
    
    if(count($A)<2){
        return $A;
    }
    
    if($K > count($A)){
        $shiftNr = $K%count($A);
    }else{
        $shiftNr = $K;
    }
    
    for($i=0;$i<$shiftNr;$i++){
        array_unshift($A,array_pop($A));    
    }
    return $A;
}
