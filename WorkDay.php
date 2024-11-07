<?php
require 'DB.php';

    class WorkDay{
        const ish_vaqti = 8;   
        public $pdo;
        public $startWork;
        public $finalyWork;
        public $nameWork;
        public $total;

        public function __construct(){
            $db = new DB();
            $this->pdo = $db->pdo;
        }
            public function store (string $StartWork_at, string $FinalyWork_at,string $NamesofWorker){
                $this->startWork = new DateTime($StartWork_at); 
                $this->finalyWork = new DateTime($FinalyWork_at); 
                $this->nameWork = $NamesofWorker; 
                $this->qarz();
            

                 
            
            $query = ("INSERT INTO work_times (StartWork_at, FinalyWork_at, NamesofWorker,required_of)
                        VALUES (:startWork, :finalWork,:nameWork,:required_of);");
                        
            $stmt = $this->pdo->prepare($query);

            $stmt->bindParam(':nameWork',$this->nameWork);
            $stmt->bindValue(':startWork',$this->startWork->format('Y-m-d H:i'));
            $stmt->bindValue(':finalWork', $this->finalyWork->format('Y-m-d H:i'));
            $stmt ->bindParam(':required_of', $this->total);
            $stmt->execute();
            header("location: index.php");
            exit();
            
        
            }

            public function qarz(){
                $diff = $this->startWork->diff($this->finalyWork);
                $hour = $diff->h;
                $minut = $diff->i;
                $this->total =((self::ish_vaqti*3600) - ($hour*3600)-($minut*60));
                $this->total;
            }
        
        public function getWordDayList(){
            $query = "Select *from work_times";
            $stmt=$this->pdo->query($query);
            return $stmt->fetchAll();
        } 
        public function calculateDebtTimeForEachUser(){
            $query = "Select NamesofWorker, SUM(required_of) as debt from work_times GROUP BY NamesofWorker";
            $stmt=$this->pdo->query($query);
            return $stmt->fetchAll();
        }

        public function markAsDone(int $id){
            $query = " UPDATE  work_times  SET required_of = 0 WHERE id = :id";
            $stmt=$this->pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            header("location: index.php");
        }
    }


?>