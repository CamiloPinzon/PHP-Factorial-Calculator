# PHP Factorial Calculator

This project is a simple PHP application that calculates the factorial of a number using both **iterative** and **recursive** approaches. It includes two forms where users can input a number to calculate its factorial using either method.

## Features

- **Iterative Factorial Calculation**: Uses a loop to calculate the factorial.
- **Recursive Factorial Calculation**: Uses recursion to calculate the factorial.
- Accepts user input from forms to perform calculations dynamically.

## Technologies Used

- **PHP**: Core programming language.
- **HTML**: For creating the form interface.

## Prerequisites

Before running this project, ensure you have:

- A PHP environment installed (e.g., [XAMPP](https://www.apachefriends.org/index.html), [MAMP](https://www.mamp.info/en/)).
- A web browser.

## Code Explanation

### Factorial Functions

#### Iterative Approach

```php
function factorialIterative($n): float|int
{
    $result = 1; 
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
```

- This function starts from 1 and loops until `n`, multiplying the result by each number from 1 to `n`.

#### Recursive Approach

```php
function factorialRecursive($n): float|int
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorialRecursive($n - 1);
}
```

- This function calls itself recursively, reducing the value of `n` by 1 until it reaches the base case (n = 0), at which point it returns 1.

### HTML Forms

```html
<form action="" method="POST">
    <input type="number" name="number_iterative" required>
    <input type="submit" value="Calculate Iterative">
</form>
```

- Two forms are provided, one for calculating the factorial iteratively and one recursively.

## Example Output

- For input `5`, the iterative and recursive functions will return `120` because `5! = 5 × 4 × 3 × 2 × 1 = 120`.

## License

This project is open-source and free to use.