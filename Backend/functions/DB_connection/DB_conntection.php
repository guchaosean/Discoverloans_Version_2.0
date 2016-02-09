<?php
class db_operation{
	      private $servername;	
	      private $username;
          private $password;
          private $dbname;
		  private $conn;
		  private $sql;
		  public $result;
	      public function __construct($servername,$username,$password,$dbname,$sql) {  
                 $this->servername=$servername;  
                 $this->username=$username;  
				 $this->password=$password;  
                 $this->dbname=$dbname;  				  
				 $this->sql=$sql;  
          }  
          public function DB_connection(){ 
           
			 $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
             if ($this->conn->connect_error) {
                     die("Connection failed: " . $this->conn->connect_error);
             }
         
          $this->result = $this->conn->query($this->sql);		
         		  
          }
		  
 	  
		  public function DB_disconnection(){
               $this->conn->close();
          }
}
?>