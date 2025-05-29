<?php
$conn = mysqli_connect("localhost", "root", "", "bookstore");
if ($conn) {
    $sno = $_GET["sno"];
    $name = $_GET["name"];
    $price = $_GET["price"];
    $count = $_GET["count"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <style>
        ::placeholder{
            color:green;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background:black;
            scrollbar-width:none;
            background-image: url(cute.png);
            background-size: contain;

        }
        .set{
            width:19vw;
        }
        .set1{
            background:white;
            padding: 10px 20px;
            border-radius:10px;
            color:black;
            width:15vw;
        }
        .card {
         background: black;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 350px;
        }
        .set3{
         width:15vw;
        }
        .navbar{
            position:fixed;
            top:0;
            left:0;
            width:100vw;
        }
        .bore{
            box-shadow: 0 0 5px green;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* border:1px solid greenrgba(9, 79, 9, 0.81); */
            margin-bottom:15px;
        }
        .hell{
            width:20vw;
        }

        </style>
</head>
<body class="d-flex flex-column">
<nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand text-light mx-2" href="#"><i class="fa-solid  mx-2 fs-2 fa-book"
                        style="color: #f4f5f5;"></i>StoryNest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light fw-bolder" aria-current="page" href="addbook.html">Shop 📚</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light fw-bolder" aria-current="page" href="history.php">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fw-bolder" href="table.php">Book Collection</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-light" href="#"></a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link disabled text-light fw-bolder" aria-disabled="true">Contact 📞</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
<div class="container p-5 d-flex justify-content-center align-items-center flex-column gap-3 ">
<div class="d-flex gap-3  card bore">
 <div class="d-flex justify-content-center align-items-center gap-3">
    <p class="text-light text-center fw-bolder">Title:  </p>
 <h6 class="set1 text-dark"><?php echo "$name" ?></h6>
    </div>
    <div class="d-flex justify-content-center align-items-center gap-3">
    <p class="text-light text-center fw-bolder ">Price:</p>
    <h6 class="set1 text-dark" ><?php echo "$price" ?></h6>
    </div>
    <div class="d-flex justify-content-center align-items-center gap-3">
    <p class="text-light text-center fw-bolder">Count:</p>
    <h6 class="set1 text-dark"><?php echo "$count" ?></h6>
    </div>
    

<form action="updatedetails.php"  method="get">
    <input type="number" name="sno" value="<?php echo $sno; ?>" hidden>
    <input type="text" name="count" value="<?php echo $count; ?>" hidden>
    <input type="text" name="price" value="<?php echo $price; ?>" hidden>
    <input type="text" name="name" value="<?php echo $name; ?>" hidden>

    <div class="d-flex justify-content-center align-items-center flex-column gap-3">
    <input type="number" name="req" id="" class="set3 text-success btn btn-outline-dark mx-3 hell " min="1" max="<?php echo $count; ?>"required class="text-center my-5" placeholder="Enter No of books">
    <!-- <input type="number" name="req" min="1" max="100" required placeholder="Enter no of books"> -->
    <input type="date" name="date" id="" class="set3 text-success btn btn-outline-dark mx-3 hell" required class="text-center my-5" placeholder="Enter Date">
    </div>
   <div class="d-flex justify-content-center align-items-center mt-3"> 
   <input type="submit"  class="btn btn-outline-secondary m-1 w-50"value="Submit">
    </div>
    </form>
    </div>
    
</div>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>