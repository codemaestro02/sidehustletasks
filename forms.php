<!DOCTYPE html>
<html>
    
    <?php
    if (isset($_POST['submitform'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $password = ['password'];
        
        echo "<h2>Welcome, </h2>". $username. "<h2>.</h2> <h4> You have been successfully signed up.</h4>"."<br>";
        echo "Your other details are as follows;"."<br>";
        echo "Your name is: ". $name . "<br>";
        echo "Your email is: ". $email . "<br>";
        echo "Your Date of Birth is: ". $date . "<br>";
        echo "Your password is: ". $password ."<br>";
        
    }
    ?>
    
    
    <form action="forms.php" method="POST" accept-charset="utf-8">
            
        <label for="name">What is your name:</label>
            
        <input type="text" name="name" id="name" placeholder="Enter your name..."/><br />
            
        <label for="date">What is your date of birth:</label>
            
        <input type="date" name="date" id="date" /><br />
            
        <label for="email">What is your email address:</label>
            
        <input type="email" name="email" id="email" placeholder="Enter your email address..." /><br />
            
        <label for="username">What is your username:</label>
            
        <input type="text" name="username" id="username" placeholder="Enter your username..."/><br />
            
        <label for="password">What is your password <i style="color:red;">(Do not share with anyone!)</i>:</label>
            
        <input type="password" id="password" name="password" placeholder="Enter your password..." /><br />
            
        <input type="hidden" name="form_submitted" value="1"/><br /><br />
            
        <button type="submit" name="submitform">Submit</button>
    </form>
</html>
