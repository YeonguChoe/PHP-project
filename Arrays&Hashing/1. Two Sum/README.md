# [1. Two Sum](https://leetcode.com/problems/two-sum/)

## Solution
- Map contains element as a key and index as a value.
- For loop chooses the 1st operand
- If statement checks if the 2nd operand is in the map

### Java
```java
// A(1st operand) + B(2nd operand) = target
class Solution {
    public int[] twoSum(int[] nums, int target) {

        // Map which connects element to index of input array
        Map<Integer, Integer> elementToIndex = new HashMap<>();

        // for loop chooses the 1st operand
        for (int i = 0; i < nums.length; i++) {
            // check if the map contains the 2nd operand
            int remainingValue = target - nums[i];
            if (elementToIndex.containsKey(remainingValue)) {
                int[] result = new int[2];
                result[0] = elementToIndex.get(remainingValue);
                result[1] = i;
                return result;
            }
            // add new pair to the map, whose
            // key: element
            // value: index
            elementToIndex.put(nums[i], i);
        }
        return null;
    }
}
```