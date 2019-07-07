<?php 
class Cms5d21fe98ba4ab563546172_b5b7b754908abb8042bfcb8713c581faClass extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
