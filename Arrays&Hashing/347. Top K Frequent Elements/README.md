# 347. Top K Frequent Elements

## Solution
- 추가 설명 필요

### Java
```java
class Solution {
    public int[] topKFrequent(int[] nums, int k) {

        // Map whose key is number and value is frequency
        Map<Integer, Integer> numberToFrequency = new HashMap<>();

        for (int i : nums) {
            if (!numberToFrequency.containsKey(i)) {
                numberToFrequency.put(i, 1);
            }
            numberToFrequency.put(i, numberToFrequency.get(i) + 1);
        }

        Queue<Map.Entry<Integer, Integer>> pq = new PriorityQueue<>((a, b) -> b.getValue() - a.getValue());
        pq.addAll(numberToFrequency.entrySet());

        int[] result = new int[k];

        for (int i = 0; i < k; i++) {
            result[i] = pq.poll().getKey();
        }

        return result;
    }
}
```