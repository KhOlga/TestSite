<?php

class SiteController
{

    public function actionIndex()
    {
        $categories = Category::getCategoriesList();

        require_once(ROOT.DS.'views'.DS.'site'.DS.'index.phtml');
        return true;
    }




}