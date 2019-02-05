<?php
/*
+---+
| 1 |
+---+
Declare variable named redLight and
assign it with the value true.
*/

$redLight = true;
/*
Use "if" statement to check if the red light is on,
if so, print "Stop the car!".
*/
echo "<strong>If Statement</strong>" . "<br>";

if ($redLight == true) {
    echo "Stop the car!" . "<br>";
}
echo "<br>";

/*
If the red light is on, use ternary operator to print "Stop the car!" as a paragraph.
*/
echo "<strong>Ternary Operator</strong>" . "<br>";

echo ($redLight == true) ? "Stop the car!" : "Keep driving";

echo "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Reassign redLight with the value false.
*/

$redLight = false;
/*
Use if/else statement to check if the red light is on,
if so, print "Stop the car!", otherwise print "Are you sure that yellow light is not on?".
*/

if ($redLight == true) {
    echo "Stop the car!" . "<br>";
} else {
    echo "Are you sure that yellow light is not on?" . "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare variable named yellowLight and
assign it with the value false.
*/
$yellowLight = false;

/*
Use if/else statement to check if the red or yellow light is on,
if so, print "Stop the car!", otherwise print "Are you sure that traffic lights are working at all?".
*/

if ($yellowLight == true) {
    echo "Stop the car!" . "<br>";
} else {
    echo "Are you sure that traffic lights are working at all?" . "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare variable named greenLight and
assign it with the value false.
*/
$greenLight = false;

/*
Use if/else-if/else statement.


Check if the red or yellow light is on, and the green light is off,
if so, print "Stop the car!".


Next, check if the red and yellow and green light is off,
In this case, print "Power outage!".

Next, check if the red and yellow light is off, and the green light is on.
In this case, print "Keep moving!";

Next, check if the red or yellow light is on, and the green light is on too.
In this case, print "Traffic lights are messed up!".

In any other case, print "Use the common sense and stay safe!".
*/


if ($redLight == true || $yellowLight == true) {
    echo "Stop the car!" . "<br>";
} else if ($redLight == false && $yellowLight == false) {
    echo "Power outage!" . "<br>";
} else if ($redLight == false && $yellowLight == false && $greenLight == true) {
    echo "Keep Moving" . "<br>";
} else if ($redLight == true || $yellowLight == true && $greenLight == true) {
    echo "Traffic lights are messed up!" . "<br>";
} else {
    echo "Use your common sense and stay safe!" . "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

///*
//+---+
//| 5 |
//+---+
//Handle the problem from the task 4 with switch-statement!
//The referencial value will be true.
//*/
//
//


switch (true) {
    case ($redLight || $yellowLight):
        echo "Stop the car!" . "<br>";
        break;
    case !$redLight && !$yellowLight:
        echo "Power outage!" . "<br>";
        break;
    case !$redLight && !$yellowLight && $greenLight:
        echo "Keep Moving" . "<br>";
        break;
    case $redLight || $yellowLight && $greenLight:
        echo "Traffic lights are messed up!" . "<br>";
        break;
    default: echo "Use your common sense and stay safe!" . "<br>";

}