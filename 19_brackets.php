// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($S) {
    $p = str_split($S);
    $remaining = array();
    $assocList = array();
    $assocList["}"] = "{";
    $assocList["]"] = "[";
    $assocList[")"] = "(";
    for($i=0;$i<count($p);$i++){
        $c = $p[$i];
        if($c == "{" || $c == "[" || $c == "("){
            $remaining[] = $c;
        }else{
            $lastItem = array_pop($remaining);
            $pair = $assocList[$c];
            if($lastItem!=$pair){
                return 0;
            }
        }
    }
    if(count($remaining) == 0){
        return 1;
    }
    return 0;
}
