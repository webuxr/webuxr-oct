<?php 
class Cms5cb7fffabbf5f597972121_5cac3ebf8e54022ce854acca9c34c2daClass extends Cms\Classes\PageCode
{
public function onStart() {
  $filename = $this->param('filename', 'welcome');

  if ($filename !== 'welcome') {
    return Redirect::to('/404');
  }

  $this['filename'] = $filename;
}
}
