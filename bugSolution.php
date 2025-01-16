To solve this issue, always ensure you explicitly define your array keys in the desired order:

```php
$myArray = [
    "someKey" => "someValue",
    1 => "anotherValue"
];

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

This guarantees consistent output because the key order is now explicitly specified. Alternatively, if you need numeric keys, use `array_values()` to reset keys to numerical indices, ensuring consistent numerical order.

```php
$myArray = ["someValue", "anotherValue", "thirdValue"];
$myArray = array_values($myArray);

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

By using these methods you will avoid any unexpected results from your PHP code.