# Data Science 
* Learning with [SoloLearn's course](https://www.sololearn.com/learning/1093) and my [course notes](https://github.com/EO4wellness/T-I-L/tree/main/Data/SoloLearn-Data-Science)
* [Overiew: Data Science Terms](https://www.marketingaiinstitute.com/blog/20-data-science-and-ai-terms-you-need-to-know)
* Distinction: [Data Analyst vs Data Science](https://news.codecademy.com/data-analyst-vs-data-scientist/)

# Data Structures:
* [Types](https://dev.to/fahimulhaq/top-8-data-structures-for-coding-interviews-and-practice-interview-questions-2pb)


# Big Data Resources:
* [5 Gobal Data Resources](https://youtu.be/yGwub5OE3PQ)
* [GELD Teaser](https://youtu.be/GpCarC_I3Ao) and [GELD website](https://blog.gdeltproject.org/)
* Examples using [big data](https://youtu.be/A6nWZKZpL3k)

Dec 3, 2020 Course Notes. 

Really enjoyed this lesson. Thought I would share some of my course notes from today's study session with this material.
In this lesson, The Analytical Problem, we learned about the Problem Solving Framework and its six steps which help us define the problem to be analyzed using the Predictive Mythology Map.
There are six steps n the Problem Solving Framework (which is what we are calling it in this coursework but it is also known by the acronym CRISP-DM which is short for "Cross Industry Standard Process for Data Mining"--referring to the fact this framework was developed by data miners.)
Problem Solving Framework:
Business issue understanding 
Data understanding 
Data preparation 
Analysis/Modeling 
Validation 
Presentation/Visualization
I especially like the instructor's take on what to do once the correct analysis method has been determined and the data has been analyzed.  The point is to find the answer(s).  Once the answer(s) is(are) identified, then the most important thing is how they are communicated.  The answer(s) are meaningless IF the audience requesting those answer cannot understand them.   The instructor coined my new favorite phrase:  It is important to not just SHOW UP and THROW UP!"   I've seen so many business presentations (or even news media or school presentations) which do the "show up and throw up" approach.  To get around it, the instructor recommends focusing on considering these main points:
Determine the best method of presenting insights based on the analysis
Determine the best method of presenting insights based on the audience
Make sure the amount of information shared is not overwhelming
Use the results to tell a story to the audience
For more complex analyses, you may want to walk the audience through the analytical problem solving process
Always reference the data sources used
Make sure your analysis supports the decisions that need to be made
Ultimately--it often helps to TELL a story.

In addition to the notes from #l1_analytical_problem  I thought I would share a list of terms I made from #l2_analytical_framework which I'm personally using to quiz myself and review my understanding and am sharing if anyone else would like to do so. Also, I noticed Alteryx also has usecase scenarios available on their website, lots of training and other materials, as well as an active and interactive community.  https://community.alteryx.com/t5/Alteryx-Use-Cases/tkb-p/use-cases

GLOSSARY :
Strategy for Solving Problems
Non-Predictive Data Analysis
Predictive Analysis
Linear Regression
Predictive 
Non-Predictive 
Geospatial Analysis
Segmentation Analysis
Aggregation Analysis
Descriptive Analysis
Descriptive Statistics (terms related to Descriptive Statistics: Mean, Median, Mode, Standard Deviation, Interquartile) Udacity free course on this if it is all new: https://www.udacity.com/course/intro-to-descriptive-statistics--ud827
Data Rich 
Data Poor 
Numeric Predictive Analysis 
Non-Numeric Predictive Analysis 
Regression Models 
Classification Models 
Target Variables 
Numerical Variables Types 
Non-Numeric Variables 
Continuous 
Time-Based 
Count (not covered in this course as it is not common in business practices) but are discrete positive integers
Classification Models
Binary 
Non-Binary 
A/B Testing 
Non-Predictive 
Methodology Types 


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
