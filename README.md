# phpunit9-coverage-bug
Reproduction of phpunit 9.0 coverage bug

XDebug: 2.9.2

```sh
composer install
php vendor/bin/phpunit --coverage-text
```

Expected: Lines 0/0  
Actual: Lines 0/3
