<?php 
class Twosum {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
       /* $extra_array = array();
        $count = count($nums);
        for ($i = 0;$i < $count;$i++) {
            $extra_array[$target - $nums[$i]] = $i;
        }
        
         var_dump($extra_array);
        
        for ($j = 0;$j < $count;$j++) {
            if (array_key_exists($nums[$j], $extra_array) && $j !== $extra_array[$nums[$j]]) {
                return array($j, $extra_array[$nums[$j]]);
            }
        }
        return array(0,0);*/

        foreach ($nums as $key => $val) {
            unset($nums[$key]);
            $nextKey = array_search(($target - $val), $nums);
            if ($nextKey) {
                return [$key, $nextKey];
            }
        }
        return [];
    }
    
}
$twosum = new Twosum();
$nums = [2,7,11,15];
$target = 9;
$result = $twosum->twoSum($nums, $target);
?>