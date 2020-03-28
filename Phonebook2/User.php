<?php


      class User
      {
        public $userInserted=NULL;
        public $contact = NULL;

        public function __construct($db)
        {
          $this->db = $db;
        }
        public function selectAll()
        {

                $criteria = $_POST['criteria'];
                $sql = "SELECT * FROM contacts WHERE Fname LIKE '%{$criteria}%' OR
                Lname LIKE '%{$criteria}%'";
                $query = $this->db->prepare($sql);
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);


        }


        public function deleteAll($id)
        {
          $sql ="DELETE FROM contacts WHERE id=?";
          $query = $this->db->prepare($sql);
		  $query->execute([$id]);
        }

        public function insertUser()
        {
          $fristname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $telnumber = $_POST['tlnumber'];

          $sql = "INSERT INTO contacts VALUES(NULL,?,?,?)";
          $query = $this->db->prepare($sql);
          $query->execute([$fristname,$lastname,$telnumber]);

          if($query)
          {
             $this->userInserted =TRUE;
          }else {
            $this->userInserted =FALSE;
          }
        }
      }

?>
