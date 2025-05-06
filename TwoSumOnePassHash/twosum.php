function twoSum($nums, $target) {
    $map = [];

    $n = count($nums);

    for($i = 0; $i < $n; $i++) {
        $complement = $target - $nums[$i];  
        
        if(array_key_exists($complement, $map)) {
            return [$map[$complement], $i];  
        }
        
        $map[$nums[$i]] = $i;  
    }
    
    return [];  
}
