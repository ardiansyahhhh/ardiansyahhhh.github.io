<?php

    if(isset($_POST['yes'])){
        echo "<script>
        alert('I KNEEEWWW IT!!!!');
        document.location.href='yes.html';
        </script>";
    }elseif (isset($_POST['no'])) {
        echo "<script>
        alert(' BABEEEE, I GIVE YOU 1 MORE CHANCE!!! ');
        document.location.href='index4.php';
        </script>";
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <main class="grid">
            <form action="" method="post">
            <table>
                <tr>
                    <th colspan="2" style="font-size: 13px; color: red;">HARD QUESTION</th>
                </tr>
                <tr>
                    <th colspan="2">DO YOU LOVE ME ?</th>
                </tr>
                <tr>
                    <td><button type="submit" name="yes" style="width: 100px; margin: 20px;" class="btn btn-primary">YESSSS!!</button></td>
                    <td><button type="submit" name="no" style="width: 100px; margin: 20px;"  class="btn btn-danger">NOOO!!!!</button></td>
                </tr>
            </table>
            </form>
        </main>
    </div>
</body>
</html>