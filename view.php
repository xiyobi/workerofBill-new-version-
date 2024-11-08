<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-4">

        <nav class="navbar" style="background-color: #e3f2fd;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="WorkofTracker.php">Work of Tracker</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                            style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Websitedata.php">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Link
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Link</a>
                            </li>
                        </ul>
                        <div class="mr-4">
                            <form class="d-flex" role="search">
                                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>


                        <!-- <div class="mr-4">
                            <form class="d-flex" role="search">
                                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div> -->



                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#feedbackModal">
                            Saytimiz haqida finkringiz!
                        </button>
                    </div>
                </div>

            </nav>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataModal">
                Malumotlarni qo'shish
            </button><br><br>
    </div>
    <!--Fikr va mulohazalar  Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="feedbackModalLabel">Fikr va mulohazalar </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email
                            address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example
                            textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bekor qilish</button>
                    <button type="button" class="btn btn-primary">Yuborish</button>
                </div>
            </div>
        </div>
    </div>

    </nav>
    <div class="container">
        <div class="mt-4">
            <div class="mb-4">

                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Qilinishi kerak bolgan ishlar
                    ro'yhati</button>
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Today</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        salom qalaysan
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="dataModalLabel">Enter Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post">
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


                    <div class="mb-3">
                        <label for="NamesofWorker" class="form-label">Names Worker</label>
                        <input type="text" class="form-control" id="NamesofWorker" name="NamesofWorker"
                            placeholder="Worker Name " required>
                    </div>
                    <div class="mb-3">
                        <label for="StartWork_at" class="form-label">Start Work</label>
                        <input type="datetime-local" class="form-control" id="StartWork_at" name="StartWork_at"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="FinalyWork_at" class="form-label">Finaly Work</label>
                        <input type="datetime-local" class="form-control" id="FinalyWork_at" name="FinalyWork_at"
                            required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">send</button><br>
                </div>

              


                <form action="download.php" id="export" method="post">
                    <input type="hidden" name="export" value="true">
                    <button type="submit" class="btn btn-success">Export</button>
                </form>





            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-bordered border-primary">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">#</th>
                    <th scope="col">Ism</th>
                    <th scope="col">Start Work</th>
                    <th scope="col">End Work</th>
                    <th scope="col">ishlamagan Vaqti</th>
                    <th score="col">Action</th>
                    <th score="col">Name edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 

        global $records;
        $i = isset($_GET['page']) ? (int)$_GET['page']:0;
        foreach ($records as $item){
            $i++;
            echo "<tr>
            <th>{$item ['id']}</th>
            <td> {$item['NamesofWorker']}</td>
            <td> {$item['StartWork_at']}</td>
            <td> {$item['FinalyWork_at']}</td>
            <td> ".gmdate('H:i',$item['required_of'])."</td>
            <td><a href = 'index.php?done=".$item['id']."'>Done</a></td>
            <td><a href = 'index.php?edit=".$item['id']."'>Edit</a></td>

            </tr>";
        }

        ?>

            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                    global $workDay,$currentPage;
                    $disabled = $currentPage == 1 ? "disabled":"";

                ?>
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <?php
                    $pageCount = $workDay->calculatePageCount();
                    for ($page = 1; $page <= $pageCount; $page++) {
                        $active = ($_GET['page'] == $page) ? 'active' : '';
                        echo "<li class='page-item $active'><a class='page-link' href='index.php?page=".$page."''>".$page."</a></li>";
                    }
                    
                ?>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>