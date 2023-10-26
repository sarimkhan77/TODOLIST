<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
    <title>update</title>
</head>
<?php


include "config.php";
$id=$_GET['id'];
$query = mysqli_query($con,"SELECT * from tbltodo where ID=$id");
$data=mysqli_fetch_array($query);
?>
<body class="big-info"><form action="update1.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text primary font-monospace">
                    update
                </h3>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['list']?>"name="list"class="form-control">

                </div>
                <div class="col-2">
                <button type="submit" class="btn btn-outline-primary">update</button>
                <input type="hidden"name="id" value="<?php echo $data['id']?>">
                </div>
            </div>
        </div>
</form>
    
</body>
</html>