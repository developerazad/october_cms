<?php 
class Cms5d235eda8b7a3014372175_9cb3f0a89cae942c51ff81194effb584Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
