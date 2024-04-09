# 1. Two Sum

## Solution
- Use `Set` to check duplicate.

### Java
```java
class Solution {
    public boolean containsDuplicate(int[] nums) {
        // Set
        Set<Integer> set = new HashSet<>();

        // Index
        int i = 0;

        // While loop
        while (i < nums.length) {
            // Check if the set contains the value
            if (set.contains(nums[i])) {
                return true;
            }
            // add new value to the set
            set.add(nums[i]);
            // increment index
            i++;
        }
        // If the input didn't contain duplicate value
        return false;
    }
}
```