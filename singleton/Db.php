<?php

class Db
{
  private static $_db = null;

  public static function getInstance()
  {
    if (self::$_db === null) {
      self::$_db = new PDO('.........');
    }

    return self::$_db;
  }
}
