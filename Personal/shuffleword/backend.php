<?php
// Tell the browser to expect a JSON response
header('Content-Type: application/json');

// Helper function to calculate a factorial
function getFactorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

if (isset($_GET['word']) && $_GET['word'] != "") {
    
    // Clean up the input (remove spaces, make uppercase)
    $word = strtoupper(trim($_GET['word']));
    
    // 1. Calculate the numerator (Total letters factorial)
    $length = strlen($word);
    $numerator = getFactorial($length);

    // 2. Count the frequency of each letter
    // str_split breaks the word into an array: ['H', 'E', 'L', 'L', 'O']
    // array_count_values counts duplicates: ['H'=>1, 'E'=>1, 'L'=>2, 'O'=>1]
    $letterCounts = array_count_values(str_split($word));

    // 3. Calculate the denominator (Multiply the factorials of the duplicates)
    $denominator = 1;
    foreach ($letterCounts as $letter => $count) {
        if ($count > 1) {
            $denominator *= getFactorial($count);
        }
    }

    // 4. Calculate the true unique combinations
    $combinations = $numerator / $denominator;

    // PHP has a built-in function to randomly shuffle a string!
    $shuffled = str_shuffle($word);

    // Send the results back to the frontend
    echo json_encode([
        "error" => false,
        "original" => $word,
        "shuffled" => $shuffled,
        "combinations" => $combinations
    ]);

} else {
    echo json_encode(["error" => "Please enter a word."]);
}
?>