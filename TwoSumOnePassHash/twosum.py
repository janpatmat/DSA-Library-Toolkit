def twoSum(nums, target):
    # Declare ang map
    num_map = {}  
    # Iterate the list
    for i, num in enumerate(nums):
        
        complement = target - num  
        
        if complement in num_map:  
            return [num_map[complement], i]
        
        num_map[num] = i  

    return []  
