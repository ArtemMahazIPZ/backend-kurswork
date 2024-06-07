<?php

namespace controllers;

use core\Controller;
use core\Core;
use core\Template;
use models\News;

class NewsController extends Controller
{
    public function actionAdd()
    {
        return $this->render();
    }

    public function actionIndex()
    {
        $news = new News();
        $news->id = 1;
        $news->title = '!! news !!';
        $news->text = '!! text !!';
        $news->short_text = '!! short_text !!';
        $news->date = '2024-06-03 13:30:54';
        $news->save();

        $db = Core::get()->db;

        $db->update('news', [
            'title' => 'new title'
        ], [
            'id' => 3
        ]);

        return $this->render();
    }

    public function actionView($params)
    {
        return $this->render();
    }
}
