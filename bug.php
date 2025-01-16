In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this scenario: 

```php
$myArray = [];
$myArray["someKey"] = "someValue";
$myArray[1] = "anotherValue";

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

You might expect this to print:

`Key: someKey, Value: someValue
Key: 1, Value: anotherValue`

However, because PHP arrays are ordered hash tables, the output will be unpredictable and might vary with the order in which keys are added.  There's no guarantee 'someKey' will be before 1.

This unpredictability leads to bugs that are difficult to diagnose and fix, especially in larger codebases.