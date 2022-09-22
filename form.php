<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <?php
        $users = array(
            "Alex"  => "1234",
            "Enric"  => "4321",
            "Pepe"  => "0123",
            "Josep"  => "9876",
        );

        foreach ($users as $user => $password){
            if($user == $_POST["user"] & $password == $_POST["password"]){
                echo "<script>alert('WELCOME ".$_POST["user"]."')</script>";
            }
        }
    ?>
    <body>
        <form method="post">
            <label>USER: <input type="text" name="user"></label><br>
            <label>PASSWORD: <input type="password" name="password"></label><br>
            <input type="submit">
        </form>
    </body>
    <footer>

    </footer>
</html>