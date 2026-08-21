<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Submit">
    </form>
    <Javascript>
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.querySelector('input[name="name"]').value;
            alert('Hello, ' + name + '!');
        });    </Javascript>
        <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault();
                const name = document.querySelector('input[name="name"]').value;
                alert('Hello, ' + name + '!');
            });
        </script>
        <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault();
                const name = document.querySelector('input[name="name"]').value;
                alert('Hello, ' + name + '!');
            });
        </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        echo "<h1>Hello, $name!</h1>";
    }
    ?>
    
</body>
</html>