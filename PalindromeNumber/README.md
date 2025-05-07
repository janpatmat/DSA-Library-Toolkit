# TwoSum Problem

### Instruction:
Given an integer `x`, return true if `x` is a **palindrome**, and false otherwise.

---

### Approach (One Pass Hash)

1. **Check if the input is 0 or a number with no remainder**: With the idea of using %10 to see if it has a remainder shows that the input could be a palindrome.
   
2. **Create a loop where input > the reversed**: Per step of the loop will take the last digit and reverse it.

3. **Store the value into the reversed variable**: Take the last digit using %10 and add it into the reversed number.

4. **Multiply the reversed with 10 to increase the digit added**: Every time the `reversed` is multiplied by 10 you set up the remainder of the `input%10` into the next digit of the reversed

5. **Check for complement**: If the loop condition is satisfied check if the input is equal to the reverted OR if the input is equal to `reverted //10` which takes out the final digit of the reverted


