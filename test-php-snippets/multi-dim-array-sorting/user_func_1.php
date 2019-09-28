<?php

require_once('arrays.php');

// Refactor code from book PHP Advanced OOP: Visual QuickPro Guide, Safaribooks
// to use anonymous function

usort($a, function($b,$c) {
  // a descending (in value) sort
  return $b['key1'] <=> $c['key1'];
});

var_export($a);

usort($a, function($b, $c) {
  // reverses the order of the sort: ascending
  return $c['key1'] <=> $b['key1'];
});

var_export($a);
 ?>
