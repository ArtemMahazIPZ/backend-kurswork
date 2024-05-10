<?php

namespace models;

class News
{
    public $id;
    public $title;
    public $text;
    public $short_text;
    public $date;
    public function __construct()
    {

    }
}
$news = new News();
$news->text='asd';
$news->title='asd';
$news->short_text='asd';
$news->date='asd';
