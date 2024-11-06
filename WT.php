<?php
    class WT{
        public $item;

        public function __construct($WorkTimes){
            foreach ($WorkTimes as $item){
                echo "<tr>
                    <th>{$item ['id']}</th>
                    <td> {$item['NamesofWorker']}</td>
                    <td> {$item['StartWork_at']}</td>
                    <td> {$item['FinalyWork_at']}</td>
                    <td> ".gmdate('H:i',$item['required_of'])."</td>
                </tr>";
        }
        }
    }

?>