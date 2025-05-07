class Solution:
    def isPalindrome(self, x: int) -> bool:

        # If ang x is not negative nor does it have ang remainder, continue otherwise return false
        if x < 0 or (x % 10 == 0 and x != 0):
            return False
        revertedNumber = 0
        # Every loop multiplies the reverted number by 10 + the remainder of x
        while x > revertedNumber:
            revertedNumber = revertedNumber * 10 + x % 10
            # remove the last digit of x
            x //= 10
        return x == revertedNumber or x == revertedNumber // 10