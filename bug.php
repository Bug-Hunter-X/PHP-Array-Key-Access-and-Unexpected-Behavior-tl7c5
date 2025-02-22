In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this example:

```php
$myArray = [];
$myArray["key1"] = "value1";
$myArray[1] = "value2";

echo $myArray[0]; // Notice the access of index 0
```

Accessing `$myArray[0]` will produce an unexpected result.  Because PHP arrays are ordered hashmaps, the numeric index 0 will not exist, resulting in an undefined index notice or an empty string. The keys are "key1" and 1, not numerical indices 0 and 1.

Another example: 
```php
$data = ['a' => 1, 'b' => 2];
foreach ($data as $key => $value) {
    if ($key == 'c') {
        echo "Key 'c' found";
    }
}
```
This code might unexpectedly skip the logic block. The foreach loop will iterate over existing keys 'a' and 'b', not checking for the absence of 'c'.