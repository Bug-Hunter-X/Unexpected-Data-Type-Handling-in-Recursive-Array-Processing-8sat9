function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      // Handle null values
    } else if (is_string($value)) {
      // Process strings
    } else if (is_array($value)) {
        //Process nested array
        foo($value);
    } else if (is_numeric($value)) {
      // Process numbers
    } else {
      // Handle unexpected data types
      throw new InvalidArgumentException("Invalid data type in array: " . gettype($value));
    }
  }
}