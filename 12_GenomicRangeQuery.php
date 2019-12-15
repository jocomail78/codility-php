// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($S, $P, $Q) {
    $ret = array();
    $decode['A'] = 1;
    $decode['C'] = 2;
    $decode['G'] = 3;
    $decode['T'] = 4;
    
    $count = count($P);
    
    for($i=0;$i<$count;$i++){
        $lowerLimit = $P[$i];
        $upperLimit = $Q[$i];
        $nrChar = $upperLimit-$lowerLimit+1;
        if($nrChar == 1){
            $ret[$i] = $decode[$S[$lowerLimit]];
        }else{
            $substring = substr($S,$lowerLimit,$nrChar);
            if(strpos($substring,"A")!==false){
                $ret[$i] = 1;
            }else if(strpos($substring,"C")!==false){
                $ret[$i] = 2;
            }else if(strpos($substring,"G")!==false){
                $ret[$i] = 3;
            }else{
                $ret[$i] = 4;
            }
        }
    }
    return $ret;
}
