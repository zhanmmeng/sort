<?php

/**
 * 1.冒泡排序
 */
####################################################
// function bubblesort($arr)
// {
//     $len = count($arr);
//     for ($i = 0; $i < $len - 1; $i++) {
//         for ($j = 0; $j < $len - 1 - $i; $j++) {
//             if ($arr[$j] > $arr[$j + 1]) {
//                 $tmp = $arr[$j];
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $tmp;
//             }
//         }
//     }
//     return $arr;
// }
// $arr = [5, 4, 3, 2, 1];
// print_r(bubblesort($arr));
####################################################

/**
 * 2.选择排序
 */
####################################################
// function SelectionSort($arr)
// {
//     $len = count($arr);
//     for ($i = 0; $i < $len - 1; $i++) {
//         $minIndex = $i;
//         for ($j = $i + 1; $j < $len; $j++) {
//             if ($arr[$j] < $arr[$minIndex]) {
//                 $minIndex = $j;
//             }
//         }
//         $temp = $arr[$i];
//         $arr[$i] = $arr[$minIndex];
//         $arr[$minIndex] = $temp;
//     }
//     return $arr;
// }
// $arr = [7, 6, 4, 5, 3, 1, 2];
// print_r(SelectionSort($arr));
####################################################

/**
 * 3.插入排序
 */
####################################################
// function InsertionSort($arr)
// {
//     $len = count($arr);
//     for ($i = 1; $i < $len; $i++) {

//         $preIndex = $i - 1;
//         $current = $arr[$i];
//         while ($preIndex >= 0 && $arr[$preIndex] > $current) {
//             $arr[$preIndex + 1] = $arr[$preIndex];
//             $preIndex--;
//         }
//         $arr[$preIndex + 1] = $current;
//     }
//     return $arr;
// }
// $arr = [4, 6, 2, 8, 7, 3, 1];
// print_r(InsertionSort($arr));
####################################################

/**
 * 4.希尔排序
 */
####################################################
// function shellSort($arr)
// {
//     $len = count($arr);
//     $temp = 0;
//     $gap = 1;
//     while ($gap < $len / 3) {
//         $gap = $gap * 3 + 1;
//     }
//     for ($gap; $gap > 0; $gap = floor($gap / 3)) {
//         for ($i = $gap; $i < $len; $i++) {
//             $temp = $arr[$i];
//             for ($j = $i - $gap; $j >= 0 && $arr[$j] > $temp; $j -= $gap) {
//                 $arr[$j + $gap] = $arr[$j];
//             }
//             $arr[$j + $gap] = $temp;
//         }
//     }
//     return $arr;
// }
// $arr = [52,65,84,45,32,21,26,15,89,23,69,76,36,49,10,9,16,4,6,2];
// print_r(shellSort($arr));
####################################################

/**
 * 5.归并排序
 */
####################################################
// function mergeSort($arr)
// {
//     $len = count($arr);
//     if ($len < 2) {
//         return $arr;
//     }
//     $middle = floor($len / 2);
//     $left = array_slice($arr, 0, $middle);
//     $right = array_slice($arr, $middle);
//     return merge(mergeSort($left), mergeSort($right));
// }

// function merge($left, $right)
// {
//     $result = [];
//     while (count($left) > 0 && count($right) > 0) {
//         if ($left[0] <= $right[0]) {
//             $result[] = array_shift($left);
//         } else {
//             $result[] = array_shift($right);
//         }
//     }

//     while (count($left)) {
//         $result[] = array_shift($left);
//     }
//     while (count($right)) {        
//         $result[] = array_shift($right);
//     }
//     return $result;
// }
// $arr = [52, 65, 84, 45, 32, 21, 26, 15, 89, 23, 69, 76, 36, 49, 10, 9, 16, 4, 6, 2];
// print_r(mergeSort($arr));
####################################################

/**
 * 6.快速排序
 */
####################################################
// function quickSort($arr)
// {
//     if (count($arr) <= 1) {
//         return $arr;
//     }
//     $middle = $arr[0];
//     $leftArray = array();
//     $rightArray = array();
//     for ($i = 1; $i < count($arr); $i++) {
//         if ($arr[$i] > $middle) {
//             $rightArray[] = $arr[$i];
//         } else {
//             $leftArray[] = $arr[$i];
//         }
//     }
//     $leftArray = quickSort($leftArray);
//     $leftArray[] = $middle;
//     $rightArray = quickSort($rightArray);
//     return array_merge($leftArray, $rightArray);
// }
// $arr = [52, 65, 84, 45, 32, 21, 26, 15, 89, 23, 69, 76, 36, 49, 10, 9, 16, 4, 6, 1];
// print_r(quickSort($arr));
####################################################

/**
 * 7.堆排序
 */
####################################################
// function buildMaxHeap(&$arr)
// {
//     global $len;
//     for ($i = floor($len / 2); $i >= 0; $i--) {
//         heapify($arr, $i);
//     }
// }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
// function heapify(&$arr, $i)
// {
//     global $len;
//     $left = 2 * $i + 1;
//     $right = 2 * $i + 2;
//     $largest = $i;

