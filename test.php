<?php
$conn = new mysqli("localhost", "root", "", "bahraini_food");

$result = $conn->query("SELECT * FROM recipes WHERE id = 1");

$row = $result->fetch_assoc();

echo "<h1>" . $row['name'] . "</h1>";
echo "<h2>" . $row['name_ar'] . "</h2>";
echo "<p>" . $row['description'] . "</p>";

echo "<h3>Ingredients</h3>";
$ingredients = json_decode($row['ingredients'], true);

foreach($ingredients as $ingredient){
    echo "<li>$ingredient</li>";
}

echo "<h3>Instructions</h3>";
$steps = json_decode($row['instructions'], true);

foreach($steps as $step){
    echo "<p>$step</p>";
}
?>