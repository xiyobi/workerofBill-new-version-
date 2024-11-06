<?php
require 'DB.php';

    class WorkDay{
        const ish_vaqti = 8;   
        public $pdo;
        public function __construct(){
            $db = new DB();
            $this->pdo = $db->pdo;
        }
            public function store (string $StartWork_at, string $FinalyWork_at,string $NamesofWorker ){
                $startWork = new DateTime($StartWork_at); 
                $finalyWork = new DateTime($FinalyWork_at); 
                
                
                $nameWork = $NamesofWorker; 
                
                $diff = $startWork->diff($finalyWork);
                $hour = $diff->h;
                $minut = $diff->i;
            
            $total =((self::ish_vaqti*3600) - ($hour*3600)-($minut*60)); 
            
            $query = ("INSERT INTO work_times (StartWork_at, FinalyWork_at, NamesofWorker,required_of)
                        VALUES (:startWork, :finalWork,:nameWork,:required_of);");
                        
            $stmt = $this->pdo->prepare($query);

            $stmt->bindParam(':nameWork',$nameWork);
            $stmt->bindValue(':startWork',$startWork->format('Y-m-d H:i'));
            $stmt->bindValue(':finalWork', $finalyWork->format('Y-m-d H:i'));
            $stmt ->bindParam(':required_of', $total);
            $stmt->execute();
            header("location: index.php");
            exit();
        }
        
        public function getWordDayList(){
            $query = "Select *from work_times";
            $stmt=$this->pdo->query($query);
            return $stmt->fetchAll();
        } 
    }


?>