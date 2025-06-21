<!-- 
Game Rules:
Two players roll a 6-sided die.
The player with the higher roll wins.
If both rolls are same, it's a tie.
Use PHP operators to determine the winner. -->
<?php
function rollDie() {
    return rand(1, 6); 
}

$player1_roll = rollDie();
$player2_roll = rollDie();

if ($player1_roll > $player2_roll) {
    $winner = "Player 1";
} elseif ($player2_roll > $player1_roll) {
    $winner = "Player 2";
} else {
    $winner = "It's a tie";
}

echo "Player 1 rolled: $player1_roll<br>";
echo "Player 2 rolled: $player2_roll<br>";
echo "Result: $winner wins!";
?>
