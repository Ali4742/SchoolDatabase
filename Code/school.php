<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary School Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    //if the for is submitted
    if ($_SERVER == "POST") {
        //Collect data
        $childfname = $_POST['childfname');
        $childsname = $_POST['childsname'];
        $addressl1 = $_POST['addressl1'];
        $addressl2 = $_POST['addressl2'];
        $town = $_POST['town'];
        $postcode = $_POST['postcode'];
        $nochildren = $_POST['nochildren'];
        $medical = $_POST['medical'];
        $childbirthday = $_POST['childbirthday'];
        $year = $_POST['year'];
        $parentfname = $_POST['parentfname'];
        $parentlname = $_POST['parentlname'];
        $phonenumber = $_POST['phonenumber'];
        $siblings = $_POST['siblings'];

        //Display the data
        echo "<h2>Form Submitted</h2>";
        echo "<p><strong>Child's First Name:</strong> $childfname</p>";
        echo "<p><strong>Child's Surname:</strong> $childsname</p>";
        echo "<p><strong>Address Line 1:</strong> $addressl1</p>";
        echo "<p><strong>Address Line 2:</strong> $addressl2</p>";
        echo "<p><strong>Town/City:</strong> $town</p>";
        echo "<p><strong>Postcode:</strong> $postcode</p>";
        echo "<p><strong>Number of Parents:</strong> $nochildren</p>";
        echo "<p><strong>Medical Condition:</strong> $medical</p>";
        echo "<p><strong>Child's Birthday:</strong> $childbirthday</p>";
        echo "<p><strong>Year Group:</strong> $year</p>";
        echo "<p><strong>Parent's First Name:</strong> $parentfname</p>";
        echo "<p><strong>Parent's Surname:</strong> $parentlname</p>";
        echo "<p><strong>Phone Number:</strong> $phonenumber</p>";
        echo "<p><strong>Siblings:</strong> $siblings</p>";
    }
    ?>
    
    <!-- Main content -->
    <header>
        <h1>Primary School Sign Up</h1>
    </header>

    <!-- Form to collect information -->
    <form method="post" action="">
        <p>Please fill in this form if you have a child going to primary school</p>

        <!-- Child's Name -->
        <fieldset>
            <legend>Child's Information</legend>
            Child's First Name: <input type="text" name="childfname" required/><br>
            Child's Surname: <input type="text" name="childsname" required/><br>
        </fieldset><br>

        <!-- Address -->
        <fieldset>
            <legend>Address Information</legend>
            Address Line 1: <input type="text" name="addressl1" required/><br>
            Address Line 2: <input type="text" name="addressl2"/><br>
            Town/City: <input type="text" name="town" required/><br>
            Postcode: <input type="text" name="postcode" required/><br>
        </fieldset><br>

        <!-- Number of Parents -->
        <fieldset>
            <legend>Parent Information</legend>
            Number of parents for the child: <input type="number" name="nochildren" required><br>
        </fieldset><br>

        <!-- Medical Conditions -->
        <fieldset>
            <legend>Medical Conditions</legend>
            Does your child have any medical conditions: <br>
            <input type="radio" name="medical_condition" value="Yes">
            <label for="yes">Yes</label><br>
            <input type="radio" name="medical_condition" value="No">
            <label for="no">No</label><br>
        </fieldset><br>

        <!-- Extra details -->
        <fieldset>
            If yes, what is it: <input type="text" name="medical"/><br>
        </fieldset><br>

        <!-- Birthday and Year Group -->
        <fieldset>
            <legend>Child's Birthdate and Year Group</legend>
            Child's birthday: <input type="date" name="childbirthday" required/><br><br>
            <label>Child Year group: </label>
            <select name="year">
                <option value="Year 1">Year 1</option>
                <option value="Year 2">Year 2</option>
                <option value="Year 3">Year 3</option>
                <option value="Year 4">Year 4</option>
                <option value="Year 5">Year 5</option>
                <option value="Year 6">Year 6</option>
            </select><br>
        </fieldset><br>

        <!-- Parent info -->
        <fieldset>
            <legend>Parent's Information</legend>
            Parent's First Name: <input type="text" name="parentfname" required/><br>
            Parent's Surname: <input type="text" name="parentlname" required/><br>
        </fieldset><br>

        <!-- Parent's Phone Number -->
        <fieldset>
            Parent's phone number: <input type="text" name="phonenumber" required><br>
        </fieldset><br>

        <!-- Any siblings -->
        <fieldset>
            <legend>Siblings</legend>
            Does your child have any siblings: <br>
            <input type="radio" name="siblings" value="Yes">
            <label for="yes">Yes</label><br>
            <input type="radio" name="siblings" value="No">
            <label for="no">No</label><br>
        </fieldset><br>

        <p>Thank you for filling in this form</p>

        <!-- Submit -->
        <input type="submit" id="submit" name="submit" value="Submit"><br>
    </form>
</body>
</html>