//     if ($left < $len && $arr[$left] > $arr[$largest]) {
//         $largest = $left;
//     }
//     if ($right < $len && $arr[$right] > $arr[$largest]) {
//         $largest = $right;
//     }
//     if ($largest != $i) {
//         swap($arr, $i, $largest);
//         heapify($arr, $largest);
//     }
// }
// function swap(& $arr, $i, $j)
// {
//     $temp = $arr[$i];
//     $arr[$i] = $arr[$j];
//     $arr[$j] = $temp;
// }
// function heapSort($arr)
// {
//     global $len;
//     $len = count($arr);
//     buildMaxHeap($arr);
//     for ($i = count($arr) - 1; $i > 0; $i--) {
//         swap($arr, 0, $i);
//         $len--;
//         heapify($arr, 0);
//     }
//     return $arr;
// }     
// $arr = [52, 65, 84, 45, 32, 21, 26, 15, 89, 23, 69, 76, 36, 49, 10, 9, 16, 4, 6, 1];
// print_r(heapSort($arr));
####################################################

/**
 * 8.计数排序
 */
####################################################
// function countingSort($arr, $maxValue = null)
// {
//     if ($maxValue === null) {
//         $maxValue = max($arr);
//     }
//     for ($m = 0; $m < $maxValue; $m++) {
//         $bucket[] = null;
//     }
//     $arrLen = count($arr);
//     for ($i = 0; $i < $arrLen; $i++) {
//         if (!array_key_exists($arr[$i], $bucket)) {
//             $bucket[$arr[$i]] = 0;
//         }
//         $bucket[$arr[$i]]++;
//     }
//     $sortedIndex = 0;
//     foreach ($bucket as $key => $len) {
//         if ($len !== null) {
//             $arr[$sortedIndex++] = $key;
//         }
//         if ($len !== null) {
//             for ($j = 0; $j < $len; $j++) {
//                 $arr[$sortedIndex++] = $key;
//             }
//         }
//     }
//     return $arr;
// }
// $arr = [52, 65, 84, 45, 32, 21, 26, 15, 89, 23, 69, 76, 36, 49, 10, 9, 16, 4, 6, 1];
// print_r(countingSort($arr));
####################################################

/**
 * 9.桶排序
 */
####################################################
// function bucketSort($arr, $bucketSize = 5)
// {
//     if (count($arr) === 0) {
//         return $arr;
//     }

//     $minValue = $arr[0];
//     $maxValue = $arr[0];
//     for ($i = 1; $i < count($arr); $i++) {
//         if ($arr[$i] < $minValue) {
//             $minValue = $arr[$i];
//         } else if ($arr[$i] > $maxValue) {
//             $maxValue = $arr[$i];
//         }
//     }

//     $bucketCount = floor(($maxValue - $minValue) / $bucketSize) + 1;
//     $buckets = array();
//     for ($i = 0; $i < count($buckets); $i++) {
//         $buckets[$i] = [];
//     }

//     for ($i = 0; $i < count($arr); $i++) {
//         $buckets[floor(($arr[$i] - $minValue) / $bucketSize)][] = $arr[$i];
//     }

//     $arr = array();

//     for ($i = 0; $i < count($buckets); $i++) {
//         $bucketTmp = $buckets[$i];
//         sort($bucketTmp);
//         for ($j = 0; $j < count($bucketTmp); $j++) {
//             $arr[] = $bucketTmp[$j];
//         }
//     }
//     return $arr;
// }
// $arr = [52, 65, 84, 45, 32, 21, 26, 15, 89, 23, 69, 76, 36, 49, 10, 9, 16, 4, 6, 1];
// print_r(bucketSort($arr));
####################################################

/**
 * 10.基数排序
 */
####################################################
// 有问题
// function radixSort($arr, $maxDigit = null)
// {
//     if ($maxDigit === null) {
//         $maxDigit = max($arr);
//     }
//     $counter = [];
//     for ($i = 0; $i < $maxDigit; $i++) {
//         for ($j = 0; $j < count($arr); $j++) {
//             preg_match_all('/\d/', (string) $arr[$j], $matches);
//             $numArr = $matches[0];
//             $lenTmp = count($numArr);
//             $bucket = array_key_exists($lenTmp - $i - 1, $numArr)
//                 ? intval($numArr[$lenTmp - $i - 1])
//                 : 0;
//             if (!array_key_exists($bucket, $counter)) {
//                 $counter[$bucket] = [];
//             }
//             $counter[$bucket][] = $arr[$j];
//         }
//         $pos = 0;
//         for ($j = 0; $j < count($counter); $j++) {
//             $value = null;
//             if ($counter[$j] !== null) {
//                 while (($value = array_shift($counter[$j])) !== null) {
//                     $arr[$pos++] = $value;
//                 }
//             }
//         }
//     }
//     return $arr;
// }
// $arr = [52, 65, 84, 45, 32, 21, 26, 15, 89, 23, 69, 76, 36, 49, 10, 9, 16, 4, 6, 1];
// print_r(radixSort($arr));
####################################################