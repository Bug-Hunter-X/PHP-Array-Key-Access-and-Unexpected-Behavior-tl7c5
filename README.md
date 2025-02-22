# PHP Array Key Access and Unexpected Behavior

This repository demonstrates a common yet subtle error in PHP related to accessing array keys and the order of elements when using a mix of string and numeric keys.  The `bug.php` file shows the problematic code, while `bugSolution.php` provides a solution.

The issue arises due to PHP's implementation of arrays as ordered hash maps, where the order of insertion and numeric/string key access can create unexpected results.  The readme highlights these behaviors and offers solutions for robust array handling.

## How to reproduce
1. Clone this repository
2. Run `php bug.php` to see the unexpected behavior
3. Run `php bugSolution.php` to see the corrected behavior

## Solution
The key is to understand that PHP arrays use both numeric and string indices.  Be explicit in handling array keys to avoid undefined index errors or unexpected behavior in loops.