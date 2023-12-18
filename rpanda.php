<link rel="icon" href="raccoon-rounded.png">

<!DOCTYPE html>
<html lang="en">

<head>
  <title>RedPanda</title>
  <link rel="stylesheet" type="text/css" href="raccoonstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .topnav {
      overflow: hidden;
      background-color: #964100;
    }

    .topnav a:hover {
      background-color: #d73c28;
      color: black;
    }

    .topnav a.active {
      background-color: #793516;
      color: white;
    }
  </style>
</head>

<body>
  <div class="topnav">
    <a href="index.html">Home</a>
    <a href="video.html">Videos</a>
    <a class="active">Red Pandas</a>
    <a href="about.html">About</a>
    <a href="forms.php">Apply</a>
  </div>


  </head>

  <body style="background-color:#ffa86e">
    <h1>Red Pandas! :)</h1>
    <p style="text-align:center">Panda Panda Panda</p>

    <?php
    $all_images = glob("redpandas/{*.jpg, *.JPG, *.JPEG, *.png, *.PNG}", GLOB_BRACE);

    $image_count = count($all_images);
    // echo $image_count;
    shuffle($all_images);

    $images = array();
    ?>

    <div class="row">
      <div class="column">
        <?php
        foreach ($all_images as $index => $image) {
          if ($index >= $image_count)
            break;
          if ($index % 3 != 0)
            continue;
          $image_name = basename($image);
          echo "<img src='redpandas/{$image_name}' style=\"width:100%\" />";
        }
        ?>
      </div>
      <div class="column">
        <?php
        foreach ($all_images as $index => $image) {
          if ($index >= $image_count)
            break;
          if ($index % 3 != 1)
            continue;
          $image_name = basename($image);
          echo "<img src='redpandas/{$image_name}' style=\"width:100%\" />";
        }
        ?>
      </div>
      <div class="column">
        <?php
        foreach ($all_images as $index => $image) {
          if ($index >= $image_count)
            break;
          if ($index % 3 != 2)
            continue;
          $image_name = basename($image);
          echo "<img src='redpandas/{$image_name}' style=\"width:100%\" />";
        }
        ?>
      </div>
    </div>


  </body>

</html>