<?php 
class Cms5d22077dac62f588400228_e8ba3b5b3d0ccffbc192cf089689eedfClass extends Cms\Classes\PageCode
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
