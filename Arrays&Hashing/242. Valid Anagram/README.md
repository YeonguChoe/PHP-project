# [242. Valid Anagram](https://leetcode.com/problems/valid-anagram/)

## Solution
- First, check if two Strings are the same length
- Second, increment alphabet array
- Third, check if every cell contains even number

### Java
```java
class Solution {
    public boolean isAnagram(String s, String t) {
        // Check if the length are different
        if (s.length() != t.length()) {
            return false;
        }

        // Check if two string contains the same number of each alphabet
        // There are 26 alphabets
        int[] Alphabet = new int[26];

        for (int i = 0; i < s.length(); i++) {
            // increase alphabet count
            Alphabet[s.charAt(i) - 'a']++;
            Alphabet[t.charAt(i) - 'a']++;
        }
        // check if the array contains 0 or 2 only
        for (int j = 0; j < Alphabet.length; j++) {
            // every cell should contain even number
            if (Alphabet[j] % 2 != 0) {
                return false;
            }
        }
        return true;
    }
}
```