<?php
namespace app\classes;


class Mmenu
{
    public function prepareMenu()
    {
        $sql = "SELECT id, menu_name,blog FROM pages";

        $result = Db::getInstance()->read($sql);
        return $result;
    }


}