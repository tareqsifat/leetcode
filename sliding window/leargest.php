<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLHS($nums) {
        sort($nums); 
        $start = 0;
        $maxLength = 0;
        $count = count($nums);

        for ($end = 0; $end < $count; $end++) {

            while ($nums[$end] - $nums[$start] > 1) {

                $start++;
            }

            if ($nums[$end] - $nums[$start] == 1) {
                $currentLength = $end - $start + 1;
                $maxLength = max($maxLength, $currentLength);
            }
        }

        return $maxLength;
    }
}
$sample = [
    [1,3,2,2,5,2,3,7],
    [1,2,3,4],
    [1,1,1,1]
];
$result = [5,2,0];
$solution = new Solution();

