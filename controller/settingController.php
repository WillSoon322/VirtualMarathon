<?php
require_once "controller/services/mysqlDB.php";
require_once "view/view.php";

class settingController
{

    protected $db;

    public function __construct()
    {
        $this->db = new mySQLDB("localhost", "root", "", "tugasbesar");
    }

    public function viewAll()
    {
        return View::createView("setting.php", []);
    }
}
?>