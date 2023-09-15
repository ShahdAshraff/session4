<?php
// 1.	A program that calculates the average of the numbers in an array of n elements. The array is filled with random numbers.
function calculateAverage($array) {
    $sum = array_sum($array);
    $count = count($array);
    if ($count > 0) {
        $average = $sum / $count;
        return $average;
    } else {
        return 0; 
    }
}
$n = 10;
$array = [];
for ($i = 0; $i < $n; $i++) {
    $array[] = rand(1, 100);
}
$average = calculateAverage($array);
echo "Array: " . implode(', ', $array) . "\n";
echo "Average: " . $average;

//2.	A program in which an array contains 10 numbers and another array 2D of size 2x5. What is required is that the second array is dictated by the first array.
$firstArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$secondArray = [];
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $index = ($i * 5) + $j;
        $secondArray[$i][$j] = $firstArray[$index];
    }
}
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $secondArray[$i][$j] . " ";
    }
    echo "<br>";
}
/*3.	A program in which an array of a group of numbers and print the largest and smallest number
INPUT: 
$array = [ 1,10,5,2,11]
OUTPUT: 
Largest number is: 11
Smallest number is: 1 */
$array = [1, 10, 5, 2, 11];
$smallest = $array[0];
$largest = $array[0];
foreach ($array as $number) {
    if ($number < $smallest) {
        $smallest = $number;
    }

    if ($number > $largest) {
        $largest = $number;
    }
}
echo "Largest number is: " . $largest . "<br>";
echo "Smallest number is: " . $smallest . "<br>";
/*4.	The program, in which an array contains 10 numbers, and you store a number and calculates how many numbers are greater  than or equal and how many numbers are smaller  than this number inside.
INPUT: 
$array = [ 1,10,5,2,11]
$x = 3
OUTPUT: 
Numbers Smaller than (3) = 2 
Numbers Greater then (3) = 3
*/
$array = [1, 10, 5, 2, 11];
$x = 3;
$countSmaller = 0;
$countGreater = 0;

foreach ($array as $number) {
    if ($number < $x) {
        $countSmaller++;
    } elseif ($number > $x) {
        $countGreater++;
    }
}

echo "Numbers Smaller than ($x) = " . $countSmaller . "<br>";
echo "Numbers Greater than ($x) = " . $countGreater . "<br>";
/*
5.	Create a function that takes an array of names and returns an array where only the first letter of each name is capitalized.
INPUT: 
Array_of_names(["eraasoft", "backend", "group313"]) 
OUTPUT: 
 ["EraaSoft", "Backend", "Group313"] */
 function capitalizeNames($names) {
    $capitalizedNames = [];
    foreach ($names as $name) {
        $capitalizedNames[] = ucfirst($name);
    }
    return $capitalizedNames;
}

$names = ["eraasoft", "backend", "group313"];
$capitalizedNames = capitalizeNames($names);

print_r($capitalizedNames);
echo "<br>";

/*6.	Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements. Note that you must do this in-place without making a copy of the array.
INPUT: 
nums = [0,1,0,3,12] 
OUTPUT:
 nums = [1,3,12,0,0]
*/
function moveZeros(&$nums) {
    $nonZeroIndex = 0;
    $size = count($nums);
    for ($i = 0; $i < $size; $i++) {
        if ($nums[$i] != 0) {
            $nums[$nonZeroIndex] = $nums[$i];
            $nonZeroIndex++;
        }
    }
    for ($i = $nonZeroIndex; $i < $size; $i++) {
        $nums[$i] = 0;
    }
}
$nums = [0, 1, 0, 3, 12];
moveZeros($nums);
print_r($nums);
echo "<br>";
 
/*7.	Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1.
INPUT: 
$names = ["Alice", "Bob", "Charlie", "Dave"]
$names = ["Alice", "Charlie", "Dave"]
OUTPUT:
1
-1
*/
function searchForBob($names) {
    foreach ($names as $key => $name) {
        if ($name === "Bob") {
            return $key; 
        }
    }
    return -1; 
}
$names1 = ["Alice", "Bob", "Charlie", "Dave"];
$result1 = searchForBob($names1);
echo $result1; 
echo "<br>";
$names2 = ["Alice", "Charlie", "Dave"];
$result2 = searchForBob($names2);
echo $result2; 
echo "<br>";
/*8.	Create a function that takes a array of numbers and returns the second largest number.
INPUT: 
$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10]
OUTPUT:
11
*/
function findSecondLargest($numbers) {
    $largest = $numbers[0];
    $secondLargest = null;
    foreach ($numbers as $number) {
        if ($number > $largest) {
            $secondLargest = $largest;
            $largest = $number;
        } elseif ($number !== $largest && ($secondLargest === null || $number > $secondLargest)) {
            $secondLargest = $number;
        }
    }
    return $secondLargest;
}
$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = findSecondLargest($numbers);
echo $result; 
echo "<br>";
/*9.	A program containing an array of different numbers and store a number $x If the number is not in the array prints not found and if it exists prints found and prints this number characteristics like
●	Positive or Negative 
●	How many digits are in this number 
●	Is-Prime or not. 
●	odd or even
●	read from the right as the left or not such as "505"
INPUT: 
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140] $ x = 545
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140] $ x = 1000
OUTPUT:
Found, Positive, not prime, odd , Yes 🡺 read from the right as the left
*/
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x = 545;
if (in_array($x, $numbers)) {
    echo "Found, ";

    if ($x >= 0) {
        echo "Positive, ";
    } else {
        echo "Negative, ";
    }

    $digitCount = strlen((string)$x);
    echo "{$digitCount} digits, ";

    $isPrime = isPrime($x);
    if ($isPrime) {
        echo "Prime, ";
    } else {
        echo "Not prime, ";
    }

    if ($x % 2 == 0) {
        echo "even, ";
    } else {
        echo "odd, ";
    }

    if (isPalindrome($x)) {
        echo "Yes (read from the right as the left)";
    } else {
        echo "No (does not read the same from the right as the left)";
    }
} else {
    echo "Not found";
}
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}
function isPalindrome($num)
{
    $reverse = strrev((string)$num);
    return $num == $reverse;
}






