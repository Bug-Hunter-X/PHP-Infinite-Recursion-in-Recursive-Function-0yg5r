```php
function processData(array $data): array {
  // ... some code to process data ...
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call, potential for infinite loop
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result);
```