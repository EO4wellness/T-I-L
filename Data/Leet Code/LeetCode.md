
# [Binary Search LeetCode.com](https://leetcode.com/explore/learn/card/binary-search/)

## Introduction:
Q: What is Binary Search?  

A:  It is one of the most basic and useful algorithms in Computer Science. 
* It describes the process of seaching for a specific value in an ordered collection. 
* It has its own terminology.  This terminology has its own definition based on this technique. 

Binary Search Terms:
* Target -The value which you are searching to find 
* Index - the current location where you are searching 
* Left, Right - the indicides from which we use to maintain our search space. 
* Mid - the INDEX we use to apply a condition to determine if we should search RIGHT or LEFT

["Binary Search Algorithm - Wiki Article](https://en.wikipedia.org/wiki/Binary_search_algorithm)

## Background: 
The goal of this section is to explain:


    1.  the mechanics of how Binary Search works
    2.  different ways to identify Binary Search 
    3.  a brief introduction to the 3 most commonly used Binary Search Templates 

## Binary Search 
Given a SORTED (in ascending order) integer array "nums" of "n" elements and a "target" value, write a function to search "target" in "nums"


If "target" exists, then return its index.  Otherwise, return "-1"


EXAMPLE:

    Input: nums = [-1,0,3,5,9,12], target = 9
    Output: 4
    Explanation: 9 exists in nums and its index is 4


EXAMPLE:

    Input: nums = [-1,0,3,5,9,12], target = 2
    Output: -1
    Explanation: 2 does not exist in nums so return -1


NOTES:


    You may assume that all elements in nums are unique.
    n will be in the range [1, 10000].
    The value of each element in nums will be in the range [-9999, 9999].
    
SOLUTION:

Approach 1: Binary Search

-Intuition-

Binary search is a textbook algorithm based on the idea to compare the target value to the middle element of the array.

If the target value is equal to the middle element - we're done.

If the target value is smaller - continue to search on the left.

If the target value is larger - continue to search on the right.

-Algorithm-


    Initialise left and right pointers : left = 0, right = n - 1.

    While left <= right :

        Compare middle element of the array nums[pivot] to the target value target.

            If the middle element is the target target = nums[pivot] : return pivot.

            If the target is not yet found :

                If target < nums[pivot], continue the search on the left right = pivot - 1.

                Else continue the search on the right left = pivot + 1.
                
-Implementation-


C++

'
class Solution {
  public:
  int search(vector<int>& nums, int target) {
    int pivot, left = 0, right = nums.size() - 1;
    while (left <= right) {
      pivot = left + (right - left) / 2;
      if (nums[pivot] == target) return pivot;
      if (target < nums[pivot]) right = pivot - 1;
      else left = pivot + 1;
    }
    return -1;
  }
};
'  
  
JAVA 

'
class Solution {
  public int search(int[] nums, int target) {
    int pivot, left = 0, right = nums.length - 1;
    while (left <= right) {
      pivot = left + (right - left) / 2;
      if (nums[pivot] == target) return pivot;
      if (target < nums[pivot]) right = pivot - 1;
      else left = pivot + 1;
    }
    return -1;
  }
}
'

PYTHON

'
class Solution:
    def search(self, nums: List[int], target: int) -> int:
        left, right = 0, len(nums) - 1
        while left <= right:
            pivot = left + (right - left) // 2
            if nums[pivot] == target:
                return pivot
            if target < nums[pivot]:
                right = pivot - 1
            else:
                left = pivot + 1
        return -1
'
        
Complexity Analysis

    Time complexity : O(log⁡N)\mathcal{O}(\log N)O(logN).

    Let's compute time complexity with the help of master theorem T(N)=aT(Nb)+Θ(Nd)T(N) = aT\left(\frac{N}{b}\right) + \Theta(N^d)T(N)=aT(bN​)+Θ(Nd). The equation represents dividing the problem up into aaa subproblems of size Nb\frac{N}{b}bN​ in Θ(Nd)\Theta(N^d)Θ(Nd) time. Here at step there is only one subproblem a = 1, its size is a half of the initial problem b = 2, and all this happens in a constant time d = 0. That means that log⁡ba=d\log_b{a} = dlogb​a=d and hence we're dealing with case 2 that results in O(nlog⁡balog⁡d+1N)\mathcal{O}(n^{\log_b{a}} \log^{d + 1} N)O(nlogb​alogd+1N) = O(log⁡N)\mathcal{O}(\log N)O(logN) time complexity.

    Space complexity : O(1)\mathcal{O}(1)O(1) since it's a constant space solution.
    



    
    
Return to Studies here: https://leetcode.com/explore/learn/card/binary-search/138/background/974/ 