<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Message
    </h1>
    <p>Name:{{ $detail['name'] }}</p>
    <p>Email:{{ $detail['email'] }}</p>
    <p>Phone:{{ $detail['phone'] }}</p>
    <p>Subject:{{ $detail['subject'] }}</p>
    <p>Message:{{ $detail['message'] }}</p>
</body>
</html>