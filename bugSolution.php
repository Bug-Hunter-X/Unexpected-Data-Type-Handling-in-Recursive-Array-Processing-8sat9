function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      // Handle null values appropriately, e.g., log a warning or use a default value.
      error_log('Null value encountered in array.');
    } else if (is_string($value)) {
      // Process strings
    } else if (is_array($value)) {
      // Recursively process nested arrays
      foo($value);
    } else if (is_numeric($value)) {
      // Process numbers
    } else if (is_object($value)) {
        // Handle objects gracefully, if needed.
        // You might cast it to a specific type, or log a warning.
        error_log("Object encountered in array: " . get_class($value));
    } else {
      // Handle unexpected data types more gracefully
      // Instead of throwing an exception, consider logging a warning or using a default value
      error_log('Unexpected data type encountered in array: ' . gettype($value));
    }
  }
}
//Example usage
$arr = [1,2,"string", null, [4,5, "Nested string"], new 
stdClass()];
foo($arr);