class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function search($nums, $target) {
    $high = count($nums);
    $low = 0;

    while($low <= $high){
        $mid = $low + ($high - $low) /2;
        if($nums[$mid] == $target){
            return $mid;
        }
        else if($nums[$mid] < $target){
            $low = $mid + 1;
        }
        else{
            $high = $mid - 1;
        }
    }
    return -1;
}
}