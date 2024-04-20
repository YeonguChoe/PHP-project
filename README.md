# Blind75
- Algorithm interview preparation in JS/TS and Java.
- JS/TS doesn't have built-in Heap, while Java has every data structure in collection.

## Content
### Arrays & Hashing
- [217. Contains Duplicate](Arrays&Hashing/217.%20Contains%20Duplicate): Using `set` to check duplicate
- [242. Valid Anagram](Arrays&Hashing/242.%20Valid%20Anagram): Using Alphabet count `array` to check 2 Strings are anagram
- [1. Two Sum](Arrays&Hashing/1.%20Two%20Sum): `Map` contains pair whose key is element and value is index
- [49. Group Anagrams](Arrays&Hashing/49.%20Group%20Anagrams): `Map` whose key is sorted word and value is list of anagrams
- [347. Top K Frequent Elements](Arrays&Hashing/347.%20Top%20K%20Frequent%20Elements): `Map` whose key is number and value is frequency + `MaxHeap` to use lambda function comparator
- [271. Encode and Decode Strings](Arrays&Hashing/271.%20Encode%20and%20Decode%20Strings): 1st pointer at the start of next word search, 2nd pointer at the next `#`
- [238. Product of Array Except Self](Arrays&Hashing/238.%20Product%20of%20Array%20Except%20Self): 1st for loop assigns left cumulative multiples, 2nd for loop multiplies right cumulative multiples
- [128. Longest Consecutive Sequence](Arrays&Hashing/128.%20Longest%20Consecutive%20Sequence): `Set` for faster search, No left value means start of consecutive sequence, count consecutive numbers from the set
