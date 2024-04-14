# 238. Product of Array Except Self

## Solution
- 1st for loop assigns left cumulative multiples
- 2nd for loop multiplies right cumulative multiples

## What happens behind
- nums: {1,2,3,4}
- paddedNums: {1,1,2,3,4,1}
- prefix multiples: {1}+{1,2,6,24}
- postfix multiples: {24,24,12,4}+{1}
- result: {24,12,8,6} = {1x24,1x12,2x4,6x1}

### Java
```java
class Solution {
    /**
     * 1st for loop: assign left cumulative multiples
     * 2nd for loop: multiply right cumulative multiples
     */
    public int[] productExceptSelf(int[] nums) {

        int[] result = new int[nums.length];

        // padd nums with 1 at the edge
        int[] paddedNums = new int[nums.length + 2];
        Arrays.fill(paddedNums, 1);
        System.arraycopy(nums, 0, paddedNums, 1, nums.length);

        // assign cumulative multiples to the left
        int prefixAccumulator = 1;
        for (int i = 0; i < nums.length; i++) {
            prefixAccumulator = prefixAccumulator * paddedNums[i];
            result[i] = prefixAccumulator;
        }

        // multiply cumulative multiples to the right
        int postfixAccumulator = 1;
        for (int j = 0; j < nums.length; j++) {
            postfixAccumulator = postfixAccumulator * (paddedNums[paddedNums.length - 1 - j]);
            result[nums.length - 1 - j] = result[nums.length - 1 - j] * postfixAccumulator;
        }

        return result;
    }
}
```