--TEST--
TestDox: Diff
--XFAIL--
TestDox logging has not been migrated to events yet.
See https://github.com/sebastianbergmann/phpunit/issues/5040 for details.
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-progress';
$_SERVER['argv'][] = '--testdox';
$_SERVER['argv'][] = '--colors=never';
$_SERVER['argv'][] = __DIR__ . '/_files/DiffTest.php';

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Diff (PHPUnit\TestFixture\TestDox\Diff)
 ✘ Something that does not work
   │
   │ Failed asserting that two strings are equal.
   │ --- Expected
   │ +++ Actual
   │ @@ @@
   │  'foo\n
   │ +baz\n
   │  bar\n
   │ -baz\n
   │  '
   │
   │ %sDiffTest.php:%d
   │

Time: %s, Memory: %s

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
