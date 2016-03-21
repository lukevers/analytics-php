<?php

  require_once("../lib/Segment.php");

  class_alias('Segment', 'Analytics');

  Segment::init("3ZjD3733TzAJYNhxJLeY9OXwVZepGuDW", array(
    "consumer"       => "lib_curl",
    "debug"          => false,
    "max_queue_size" => 10000,
    "batch_size"     => 100
));

  Analytics::track( array(
      'userId' => '12345',
      'event' => 'Sign Up',
      'properties' => array(
      'email' => 'email',
      'User Id' => 'id',
      'Method Used' => 'signed up'
      ),
    'context' => array()
  ) );

 ?>
