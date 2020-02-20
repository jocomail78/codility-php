// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function getFirst(&$h){
    $ret = reset($h);
    array_shift($h);
    return $ret;
}

function solution($H) {
   $h = $H;
   $counter = 1;
   $current = getFirst($h);
   $currentList = array();
   while(is_array($h) && count($h)){
       $next = getFirst($h);
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