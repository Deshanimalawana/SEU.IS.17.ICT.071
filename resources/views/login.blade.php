<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
   <form action="check" method="post">
       @csrf

       Name: <input type="text" name="name" id="name"><br><br>
       Username: <input type="text" name="username" id="username"><br><br>
       Date of Birth: <input type="date" name="date" id="date"><br><br>
       Email: <input type="email" name="email" id="email"><br><br>
       Telephone No: <input type="text" name="phonenumber" id="phonenumber"><br><br>
       NIC No: <input type="text" name="nic" id="nic"><br><br>
       Gender: <input type="text" name="gender" id="gender"><br><br>
       Password: <input type="password" name="password" id="password"><br><br>
       Reenter Password: <input type="password" name="npassword" id="npassword"><br><br>
        <input type="submit" value="SUBMIT">
</form> 
</body>
</html>