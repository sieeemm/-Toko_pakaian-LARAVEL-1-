<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >

            <div class="remember-forgot">
                <label ><input type="checkbox">remember me</label>
                
            </div>

            
            
            

            <div class="btn-container">
                <button type="submit" class="save-btn">Save</button>
                <button type="reset" class="cancel-btn">Cancel</button>
            </div>

            
            
        </form>
       
    </div>
</body>
</html>