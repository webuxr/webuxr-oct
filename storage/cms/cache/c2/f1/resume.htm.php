<?php 
class Cms5cbe7936c751e314796039_391adae224e854371fc403186f3231c8Class extends Cms\Classes\PageCode
{
public function onStart() {
  $filename = $this->param('filename', 'resume');

  if ($filename !== 'resume') {
    return Redirect::to('/404');
  }

  $this['filename'] = $filename;
}
}
