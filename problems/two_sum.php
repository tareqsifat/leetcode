<?php
require_once __DIR__ . '/../Solution.php';

Solution::macro('twoSum', function ($nums, $target) {
    $map = [];
    foreach ($nums as $i => $num) {
        $diff = $target - $num;
        if (isset($map[$diff])) {
            return [$map[$diff], $i];
        }
        $map[$num] = $i;
    }
    return [];
});

function runTwoSumTests() {
    $s = new Solution();

    assert($s->twoSum([2, 7, 11, 15], 9) === [0, 1]);
    assert($s->twoSum([3, 2, 4], 6) === [1, 2]);
    assert($s->twoSum([3, 3], 6) === [0, 1]);

    echo "✅ twoSum tests passed!" . PHP_EOL;
}
