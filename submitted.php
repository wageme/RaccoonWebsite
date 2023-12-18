<link rel="icon" href="raccoon-rounded.png">

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Application Submitted</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="raccoonstyle.css">
</head>

<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="video.html">Videos</a>
        <a href="rpanda.php">Red Pandas</a>
        <a href="about.html">About</a>
        <a href="apply.html">Apply</a>
    </div>


    </head>

    <body>

        <?php

        $applications = fopen("applications.txt", "a"); //open for appending
        require_once('/home/jensen/abuse.php');

        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        $work = $_POST["work"];
        $experience = $_POST["experience"];
        $coverletter = $_POST["coverletter"];

        abuse($name);
        abuse($email);
        abuse($coverletter);

        fwrite($applications, date("d M Y - h:i a\n\n")); //eg. 07 Oct 2010 - 07:33 pm
        fwrite($applications, "Application from: $name\n");
        fwrite($applications, "email: $email\n");
        fwrite($applications, "Gender: $gender\n\n");
        ?>

        <h1>Thank you for your submission!</h1>
        <br>

        Your name is:
        <?php echo $name; ?><br>
        Your email address is:
        <?php echo $email; ?><br>
        Gender:
        <?php echo $gender; ?><br><br>

        <?php if (empty($_POST["vehicle1"]) and empty($_POST["vehicle2"]) and empty($_POST["vehicle3"])) {
            echo "I do not have a vehicle";
            fwrite($applications, "Applicant does not have a vehicle\n\n");
        } else {
            echo "I have a:<br>";
            fwrite($applications, "Applicant has a:\n");
        }

        if (!empty($_POST["vehicle1"])) {
            $vehicle1 = $_POST["vehicle1"];
            echo $vehicle1;
            fwrite($applications, "- $vehicle1\n");
            echo "<br>";
        }
        if (!empty($_POST["vehicle2"])) {
            $vehicle2 = $_POST["vehicle2"];
            echo $vehicle2;
            fwrite($applications, "- $vehicle2\n");
            echo "<br>";
        }
        if (!empty($_POST["vehicle3"])) {
            $vehicle3 = $_POST["vehicle3"];
            echo $vehicle3;
            fwrite($applications, "- $vehicle3\n");
        }
        if (!empty($_POST["vehicle1"]) or !empty($_POST["vehicle2"]) or !empty($_POST["vehicle3"])) {
            fwrite($applications, "\n");
            echo "<br>";
        }
        echo "<br>";

        echo "Residence Status: " . $work;
        echo "<br>";
        echo "Total Experience: " . $experience;
        fwrite($applications, "$work\n\n");
        fwrite($applications, "$experience\n\n");

        echo "<br><br>Cover Letter:<br>";
        echo $coverletter;

        fwrite($applications, "Cover Letter:\n$coverletter\n");
        fwrite($applications, "\n\n ---\n\n");


        fclose($applications); // all done, save the file
        ?>
        <br>

    </body>

</html>