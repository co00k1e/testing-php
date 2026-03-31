# PHPUnit — Testing 

Learning PHPUnit for automated testing. How to run the examples and notes on common patterns to reference from.

## How to run tests

- Install PHPUnit as a dev dependency (recommended):

  composer require --dev phpunit/phpunit

- Running tests:

  ./vendor/bin/phpunit [tests/path]


### Test file layout and naming

- Tests live under `tests/`.
- Files/classes should be named `SomethingTest.php` and test classes `SomethingTest` to match.
- Each test file will extend on the `PHPUnit\Framework\TestCase`.

### Common assertions

- assertSame(expected, actual) — strict type and value equality
- assertEquals(expected, actual) — loose equality
- assertTrue / assertFalse
- assertNull / assertNotNull
- assertCount(expected, array)
- assertInstanceOf(Class::class, $obj)
- assertStringContainsString(substr, string)

### Basic code standards

- Keep tests small and focused (one assertion intent per test when possible).
- `assertSame` for primitives to avoid type-coercion.
- Use `setUp` to reduce duplication, but avoid hiding important setup in multiple layers.

### Fixtures: setUp / tearDown

- Use the `setUp()` method to create fixtures used by many tests and `tearDown()` to clean up.

```php
protected function setUp(): void
{
    // runs before each test
}

protected function tearDown(): void
{
    // runs after each test
}
```

### Grouping tests

- Add `@group name` to tests and run with `--group name` to run only that group, see `phpunit.xml.dist` excluding the group named excluded.

### Tests total not matching

- If PHPUnit cannot find your classes, ensure Composer autoload is configured and run `composer dump-autoload`.

### Offical Docs
- https://phpunit.de/documentation.html
