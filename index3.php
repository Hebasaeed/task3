
 <?php




if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name     = $_POST['name'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $address  = $_POST['address'];
    $url      = $_POST['url'];


    echo $name.' || '.$email.' || '.$password .' || '.$address.' || '.$url;
}


?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>

        <form action="val.php" method="post"  >

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby=""   name="name" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1"   name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">address</label>
                <input type="text" class="form-control" id="exampleInputPassword1"   name="password" placeholder="address">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">linkedin url</label>
                <input type="url" class="form-control" id="exampleInputPassword1"   name="password" placeholder="url">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <br>

</body>

</html>  
