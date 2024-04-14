# 128. Longest Consecutive Sequence

## Solution
- Create a set from input array for faster search.
- If left value does not exist, it is the starting point of a sequence.
- Once start of sequence is found, search for consecutive number from the set.
- Save length of the sequence to a list.

### Java
```java
class Solution {
    public int longestConsecutive(int[] nums) {

        // Create a Set of input numbers for fast search
        Set<Integer> numsSet = new HashSet<>();
        for (int num : nums) {
            numsSet.add(num);
        }

        // Create a list of length of consecutive sequence
        List<Integer> sequenceLengthList = new ArrayList<>();

        for (int i = 0; i < nums.length; i++) {
            // If selected number does not have left value,
            // start observation
            if (!numsSet.contains(nums[i] - 1)) {
                int length = 1;
                // Check how many consecutive numbers exist in the input array
                while (numsSet.contains(nums[i] + length)) {
                    length = length + 1;
                }
                // Add length of sequence to list
                sequenceLengthList.add(length);
            }
        }


        // Find the maximum value in the list
        int maximumLength = 0;
        for (int j = 0; j < sequenceLengthList.size(); j++) {
            maximumLength = Math.max(sequenceLengthList.get(j), maximumLength);
        }

        return maximumLength;
    }
}
```