<?php
$conn=mysqli_connect("localhost","root","","bookstore");
if($conn)
{
    $sno=$_GET["sno"];
    $count=$_GET["count"];
    $req=$_GET["req"];
    $price=$_GET["price"];
    $newcount=$count-$req;
    $collect=$price*$req;
       
        $sql="UPDATE `details` SET `count`= $newcount WHERE sno=$sno";
        $query=$conn->query($sql);
        // if($query)
        // {
        //     echo "
        //     <script> 
        //     alert('Updated Successfully');
        //     // window.location.href='table.php';
        //     </script>";
        // }
        // else{
        //     echo "Data  NOT inserted";
        // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .set4{
            width:10vw;
        }
        body{
        }
        <style>
         .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width:100vw;
        }
        </style>
        </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new</title>
</head>
<body class="bg-dark">
<<nav class="navbar navbar-expand-lg ">
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
                            <a class="nav-link active text-light" aria-current="page" href="addbook.html">Shop 📚</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="table.php">Book Collection</a>
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
                            <a class="nav-link disabled text-light" aria-disabled="true">Contact 📞</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>

<?php
$conn=mysqli_connect("localhost","root","","bookstore");
if($conn)
{
    $date=$_GET["date"];
    $name=$_GET["name"];
        
        if($name!== "" && $price!== "" && $count !== ""){
        $sql="INSERT INTO `collection`( `date`, `name`, `count`, `collection`) VALUES ('$date','$name','$req','$collect')";
        $query=$conn->query($sql);
        if($query)
        {
            echo "
            <script> 
            alert('Check out the details!');
            
            </script>";
        }
        
        
    }
   
}
?>
 <div class="container my-5">
    <table border="2" class="table table-striped  table-hover">
        <tr class="table-dark text-center " >
            <th>Date</th>
            <th>Name</th>
            <th>Count</th>
            <th>Price</th>
           
        </tr>


        <?php
$conn=mysqli_connect("localhost","root","","bookstore");
if($conn)
{
    // echo "Connection successfull";
    $sql="SELECT * FROM `collection`";
    $query=$conn->query($sql);
    $cnt=0;
    $totalbooks=0;
    if($query->num_rows>0)
    {
       while($row=$query->fetch_assoc())
       {
         echo "<tr class='text-center'>";
         echo "<td>$row[date]</td>";
         echo "<td>$row[name]</td>";
         echo "<td>$row[count]</td>";
         echo "<td>$row[collection]</td>";
         $cnt+=$row['collection'];
         $totalbooks+=$row['count'];
         echo"</tr>";
         
       }
    }
    echo"<tr class='table-success text-white text-center'>";
    echo "<td colspan='2'><strong>Total Number of Books:</strong>  $totalbooks </td>";
    echo " <td colspan='2'><strong>Total Collection:</strong> ₹  $cnt </td>";
    echo "</tr>";
}


?>

    </table>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

