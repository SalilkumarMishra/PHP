<?php
$questions = [
    "What is the capital of France?" => ["Paris", "London", "Berlin", "Madrid"],
    "Which language is used for web development?" => ["PHP", "C++", "Java", "Python"],
    "What is 5 + 3?" => ["6", "7", "8", "9"]
];

$correct_answers = ["Paris", "PHP", "8"];

function generateQuiz($questions) {
    echo '<form method="post">';
    $i = 0;
    foreach ($questions as $question => $options) {
        echo "<p>$question</p>";
        foreach ($options as $option) {
            echo "<input type='radio' name='answer$i' value='$option'> $option<br>";
        }
        $i++;
    }
    echo '<br><input type="submit" name="submit" value="Submit">';
    echo '</form>';
}

function evaluateQuiz($questions, $correct_answers) {
    $score = 0;
    $i = 0;
    foreach ($questions as $question => $options) {
        if (isset($_POST["answer$i"]) && $_POST["answer$i"] == $correct_answers[$i]) {
            $score++;
        }
        $i++;
    }
    return $score;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Quiz</title>
</head>
<body>
    <h2>Simple PHP Quiz</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = evaluateQuiz($questions, $correct_answers);
        echo "<p>Your score: $score / " . count($questions) . "</p>";
    }
    generateQuiz($questions);
    ?>
</body>
</html>