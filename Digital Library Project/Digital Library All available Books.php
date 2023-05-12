<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #header {
            padding-left:29%;
            overflow: hidden;
            background-color: black;
            margin-left:-1.50%;
            margin-right:-1%;
        }
        #image{
            width: 90px;
            max-width: 100%;
            position:absolute;
            left:20px;
        }
        #header a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
            margin-left: 39px;
        }

        #header a:hover {
            background-color: rgba(0, 0, 0, 0.25);
            color: white;
            font-size: 20px;
            font-weight: bolder;
            font-style:italic;
        }

        #header a.active {
            background-color: green;
            color: white;
            font-size: 20px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-bottom:5%;
        }

        td, th {
            border: 1px solid #020000;
            text-align: left;
            padding: 8px;
        }
        td{
            background-color:maroon;
            color:white;
        }
        th{
            background-color:green;
            color:white;
        }
        td:hover {
            background-color: lightcoral;
            color: black;
        }
        th:hover{
            background-color:lightgreen;
            color:black;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        img{
            width: 90px;
            max-width: 100%;
            position:absolute;
            left:20px;
        }
        th{
            color:white;
        }
        h1{
        text-align: center;
        color:white;
            border-style:solid;
            border-color:red;
            background-color: green;
        }
    </style>
</head>
<body style="background-image:url('php background.jpg');background-position: center;">
<div id="header">
    <a href="Digital Library.html" target="_blank"><i class="fa fa-home" aria-hidden="true"></i></a>
    <a class="active" href="Digital Library All available Books.php" target="_blank">All <i class="fa fa-book" aria-hidden="true"></i></a>
    <a>Genre</a>
    <a>Departments</a>
    <a>Authors</a>
    <a>About Us</a>
    <img id="image" src="Piet logo.png">
    <form method="post" action="Digital%20Library%20All%20available%20Books.php" style="position:absolute;bottom:50px;right:10px;top:13px">
        <input type="text" placeholder="Search.." name="search">
        <button name='submit' type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "digital library");
$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$select = "select * from books";
$execute = mysqli_query($connect,$select);
echo "<h1>All Books Available in <br/> <b>Pakistan Institute of Engineering & Technology</b></h1>";
while($rows = mysqli_fetch_assoc($execute)) {
    if(isset($_POST["submit"])) {
        $search_term = $_POST['search'];
        if ($rows["Book Title"] == $search_term) {
            echo "<table>"
                . "<tr>" .
                "<th>" . "Book ID:" . "</th>" .
                "<th>" . "Book Title:" . "</th>" .
                "<th >" . "Book Author:" . "</th>" .
                "<th>" . "Book Edition:" . "</th>" .
                "<th>" . "Book Genre:" . "</th>" .
                "<th>" . "Book Department:" . "</th>" .
                "</tr>" .
                "<td>" . $rows["Book ID"] . "</td>" .
                "<td>" . $rows["Book Title"] . "</td>" .
                "<td>" . $rows["Book Author"] . "</td>" .
                "<td>" . $rows["Book Edition"] . "</td>" .
                "<td>" . $rows["Genre"] . "</td>" .
                "<td>" . $rows["Department"] . "</td>"
                . "</tr>" .
                "</table>";
        }
    }
    else{
            echo "<table>"
                . "<tr>" .
                "<th>" . "Book ID:" . "</th>" .
                "<th>" . "Book Title:" . "</th>" .
                "<th >" . "Book Author:" . "</th>" .
                "<th>" . "Book Edition:" . "</th>" .
                "<th>" . "Book Genre:" . "</th>" .
                "<th>" . "Book Department:" . "</th>" .
                "</tr>" .
                "<td>" . $rows["Book ID"] . "</td>" .
                "<td>" . $rows["Book Title"] . "</td>" .
                "<td>" . $rows["Book Author"] . "</td>" .
                "<td>" . $rows["Book Edition"] . "</td>" .
                "<td>" . $rows["Genre"] . "</td>" .
                "<td>" . $rows["Department"] . "</td>"
                . "</tr>" .
                "</table>";
        }
    }
?>
</body>
</html>
