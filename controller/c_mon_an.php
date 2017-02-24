
<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/23/2017
 * Time: 10:50 AM
 */

//include_once("../model/m_mon_an.php");
class C_mon_an
{
    public $MonanController;

    public function __construct()
    {
        $this->MonanController = new M_mon_an();
    }
    public function Hien_thi_mon_an()
    {
        $mon_an = $this->MonanController->Doc_mon_an();
        include_once ("site/product_burger.php");// view ma include trong controller r thi ko include trong index nua, dm kho >.<

    }
}
?>