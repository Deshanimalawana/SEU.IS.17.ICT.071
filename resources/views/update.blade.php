<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updated Form</title>
</head>
<body>
    <form action="/update" method="post">

        @csrf

        <input type="hidden" name="id" value="{{$detail['id']}}">

        Name: <input type="text" name="name" id="name" value="{{$detail['name']}}"><br><br>
        Username: <input type="text" name="username" id="username" value="{{$detail['username']}}"><br><br>
        Date of Birth: <input type="date" name="date" id="date" value="{{$detail['date']}}"><br><br>
        Email: <input type="email" name="email" id="email" value="{{$detail['email']}}"><br><br>
        Telephone No: <input type="text" name="phonenumber" id="phonenumber" value="{{$detail['phonenumber']}}"><br><br>
        NIC No: <input type="text" name="nic" id="nic" value="{{$detail['nic']}}"><br><br>
        Gender: <input type="text" name="gender" id="gender" value="{{$detail['gender']}}"><br><br>
        Password: <input type="password" name="password" id="password" value="{{$detail['password']}}"><br><br>
        Reenter Password: <input type="password" name="npassword" id="npassword" value="{{$detail['npassword']}}"><br><br>
         <input type="submit" value="UPDATE">

    </form>
</body>
</html>