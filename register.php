<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/axiforma" rel="stylesheet">
    <title>Register</title>
</head>
<style>

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #444246;
        
    }

    body h1 {
        font-size: 36px;
        font-weight: 600;
        color: #FFFFFF;

    }
    
    form{
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        text-align: center;
        background:#1297FD;
        margin: 50px;
        padding: 50px 100px;
        border-radius: 0.5rem;
        color: #FFFFFF;
        align-content: center;
        font-size: 24px;
    }

    .dew {
        margin-left: 22px;
    }
    
    button{
        margin-left: 80px;
       margin-top: 20px;
       border: none;
       align-items: center;
       padding: 6px 12px;
       gap: 8px;
       border-radius: 9px;
       color: #444246;
       background-color: white;
       width: 100px;
       height: 35px;
       font-weight: 600;
       font-size: 12px;
       white-space: nowrap;
       text-align: center;
       
    }
</style>
   
    <body>
        <h1>Sign Up</h1>
        <form action="user_data.php" method="POST">
            <label for="name">
                Name: <input type="text" name="name" class="dew">
            </label> <br>
            <label for="email">
                Email: <input type="text" name="email" class="dew">
            </label> <br>
            <label for="country">
                Country: <input type="text" name="country">
            </label> <br>
            <label for="gender">
                Gender: <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            </label> <br>
            <label for="birthday">
                Date of Birth: <input type="date" name="birthday">
            </label> <br>


            <button type="submit">Register</button>
            
        </form>
</body>
</html> 