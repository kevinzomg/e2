<html>

<body>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
    <?php var_dump($_POST["name"]);
    gettype($_POST["name"]); ?>
</body>

</html>