<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour vers le futur</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">

</head>

<body>
    <?php

    $presentTime = new DateTime('now', new DateTimeZone('Europe/paris'));
    $destinationTime = new DateTime('2024-05-28 07:45');

    $interval = $presentTime->diff($destinationTime);

    // var_dump($presentTime);
    // var_dump($destinationTime);
    ?>
    <h1>Are you ready for the time travel ?</h1>
    <br>
    <div class="destination">
        <h1><?php echo $destinationTime->format('M d Y h:iA') . '<br>' . 'Destination Time' . '<br>' . '<br>'; ?>
        </h1>
    </div>

    <div class="present">
        <h1><?php echo $presentTime->format('M d Y h:iA') . '<br>' . 'Present Time' . '<br>' . '<br>'; ?>
        </h1>
    </div>

    <?php echo $interval->format('%R%yan %R%mmois %R%djours %R%hheures et %R%iminutes');
    ?>
</body>

</html>