<?php
// Define factorial functions
function factorialIterative($n): float|int
{
    $result = 1; // starts with 1 because 0! = 1
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function factorialRecursive($n): float|int
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorialRecursive($n - 1);
}

// Initialize result variables
$iterativeResult = null;
$recursiveResult = null;

// Check if the form has been submitted via POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If the iterative form was submitted
    if (isset($_POST['number_iterative'])) {
        $number = intval($_POST['number_iterative']);
        $iterativeResult = factorialIterative($number);
    }

    // If the recursive form was submitted
    if (isset($_POST['number_recursive'])) {
        $number = intval($_POST['number_recursive']);
        $recursiveResult = factorialRecursive($number);
    }
}
?>

<section>
    <div>
        <label for="number">Enter a number for Iterative Factorial:</label>
        <form action="" method="POST">
            <input type="number" name="number_iterative" required>
            <input type="submit" value="Calculate Iterative">
        </form>
        <span class="iterative-result">
            <?php if ($iterativeResult !== null)
                echo "Iterative Result: " . $iterativeResult; ?>
        </span>
    </div>

    <div>
        <label for="number">Enter a number for Recursive Factorial:</label>
        <form action="" method="POST">
            <input type="number" name="number_recursive" required>
            <input type="submit" value="Calculate Recursive">
        </form>
        <span class="recursive-result">
            <?php if ($recursiveResult !== null)
                echo "Recursive Result: " . $recursiveResult; ?>
        </span>
    </div>
</section>