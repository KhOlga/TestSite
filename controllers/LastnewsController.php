<?php

include_once ROOT.DS.'models'.DS.'Lastnews.php';
class LastnewsController
{
    public function actionIndex()
    {
        $lastNews = array();
        $lastNews = Lastnews::getLastNews();
        require_once(ROOT . DS . 'views' . DS . 'lastnews' . DS . 'lastnews.phtml');
        return true;
    }


    public function actionView($newsId)
    {
        $categories = Category::getCategoriesList();

        $result = Lastnews::getLastnewById($newsId);


        require_once(ROOT .DS.'views'.DS.'lastnews'.DS.'one_lastnew.phtml');
        return true;
    }

}