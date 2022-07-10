<?php 

class connected{
    protected $dbh;
    protected function connection(){
        try {
          $connect = $this->dbh = new PDO("mysql:local=localhost;dbname=crub_mvc", "root","");
          return $connect;
        } catch (Exception $e) {
            print "¡Error DB!: " .$e->getMessage() . "<br/>";
           die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

}

?>