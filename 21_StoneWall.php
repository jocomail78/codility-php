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
