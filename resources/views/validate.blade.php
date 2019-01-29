<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="validate-request" method="post" enctype="multipart/form-data">
        @csrf
        <?php
            echo "<pre>";
            print_r($errors->all());
            echo "</pre>";
        ?>
        Username <input type="text" name="username" value="{{ old('username') }}"> <br>
        Password <input type="password" name="password"> <br>
        Photo <input type="file" name="photo"> <br>
        Sản phẩm 1 <input type="text" name="product[]"> <br>
        Sản phẩm 2 <input type="text" name="product[]"> <br>
        <input type="submit" value="Gửi">
    </form>
</body>
</html>