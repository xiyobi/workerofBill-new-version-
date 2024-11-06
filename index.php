<?php
    require 'WorkDay.php';
    $workDay = new WorkDay();
    
    if (isset($_POST['StartWork_at']) and isset($_POST['FinalyWork_at']) and isset($_POST['NamesofWorker'])) {
        if(!empty($_POST['StartWork_at']) and !empty($_POST['FinalyWork_at']) and !empty($_POST['NamesofWorker'])){
            $workDay->store($_POST['StartWork_at'],$_POST['FinalyWork_at'],$_POST['NamesofWorker']);
        }
    }

    $records = $workDay->getWordDayList();
    require 'view.php';

?>
