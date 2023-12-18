<link rel="icon" href="raccoon-rounded.png">

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Raccoon Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="raccoonstyle.css">
</head>

<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="video.html">Videos</a>
        <a href="rpanda.php">Red Pandas</a>
        <a href="about.html">About</a>
        <a class="active">Apply</a>
    </div>


    </head>

    <body>
        <br>

        <div class="center">

            <img src="images/IMG_3915.jpg" alt="Raccoon" style="width:33%">
            <br>
            <p2>STUDENT PROJECT | NOT A REAL APPLICATION</p2>

        </div>
        <center>
            <h1>Raccoon Sanctuary Job Application</h1>
            <br>
            <!-- Use alternative form after lab -->
            <form action="submitted.php" method="post">
                <!-- <form action="/jensen/echo.php" method="post"> -->
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <br>

                Gender:
                <br>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label><br>
                <input type="radio" id="prefernot" name="gender" value="Prefer not to say">
                <label for="prefernot">Prefer not to say</label><br>

                <br>
                Check in the boxes that apply to you: <br>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> I have a bike</label><br>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                <label for="vehicle2"> I have a car</label><br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                <label for="vehicle3"> I have a boat</label><br>

                <br>
                <label for="citizenship">I am:<br></label>
                <select name="work" id="citizenship">
                    <option value="Select">Select</option>
                    <option value="Canadian Citizen">A Canadian Citizen</option>
                    <option value="Permanent Resident">A Permanent Resident</option>
                    <option value="Work Visa">On a Work Visa</option>
                </select><br>
                <br>
                <label for="priorexperience">How much experience do you have in this field:<br></label>
                <select name="experience" id="priorexperience">
                    <option value="No Prior Experience">No Prior Experience</option>
                    <option value="0-1 Years Experience">0-1 Years Experience</option>
                    <option value="1-3 Years Experience">1-3 Years Experience</option>
                    <option value="3+ Years Experience">3+ Years Experience</option>
                </select><br><br>

                Write your cover letter:
                <br>
                <textarea name="coverletter" id="cover" rows="4" cols="50">Write here...</textarea>

                <br>
                <input type="submit" value="Submit Application">
                <input type="reset" value="Reset">
            </form>
        </center>
    </body>

</html>