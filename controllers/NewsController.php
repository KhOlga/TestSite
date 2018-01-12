<?php

include_once ROOT.DS.'models'.DS.'News.php';
class NewsController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();
        require_once(ROOT . DS . 'views' . DS . 'news' . DS . 'all_news.phtml');
        return true;
    }

    public function actionView($id)
    {
        if ($id){
            $newsItem = News::getNewsItemById($id);

            require_once(ROOT . DS . 'views' . DS . 'news' . DS . 'one_new.phtml');
        }
        return true;
    }
}