# TwoSum Problem

### Instruction:
Given an array of integers `nums` and an integer `target`, return the indices of the two numbers such that they add up to `target`.

You may assume that each input will have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

---

### Approach (One Pass Hash)

1. **Create a map/dictionary**: This will store numbers as keys and their respective indices as values.
   
2. **Declare the size**: You can find the size of the array to help iterate over it.

3. **Iterate the array**: Loop through the array of numbers.

4. **Find the complement**: For each element at index `i`, subtract the number from the target to get its complement (i.e., `complement = target - nums[i]`).

5. **Check for complement**:
   - If the complement already exists in the map (meaning you’ve already seen that number), return the indices: `[map[complement], i]`.
   - If not, store the current number in the map with its index: `map[nums[i]] = i`.


