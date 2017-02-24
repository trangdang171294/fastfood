<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 10/13/2016
 * Time: 10:49 AM
 */
/*Tạo lớp Database thực hiện việc kết nối với cơ sở dữ liệu và thực hiện một số thao tác:
         -Kết nối vs cơ sở dữ liệu
         - thực hiện các truy vấn
         -Lấy dữ liệu và trả dữ liệu về dưới dạng mảng hoặc đối tượng
*/

class Database
{
    var $conn = ""; // biến để lưu đối tượng PDO sau khi đã kết nôi với csdl
    var $sql = ""; // biến lưu trữ câu truy vấn khi thao tác vs csdl
    var $preStm = ""; // PreparedStatement Object

    var $rowCount = 0;
    var $pageSize = 0; //biến lưu trữ số lượng bản ghi trong một trang(số dòng trong một trang, nếu ko có thì là ko phân trang)
    var $pageCount = 1; // cho biết số trang dữ liệu

    // khai báo contructor

    public function __construct($hostname = "localhost", $dbname = "cooking", $user = "root", $pass = "root")
    {
        try {
            $this->conn = new PDO("mysql:host=$hostname; dbname=$dbname; charset=utf8","$user","$pass");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            exit(" Not connect to data base");
        }
    }

    /*
     * Phương thức setQuery:
     * Mô tả: Phương thức nhận vào một câu lệnh truy vấn và thực thi qua tham số và lưu câu truy vấn vào biến $this->sql
     * Tham số :
     * $sql: nhận vào một chuỗi lệnh truy vấn tới csdl
    */
    public function setQuery($sql){
        $this->sql = $sql;
    }

    /*
     * Phương thức execute:
     * thực thi câu lệnh truy vấn và trả về kết quả
     * Tham số $option : tham số nhận vào một giá trị là mảng
     * Các giá trị mảng này được dùng để truyền cho các vị trí tham số trong câu truy vấn
     * Trả về : phương thức trả về một đối tượng PDO statement là cusor chứa dữ liệu

    */
    public function execute($options = array())
    {
        $this->rowCount = 0;
        try {
            $this->preStm = $this->conn->prepare($this->sql);
            $this->preStm->execute($options);
            return $this->preStm;
        } catch (PDOException $e) {
            return false; // trả về false nếu có lỗi xảy ra
        }

    }

    /*
     * Phương thức loadAllRow:
     * Trả về tất cả các dòng có trong csdl khi ta truy vấn
     * Tham số $option : tham số nhận vào một giá trị là mảng
      * Các giá trị mảng này được dùng để truyền cho các vị trí tham số trong câu truy vấn
     * Phương thức trả về một mảng dưới dạng đối tượng
     *

    */

    public function loadAllRows($options = array())
    {
        if (!$options) {
            if (!$preStm = $this->execute())
                return false;
        }
        else{
            if(!$preStm =$this->execute($options))
                return false;
        }
        $result = $preStm->fetchAll(PDO::FETCH_OBJ);
        $this->rowCount =count($result); // lưu tổng số dòng lấy được
        return $result;

    }

    /*phuong thuc thuc hien lay 1 ket qua*/
    public  function loadRow($options= array()){
        if(!$options){
            if(!$result= $this->execute())
                return false;
        }
        else{
            if(!$result= $this->execute($options))
                return false;
        }
        $result = $this->preStm->fetch(PDO::FETCH_OBJ);
        $this->rowCount =count($result); // lưu dòng lấy được
        return $result;
    }
    /*
     * Phương thức getLastId lấy id ở cột Auto Increment  được cấp cho dòng khi thực hiện Insert
     * trả về Id lấy được khi thực hiện truy vấn
    */

    public  function  getLassId(){
        return $this->getLassId();
    }

}