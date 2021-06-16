<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch Page</title>
</head>
<body>
    <table border="1" width="50%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Telephone No</th>
            <th>NIC NO</th>
            <th>Gender</th>

        </tr>

        @foreach ($data as $y )

        <tr>
            <td>{{$y['id']}}</td>
            <td>{{$y['name']}}</td>
            <td>{{$y['date']}}</td>
            <td>{{$y['phonenumber']}}</td>
            <td>{{$y['nic']}}</td>
            <td>{{$y['gender']}}</td>
            
        </tr>
            
        @endforeach

    </table>
</body>
</html>