<?php

class Lastnews
{
    const SHOW_BY_DEFAULT = 30;
    public $lastNews;
    public $result;
    public $newsListByCategory;

    public static function getLastNews($count = self::SHOW_BY_DEFAULT)
    {

        $db = Db::getConnection();

        $lastNews = array();

        $result = $db->query('SELECT `id`, `title`, `date`, `image`, `short_content` FROM `news` WHERE `last_new` = "1" ORDER BY date DESC LIMIT '. $count);

        $result->bindParam(':count', $count, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        $i = 0;
        while ($row = $result->fetch()) {
            $lastNews[$i]['id'] = $row['id'];
            $lastNews[$i]['title'] = $row['title'];
            $lastNews[$i]['date'] = $row['date'];
            $lastNews[$i]['image'] = $row['image'];
            $lastNews[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $lastNews;
    }


    public static function getLastnewById($id)
    {
        $id = intval($id);
        $db = Db::getConnection();

        $sql = 'SELECT * FROM `news` WHERE `last_new` = "1" AND id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }


}