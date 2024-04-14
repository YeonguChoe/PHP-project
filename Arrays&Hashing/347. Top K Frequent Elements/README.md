# 347. Top K Frequent Elements

## Solution
- Create a map whose key is number and value is frequency
- Create MaxHeap based on value of the map using lambda function
- Extract (poll) the topmost value from the MaxHeap *k* times

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

        // Create a MaxHeap using comparator function
        Queue<Map.Entry<Integer, Integer>> pq = new PriorityQueue<>((a, b) -> b.getValue() - a.getValue());
        // Add every entry of the map
        pq.addAll(numberToFrequency.entrySet());

        // Extract the topmost entry k times
        int[] result = new int[k];

        for (int i = 0; i < k; i++) {
            result[i] = pq.poll().getKey();
        }

        return result;
    }
}
```