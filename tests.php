<?php
require_once("src/Encrypt.php");

use POGOEncrypt\Encrypt;

$tests = json_decode(file_get_contents("testdata.json"), true);
$failed = [];
foreach ($tests as $i => $test) {
  $iv = base64_decode($test['iv'], true);
  $input = base64_decode($test['input'], true);
  $output = $test['output'];
  $encrypted = Encrypt::encrypt($input, $iv);
  if ($output != base64_encode($encrypted)) {
    $failed[] = $i;
  }
}

if (!count($failed)) {
  echo "All tests passed! Congratulations\n";
}
else {
  echo "Unfortunately, ".count($failed)." tests failed: ".implode(", ", $failed)."\n";
}