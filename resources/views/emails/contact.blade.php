<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .panel
    {
      max-height: 1000px;
      border: none;
      border-radius: 5px;
      background: #ffffff;

    }
    .msg
    {
        max-height: 200px;
        border: none;
        background: #ccc;
        font-size: 20px;
        border-radius: 2px;
    }
    </style>
</head>
<body class="ppanel">
    Name: {{ $contact['name'] }}
    <br>
    <hr>
   Subject: {{$contact['subj']}}
   <br>
   <hr>
   E-mail: {{ $contact['email'] }}
   <br>
   <hr>
   Message: <br>
   <div class="msg"> {{ $contact['msg'] }}</div> 
</body>
</html>
