<?php
$conn=mysqli_connect("localhost","root","","bookstore");
if($conn)
{
        $name=$_GET["bookname"];
        $price=$_GET["bookprice"];
        $count=$_GET["bookcount"];
        
        if($name!== "" && $price!== "" && $count !== ""){
            
        $sql="INSERT INTO `details`(`name`, `price`, `count`) VALUES ('$name','$price','$count')";
        $query=$conn->query($sql);
        if($query)
        {
            echo "
            <script> 
            alert('Insertion Successfully');
             window.location.href='table.php';
            </script>";
        }
        else{
            echo "
        <script> 
        alert('Insertion NOT Successfully');
        </script>";
        }
        
    }
    else{
        echo "
            <script> 
            alert('Oops You forgot to enter details');
             window.location.href='addbook.php';
            </script>";
    }
}
?>