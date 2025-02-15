<?php
echo "Hello, PHP" . "<br>";

$name = "Taro";
$age = 25;

echo "名前: " . $name . "<br>";
echo "年齢: " . $age . "歳" . "<br>";

function greet(string $name): string {
    return "こんにちは, " . $name . " さん!" . "<br>";
}
echo greet("Taro");

const score = 90;

if (score >= 90) {
    echo "評価: A";
} elseif (score >= 70) {
    echo "評価: B";
} else {
    echo "評価: C";
}
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "カウント: " . $i . "<br>";
}

$count = 1;
while ($count <= 3) {
    echo "現在のカウント: " . $count . "<br>";
    $count++;
}

$fruit = ["りんご", "バナナ", "オレンジ"];

echo $fruit[0];
$user = [
    "name" => "Taro",
    "age" => 25,
];

echo "名前: " . $user["name"] . "<br>";

$file = "example.txt";
$content = "Hello PHP";

file_put_contents($file, $content);

$content = file_get_contents($file);

echo $content . "<br>";
