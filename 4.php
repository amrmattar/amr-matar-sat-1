<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="text-center">
    <h1>multiplication table</h1>
    <div class="container">
        <div class="row ">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                for ($j = 1; $j <= 12; $j++) { ?>
                    <div class="col-lg-1" style="border: 1px solid;">
                        <?php echo "$j" . '*' . "$i" . '=' . $j * $i . '  '; ?>
                    </div>
                <?php }; ?>
                <br>
            <?php };
            ?>
        </div>
    </div>
</body>

</html>