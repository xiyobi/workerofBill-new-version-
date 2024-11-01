<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form  method = "get" class = "stely">
        <label for="NamesofWorker">Ism</label> <br>
        <input type="text" name="NamesofWorker" id= "NamesofWorker" required><br>
        <label for="StartWork_at">Start Work</label> <br>
        <input type="datetime-local" name="StartWork_at" id = "StartWork_at" required> <br>
        <label for="FinalyWork_at">Finaly Work</label> <br>
        <input type="datetime-local" name="FinalyWork_at" id = "FinalyWork_at" required><br><br>
        <button type="submit">Submit</button> <br><br>
    </form>
</body>
</html>
<?php
    $dns = "mysql:host=127.0.0.1;dbname=work_of_bill";
    $username = "root";
    $password = "root";
    $pdo = new PDO($dns,$username,$password);

    if(isset($_GET["StartWork_at"]) and isset($_GET["FinalyWork_at"]) and isset($_GET["NamesofWorker"])){
        $startWork = $_GET['StartWork_at']; 
        $finalyWork = $_GET['FinalyWork_at']; 
        $nameWork = $_GET['NamesofWorker']; 


        $stmt = $pdo->prepare("INSERT INTO work_times (StartWork_at, FinalyWork_at, NamesofWorker) VALUES (:startWork, :finalWork,:nameWork)");
        $stmt->bindParam(':startWork',$startWork);
        $stmt->bindParam(':finalWork', $finalyWork);
        $stmt->bindParam(':nameWork',$nameWork);
        $stmt->execute();

    }
    $WorkTimes = $pdo->query("Select *from work_times")->fetchAll();
    ?>
    

<table class="table" border= "1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ism</th>
      <th scope="col">Start Work</th>
      <th scope="col">End Work</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $index = 1;
    foreach ($WorkTimes as $item): ?>
    <tr>
      <th scope="row"><?php echo $index++; ?></th>
      <td><?php echo $item["NamesofWorker"]; ?></td>
      <td><?php echo $item["StartWork_at"]; ?></td>
      <td><?php echo $item["FinalyWork_at"]; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
