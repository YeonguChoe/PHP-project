# 271. Encode and Decode Strings

## Solution
- Append word length and `#` in front of each words when making a decoded String.
- 1st pointer at the start of next word search. 2nd pointer at the next `#`.

### Java
```java
class Codec {

    // Convert list of words into a String
    public String encode(List<String> strs) {
        String encoded_string = "";
        for (String word : strs) {
            // Add word length and # in front of each word
            encoded_string = encoded_string + word.length() + "#" + word;
        }
        return encoded_string;
    }

    // Convert a String into list of words
    public List<String> decode(String s) {

        List<String> decoded_list = new ArrayList<>();

        int pointerToCurrentWord = 0;
        int pointerToSharp = 0;

        while (pointerToCurrentWord < s.length()) {
            // move 2nd pointer to sharp
            pointerToSharp = pointerToCurrentWord;
            while (s.charAt(pointerToSharp) != '#') {
                pointerToSharp += 1;
            }

            // Extract a word
            int wordLength = Integer.parseInt(s.substring(pointerToCurrentWord, pointerToSharp));
            String newWord = s.substring(pointerToSharp + 1, pointerToSharp + 1 + wordLength);
            // Add extracted word
            decoded_list.add(newWord);

            // Move 1st pointer to next starting point
            pointerToCurrentWord = pointerToSharp + 1 + wordLength;
        }

        return decoded_list;
    }
}
```