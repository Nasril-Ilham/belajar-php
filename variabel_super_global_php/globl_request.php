<htnl>
<body>

<head>
    <style>
        .center{
            text-align : center;
            margin-top : 100px;
        }
    </style>
</head>

<div class = "center">
<form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
Name: <input type="text" name="fname">
<input type="submit">
<br>
</forn>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field
$name = $_REQUEST ['fname'];
if (empty($name) ) {
echo "Name is empty";
} else {
echo "nama :$name <br>";
}
};

?>

</div>
</body>
</htnl>