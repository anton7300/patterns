<?php

class Test
{
  private $di;

  private $config;

  public function __constructor(DI $di)
  {
    $this->di = $di;
    $this->config = $di->get('config');
  }

  public function test()
  {
    echo 'Вызов метода!';
  }
}
