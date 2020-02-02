// Task Score -> 100%
// Correctness -> 100%
// Performance -> 100%

function solution($A) {
    $intersect = 0;
    $count = count($A);
    $started = $ended = array_fill(0,$count,0);
    foreach($A as $index => $radius){
        $lowerLimit = $index-$radius;
        if($lowerLimit<0){
            $lowerLimit = 0;
        }
        $upperLimit = $index+$radius;
        if($upperLimit > ($count-1)){
            $upperLimit = ($count-1);
        }
        $started[$lowerLimit]++;
        $ended[$upperLimit]++;
    }
    $insideOfDisks = 0;
    
    for($i=0;$i<$count;$i++){
        if($started[$i] > 0){
            $intersect += $insideOfDisks*$started[$i]; //Number of new intersections
            $intersect += $started[$i]*($started[$i]-1)/2; //Number of intersection with each other, on one side. 
        }
        $insideOfDisks=$insideOfDisks+$started[$i]-$ended[$i];
        if($intersect > 10000000){
            return -1;
        }
    }
    return $intersect;
    
}

//Inspired by https://github.com/samiulhoque/codility-lessons/blob/master/src/Lesson04/NumberOfDiscIntersections.php
