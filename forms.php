<!DOCTYPE html>
<html>
    
    <h4>Welcome, <?php echo $_POST['username'] ?></h4>
    
    
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
            
        <input type="submit" value="Submit" style="background-color:cadetblue;"/>
    </form>
</html>
