//Task Score -> 100%
//Correctness -> 100%
//Performance -> 100%

function solution($A) {
    $res = array();
    foreach($A as $v){
        if(isset($res[$v])){
            unset($res[$v]);
        }else{
            $res[$v] = 1;
        }
    }
    if(is_array($res) && count($res)){
        $keys = array_keys($res);
        $first = reset($keys);
        return $first;
    }
}
