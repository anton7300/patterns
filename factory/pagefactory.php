<?php

class PageFactory
{
  public function getPage($type)
  {
    switch ($type) {
      case 'pdf'; return new Pdf;
      case 'txt'; return new Txt;
      default: throw new Exception('Error type');
    }
  }
}
