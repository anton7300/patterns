<?php

final class Init
{
  private $di;

  private $test;

  public function __constructor(DI $di)
  {
    $this->di = $di;
    $this->test = $di->get('test');
  }

  public function get()
  {
    return $this->test->test();
  }
}
