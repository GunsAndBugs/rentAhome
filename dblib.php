<?php 


        class dbclass{
            
            private $dbhost = 'localhost';
            private $dbname = '';
            private $dbroot='';
            private $dbpass='';
            private $dbtab='';
            private $conn;
            

            public function __construct(){
                echo "object created</br>";
            }
           
            
            public function dbconnect($_dbhost,$_dbroot, $_dbpass,$_dbname){
                $this->dbname = $_dbname;
                $this->dbhost = $_dbhost;
                $this->dbroot = $_dbroot;
                $this->dbpass = $_dbpass;
                $this->conn = mysqli_connect( $this->dbhost, $this->dbroot, $this->dbpass, $this->dbname );
                if( $this->conn->connect_error ){
                    echo "db not connected</br>";
                }
                else{
                    echo "db connected</br>";
                }
                
            }
            public function dbdisconnect(){
                $this->conn->close();
               
            }
            public function changetable($_tabname){
                $this->dbtab = $_tabname;
            }
            public function addrow(){
                $sql = "INSERT INTO `$this->dbtab` (status) VALUES('-1')";
              
                if( $this->conn->query($sql) === TRUE ) echo "row created successfully!</br>";
                else echo "no row has been created</br>".$this->conn->error;;
                $sql = "SELECT id FROM `$this->dbtab` WHERE status = -1";
                $ret = $this->conn->query($sql);
                $row = $ret->fetch_assoc();
                return $row['id'];

            }
            public function updtRow($id , $col , $val){
                $sql = "UPDATE `$this->dbtab` SET $col = '$val' WHERE id = $id ";
                if($this->conn->query($sql)===TRUE) echo "data updated successfully</br>";
                else echo "row can't be updated</br>: ".$this->dbtab.$this->conn->error;

            }

            
        }

       /* $db = new dbclass();
        $db->dbconnect( "localhost","root","","db_rentahome" );
        $db->changetable("tb_userinfo");
        $db->addrow();
        $db->updtRow(2,"name","hasin");
        */
?>
