<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <input type="number" class="form-control" name="number1" placeholder="So thu nhat" >
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="number2" placeholder="So thu hai" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div>
    <input type="number" placeholder="Ket qua" value="<?php if(isset($sumab)) echo $sumab ?>" readonly>
    </div>
    </div>
</body>
</html>