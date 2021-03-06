--TEST--
MongoDB\BSON\Timestamp::__set_state() requires positive unsigned 32-bit integers
--FILE--
<?php
require_once __DIR__ . "/utils.inc";

echo throws(function() {
    MongoDB\BSON\Timestamp::__set_state(['increment' => -1, 'timestamp' => 5678]);
}, 'MongoDB\Driver\Exception\InvalidArgumentException'), "\n";

echo throws(function() {
    MongoDB\BSON\Timestamp::__set_state(['increment' => -2147483648, 'timestamp' => 5678]);
}, 'MongoDB\Driver\Exception\InvalidArgumentException'), "\n";

echo throws(function() {
    MongoDB\BSON\Timestamp::__set_state(['increment' => 1234, 'timestamp' => -1]);
}, 'MongoDB\Driver\Exception\InvalidArgumentException'), "\n";

echo throws(function() {
    MongoDB\BSON\Timestamp::__set_state(['increment' => 1234, 'timestamp' => -2147483648]);
}, 'MongoDB\Driver\Exception\InvalidArgumentException'), "\n";

?>
--EXPECT--
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
Expected increment to be an unsigned 32-bit integer, -1 given
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
Expected increment to be an unsigned 32-bit integer, -2147483648 given
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
Expected timestamp to be an unsigned 32-bit integer, -1 given
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
Expected timestamp to be an unsigned 32-bit integer, -2147483648 given
