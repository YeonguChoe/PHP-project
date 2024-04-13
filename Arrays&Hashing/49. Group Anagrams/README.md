# Group Anagrams

## Solution
- Create a Map whose key is sorted word and value is list of anagram

### Java
```java
class Solution {
    public List<List<String>> groupAnagrams(String[] strs) {

        // key: sorted word
        // value: ArrayList of anagrams
        Map<String, List<String>> sortedWordToAnagrams = new HashMap<>();

        // select an element from input array
        for (int i = 0; i < strs.length; i++) {
            // sort selected word(String) in alphabetical order
            char[] charArray = strs[i].toCharArray();
            Arrays.sort(charArray);
            String sortedWord = new String(charArray);

            // check if the map already contains the key (Sorted word)
            if (!sortedWordToAnagrams.containsKey(sortedWord)) {
                // if the key does not exist, create a slot for the key
                sortedWordToAnagrams.put(sortedWord, new ArrayList<String>());
            }

            // add word into the correct slot(ArrayList)
            List<String> anagramList = sortedWordToAnagrams.get(sortedWord);
            anagramList.add(strs[i]);
        }


        // make an ArrayList out of values
        return new ArrayList<>(sortedWordToAnagrams.values());
    }
}
```