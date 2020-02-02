// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($S) {
    $counter = 0;
    for($i=0;$i<strlen($S);$i++){
        $oneChar = $S[$i];
        if($oneChar == "("){
            $counter ++;
        }else{
            $counter --;
            if($counter<0){
                return 0;
            }
        }
    }
    if($counter == 0){
        return 1;
    }
    return 0;
}
