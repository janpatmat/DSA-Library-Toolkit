# Binary Search Algorithm

Binary Search is an efficient algorithm for finding an item from a sorted list of items. It works by repeatedly dividing the search interval in half. Below are the steps to perform a binary search in **O(log n)** time complexity:

## Steps of Binary Search

1. **Initialize Pointers**:
    - Set two pointers: `low` to the start of the array and `high` to the end of the array.

2. **Calculate Midpoint**:
    - Compute the middle index:  
      `mid = low + (high - low) // 2`.

3. **Compare Midpoint Value**:
    - If the value at `mid` equals the target, return the index.
    - If the target is less than the value at `mid`, update `high = mid - 1`.
    - If the target is greater than the value at `mid`, update `low = mid + 1`.

4. **Repeat**:
    - Repeat steps 2 and 3 until `low` is greater than `high` or the target is found.

5. **Return Result**:
    - If the target is found, return its index.
    - If the target is not found, return an indication (e.g., `-1`).

## Time Complexity
- **Best Case**: O(1) (when the target is found at the midpoint in the first iteration).
- **Worst Case**: O(log n) (when the search space is repeatedly halved).

## Notes
- The array must be sorted for binary search to work.
- Binary search is commonly used in searching problems and is a fundamental algorithm in computer science.
- It is more efficient than linear search for large datasets.
