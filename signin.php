<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
</head>
<!-- bootstrap css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- stylesheet -->
<link rel="stylesheet" href="css/styles.css">

<body>
    <div class="container">
        <div class="card">
        <!-- card header -->
        <div class="card-header">
            <h3 class="text-center">Sign in</h3>
        </div>
        <!-- card body -->
        <div class="card-body">
            <form action="">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i> <div class="fa-solid fa-user"></div></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter your username" required="required" autocomplete="off" name="username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i> <div class="fas fa-key"></div></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password" required="required" autocomplete="off" name="password" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- signup button -->
            <div class="form-group">
                <input type="submit" name="signin" value="Sign in">
            </div>
            </form>
            
        </div>
        <!-- card footer -->
        <div class="card-footer text-center">
            Don't have an account?
            <a href="index.php">Sign up</a>
        </div>
</div>
    </div>
</body>

</html>