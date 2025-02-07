```php
function processData(array $data): array {
  // Base case to prevent infinite recursion
  if (empty($data)) {
    return [];
  }

  // ... some code to process data ...
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call with base case
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result);
```