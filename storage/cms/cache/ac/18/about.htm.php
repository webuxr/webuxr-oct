<?php 
class Cms5cb4fd123ebaa213186399_de46eea9552f8fb11bca755d05ce793cClass extends Cms\Classes\PageCode
{
public function onStart() {
  $filename = $this->param('filename', 'welcome');

  if ($filename !== 'welcome') {
    return Redirect::to('/404');
  }

  $this['filename'] = $filename;
}
}
