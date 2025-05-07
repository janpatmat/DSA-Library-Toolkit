class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    if ($x < 0 or ($x % 10 == 0 and $x != 0)){
        return False;
    }
   else{
    
        $reverted = 0;
        
        while($x > $reverted){
            print($reverted. "\n");
            $reverted = (($x * 10) + $x % 10);
            print($reverted . "\n");
            intdiv($x, 10);
            print( intdiv($x, 10) . "\n");
            print("================\n");
        }
        print($reverted);
        if($x == $reverted or $x == intdiv($reverted, 10)){
            return True;
        }
        
   }
}
}