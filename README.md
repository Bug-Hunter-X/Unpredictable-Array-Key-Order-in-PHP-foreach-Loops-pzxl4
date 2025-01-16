# Unpredictable Array Key Order in PHP foreach Loops

This repository demonstrates a subtle yet common bug in PHP related to the order of keys in arrays when using `foreach` loops.  When you add array elements without explicitly defining the keys in a specific order, the order might not be preserved as expected, leading to unpredictable results.

The `bug.php` file showcases the problem, and `bugSolution.php` provides a solution to ensure consistent key order.