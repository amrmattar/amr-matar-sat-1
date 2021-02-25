<?php
$arr = [
    "a1"=>['name' => 'Ahmed Hamdy','job' => 'front-end','experience' => 3],
    "a2" => ['name' => 'Mohammed Shaker','job' => 'back-end','experience' => 2],
    "a3" => ['name' => 'Ali Hasan','job' => 'full-stack','experience' => 4],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php foreach ($arr as  $key => $value) { ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['name']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $value['job']; ?></h6>
                <p class="card-text"><?php echo $value['experience'].' experience'; ?></p>
            </div>
        </div>
    <?php } ?>
</body>

</html>