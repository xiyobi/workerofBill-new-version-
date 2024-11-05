<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container" class="mt-4">
        <h1 class="text-danger text-center">Work of Tracker</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Malumotlarni qo'shish
        </button><br><br>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action = "index.php" class="post">
                        <h5>When are you working?</h5>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1" required>
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2" required>
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                    </form>

                    <form method="post">
                        <div class="mb-3">
                            <label for="NamesofWorker" class="form-label">Names Worker</label>
                            <input type="text" class="form-control" id="NamesofWorker" name="NamesofWorker"  placeholder="Worker Name " required>
                        </div>
                        <div class="mb-3">
                            <label for="StartWork_at" class="form-label">Start Work</label>
                            <input type="datetime-local" class="form-control" id="StartWork_at" name="StartWork_at"
                                required >
                        </div>
                        <div class="mb-3">
                            <label for="FinalyWork_at" class="form-label">Finaly Work</label>
                            <input type="datetime-local" class="form-control" id="FinalyWork_at" name="FinalyWork_at"
                                required>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button><br>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>


</html>
<?php
    const ish_vaqti = 8;
    $dns = "mysql:host=127.0.0.1;dbname=work_of_bill";
    $username = "root";
    $password = "root";
    $pdo = new PDO($dns,$username,$password);

    if(isset($_POST["StartWork_at"]) and isset($_POST["FinalyWork_at"]) and isset($_POST["NamesofWorker"])){

        if(!empty($_POST['StartWork_at']) and !empty($_POST['FinalyWork_at']) and !empty($_POST['NamesofWorker'])){

            $startWork = new DateTime($_POST['StartWork_at']); 
            $finalyWork = new DateTime($_POST['FinalyWork_at']); 
            $nameWork = $_POST['NamesofWorker']; 
            
            
            $diff = $startWork->diff($finalyWork);
            $hour = $diff->h;
            $minut = $diff->i;
            
            $total =(ish_vaqti*3600) - ($hour*3600)-($minut*60);

            $stmt = $pdo->prepare("INSERT INTO work_times (StartWork_at, FinalyWork_at, NamesofWorker,required_of) VALUES (:startWork, :finalWork,:nameWork,:required_of)");
            $stmt->bindValue(':startWork',$startWork->format('y-m-d H:i'));
            $stmt->bindValue(':finalWork', $finalyWork->format('y-m-d H:i'));
            $stmt->bindParam(':nameWork',$nameWork);
            $stmt ->bindParam(':required_of', $total);
            $stmt->execute();
            header("location: index.php");
            exit();
        }

    }
    $WorkTimes = $pdo->query("Select *from work_times")->fetchAll();
    ?>
<div class="container">
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ism</th>
                <th scope="col">Start Work</th>
                <th scope="col">End Work</th>
                <th scope="col">ishlamagan Vaqti</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 

    $index = 1;
    foreach ($WorkTimes as $item): ?>
            <tr>
                <th scope="row"><?php echo $index++;?></th>
                <td><?php echo $item["NamesofWorker"];?></td>
                <td><?php echo $item["StartWork_at"];?></td>
                <td><?php echo $item["FinalyWork_at"];?></td>
                <td><?php echo gmdate('H:i',$item["required_of"]);?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>