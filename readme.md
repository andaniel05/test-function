## Andaniel05 Test Function

Custom wrapper(`_test`) for the test function of PestPHP based on [https://github.com/andaniel05/undescribed-tests](https://github.com/andaniel05/undescribed-tests).

## Installation

```bash
composer require andaniel05/test-function
```

Example:

```php
_test(function () {
    expect(true)->toBe(true);
});
```