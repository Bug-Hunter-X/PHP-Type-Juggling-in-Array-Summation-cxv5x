```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4']; // Notice the string '4'
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //This will produce unexpected result
```