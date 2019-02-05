<style>
    th, td {
        padding: 5px;
        text-align: left;
    }

</style>


<?php


/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food
(at least 4 array elements). Name the array food.
*/

$food = ["Gelato", "Burgers", "Caesar Salad", "Tacos"];
/*
Print every array element in a new line.
*/
echo "My Favorite Foods: " . "<br>";
echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
        <li>{$food[0]}</li>
        <li>{$food[1]}</li>
        <li>{$food[2]}</li>
        <li>{$food[3]}</li>
      </ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc.
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [];

$food_assoc = [
    "Gelato" => "Dessert",
    "Burgers" => "Main Course",
    "Caesar Salad" => "Salad",
    "Tacos" => "Main Course",
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse
cheesesake | desert
*/


foreach ($food_assoc as $key => $value) {
    echo "$key | $value" . "<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...)
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake:
    type:desert
    origin: Greece

So, food_assoc is still going to be an associative array.
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself
and carries the information about the type and origin
*/

$food_assoc = [

    "Gelato" => [
        "Type" => "Dessert",
        "Origin" => "Italy"
    ],

    "Burger" => [
        "Type" => "Main Course",
        "Origin" => "USA"
    ],

    "Caesar" => [
        "Type" => "Salad",
        "Origin" => "Mexico"
    ],

    "Taco" => [
        "Type" => "Main Course",
        "Origin" => "Mexico"
    ]
];


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main course | Italy
cheesesake | desert | Greece
*/

foreach ($food_assoc as $key => $value) {

    echo $key . " | " . $value["Type"] . " | " . $value["Origin"] . "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
*/
echo "<table>";

echo "<tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>";

foreach ($food_assoc as $key => $value) {
    echo "<tr>";

    echo "<td>{$key}</td>";

    foreach ($food_assoc[$key] as $k => $v) {
        echo "<td>{$v}</td>";
    }
    echo "</tr>";
}

echo "</table>";

