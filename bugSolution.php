The solution involves being explicit in how you handle array keys in PHP.  Instead of relying on implicit numeric indices, explicitly define and check for keys.  Here's the corrected code:

```php
<?php
$myArray = [];
$myArray["key1"] = "value1";
$myArray[1] = "value2";

//Explicitly check if the key exists before accessing it
if (array_key_exists(0, $myArray)) {
    echo $myArray[0];
} else {
    echo "Key 0 does not exist";
}

//Alternative way to iterate to avoid undefined index issues
foreach (array_keys($myArray) as $key) {
  echo "Key: " . $key . ", Value: " . $myArray[$key] . "\n";
}
?>
```

For the second example, you should explicitly check for the existence of a key:
```php
$data = ['a' => 1, 'b' => 2];
foreach ($data as $key => $value) {
    if (array_key_exists('c', $data)) {
        echo "Key 'c' found";
    } else {
      echo "Key 'c' not found";
    }
}
```
This approach ensures robust handling of array keys and prevents undefined index errors or skipped logic within loops.