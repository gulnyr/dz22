<?php

require_once __DIR__ . '/../model/news.php';

class NewsController {

    public function actionAll() {
        $items = News::getAll();
        include __DIR__ . '/../view/news/all.php';
    }

    public function actionOne() {
        echo 'act';
        die;
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../view/news/one.php';
    }

}