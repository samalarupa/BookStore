
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
            width: 30vw;
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
        /* .bore{
            box-shadow: 0 0 5px green;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* border:1px solid greenrgba(9, 79, 9, 0.81); */
            margin-bottom:15px;
        } */
        .hell{
            width:20vw;
        }

        </style>
</head>
<body class="d-flex flex-column">


<div class="">
<form action="displayhist.php"class="bore card border-secondary d-flex justify-content-center align-items-center "  method="get">
    <div class="d-flex justify-content-center align-items-center"><h3 class="text-light fw-bolder mb-5" >History Search by Date</h3>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column gap-3">
    <div class="d-flex justify-content-center align-items-center gap-1">
        <h5 class="text-success">Start Date </h5>
        <h5 class="text-success">:</h5>
    <input type="date" name="date1" id="" class="set3 text-success btn btn-outline-dark mx-3 hell  required class="text-center my-5" placeholder="Enter No of books">
    </div>
    <div class="d-flex justify-content-center align-items-center gap-1">
        <h5 class="text-success">End Date </h5>
        <h5 class="text-success">:</h5>
        <input type="date" name="date2" id="" class="set3 text-success btn btn-outline-dark mx-3 hell" required class="text-center my-5" placeholder="Enter Date">
    </div>
   
   <div class="d-flex justify-content-center align-items-center mt-3"> 
   <input type="submit"  class="btn btn-outline-secondary m-1 w-100"value="Submit">
    </div>
    </div>
</form>
    </div>
    
</div>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>