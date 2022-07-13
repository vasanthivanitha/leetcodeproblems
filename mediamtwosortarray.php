 <?php 
  function findMedianSortedArrays($nums1, $nums2) {
        $newArray = array_merge($nums1, $nums2);
        sort($newArray);
        $countarray =  count($newArray);  
        unset($newArray[$countarray-1]); 
        unset($newArray[0]); 
        $sum=0;
        foreach($newArray as $key=>$val){
           $sum+=$val;
        }
        
        return $sum / count($newArray);
    }
    ?>
