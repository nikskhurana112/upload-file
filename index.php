<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control"> <br>
        <label for="">Photo</label>
        <input type="file" name="photo" accept="image/png, image/gif, image/jpeg" class="form-control"> <br>
        <button class="btn">Submit  </button>

    </form>

</body>

</html>