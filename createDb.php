<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
		public $tablename2;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "camine",
        $tablename = "camin",
		$tablename2="camera",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->tablename2 = $tablename2;
      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             Nume VARCHAR (50) NOT NULL,
							 Facultatea VARCHAR (50) NOT NULL,
							 Adresa VARCHAR (50) NOT NULL,
							 Localitatea VARCHAR (50) NOT NULL,
							 Judet VARCHAR (50) NOT NULL
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
			
			

        }else{
            return false;
        }
    }

    // get product from the database
    public function getData($id,$etaj){
        $sql = "SELECT SUM($this->tablename2.Locuri_ocupate) AS 'SUMA' ,SUM($this->tablename2.Locuri_max) AS 'SUMA1', $this->tablename2.Etaj    FROM $this->tablename2 INNER JOIN $this->tablename ON $this->tablename.ID_Camin=$this->tablename2.ID_Camin  WHERE $this->tablename.ID_Camin=$id AND $this->tablename2.Etaj=$etaj";
        
        $result = mysqli_query($this->con, $sql);
		 
        
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}






