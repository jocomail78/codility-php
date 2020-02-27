//Version inspired from https://github.com/delda/codility/blob/master/src/Lesson7/StoneWall.php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
function solution($H) {
    $c = count($H);
    $edge_height = array();
    $edge_height_index = 0;
    $stone_blocks = 0;

    for($i=0; $i<$c; $i++){
        while($edge_height_index > 0 && $edge_height[$edge_height_index - 1] > $H[$i]) {
            $edge_height_index--;
        }
        if($edge_height_index > 0 && $edge_height[$edge_height_index - 1] == $H[$i]){
            continue;
        }else{
            $stone_blocks++;
            $edge_height[$edge_height_index] = $H[$i];
            $edge_height_index++;
        }
    }

    return $stone_blocks;
}

//My version:


// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function getFirst(&$h, &$p){
    $ret = $h[$p];
    $p++;
    return $ret;
}

function solution($H) {
   $h = $H;
   $p = 0;
   $counter = 1;
   $current = getFirst($h, $p);
   $currentList = array();
   $itemCount = count($h)-1;
   while($itemCount>0){
       $next = getFirst($h, $p);
       $itemCount--;
       if($next == $current){
           //going forward, nothing special
       }else if($next>$current){
           if(!in_array($next,$currentList)){
               $counter++;
               $currentList[] = $next;
           }
       }else if($next<$current){
           $currentList = array();
           $counter++;
           $current = $next;
       }
   }
   return $counter;
   
}
