<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 7:49 PM
 */
class VideoModel extends Database
{
    /*load all video in database*/
    public function getAllVideoBackend(){
        $sql ="SELECT * FROM video";
        $this->setQuery($sql);
       return $this->loadAllRows();
    }

}