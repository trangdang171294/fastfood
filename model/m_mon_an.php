
<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/23/2017
 * Time: 10:09 AM
 */

//require_once ("database.php");

class M_mon_an extends database
{
    public function Doc_mon_an()
    {
        $sql = "select * from mon_an";
        $this -> setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_mon_an_theo_ma($Ma_mon_an)
    {
        $sql = "select * from mon_an where Ma_mon_an=? ";
        $this->setQuery($sql);
        $param= array($Ma_mon_an);
        return $this->loadRow($param);
    }
}
/*
$mon_an= new M_mon_an();
echo count($mon_an->Doc_mon_an()); */
