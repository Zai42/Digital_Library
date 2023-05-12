
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital library";


$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST["submit"])) {
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $book_title = $_POST['b_title'];
    $author = $_POST['a_name'];
    $b_edition = $_POST["b_edition"];
    $email = $_POST["email"];
    $reason = $_POST["reason"];

    $sql = "INSERT INTO suggestion (First_Name,Last_Name,Gender,Book_Title,Author_Name,Book_Edition,Email,Reason)
VALUES ('$first_name','$last_name','$gender','$book_title','$author','$b_edition','$email','$reason')";
    $execute = mysqli_query($conn, $sql);
    $submitted = "submitted";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Your Suggestions
    </title>
    <style>
        .heading{
            position:absolute;
            left:10.1%;
            color:white;
        }
        .paragraph{
            position:absolute;
            left:12.1%;
            top:7%;
            color:white;
        }
        body{
            background-image: url("suggestion_bg 2.jpg");
            background-position-x: 50%;
            background-position-y: 10%;
            background-size: 100%;
        }
        .form{
            position:absolute;
            top:15%;
            left:16%;
            color:white;
            text-align: center;
        }
        .form input{
            opacity:0.3;
        }
        .form input:hover{
            opacity:1;
        }
    </style>
</head>
<body>
    <h1 class="heading">Recommend us our Favourite Book</h1>
    <p class="paragraph">Your suggestions will help us to upgrade our book's catalogue!</p>
    <form class="form" method="post" action="Digital%20Library%20Suggestions.php" onsubmit="throw alert('Your recommendation has been recorded!')">
        <label>First Name </label>
        <br /><br />
        <input type="text" name="f_name" required>
        <br/>
        <br/>
        <label>Last Name: </label>
        <br /> <br/>
        <input type="text" name="l_name">
        <br /> <br/>
        <label>Select your Sex/Gender: &nbsp</label>
        <select id="Gender" name="gender">
            <option value="" selected>Default</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Others</option>
        </select>
        <br/> <br/>
        <lable>Book Title: </lable>
        <br /> <br/>
        <input type="text" name="b_title" required>
        <br/> <br/>
        <lable>Author Name: </lable>
        <br /> <br/>
        <input type="text" name="a_name">
        <br/><br/>
        <lable>Email Address: </lable>
        <br /> <br/>
        <input type="email" name="email">
        <br /> <br/>
        <label>Book Edition (If any) </label>
        <br /> <br/>
        <input type="number" name="b_edition">
        <br/>
        <br/>
        <label>Reason for this suggestion? </label>
        <br /> <br/>
        <input name="reason" type="text" style="padding-bottom:30%;padding-left:50%;">
        <br/>
        <br/>
        <input type="submit" name="submit">
    </form>
</body>
</html>
