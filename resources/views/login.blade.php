<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .body{
            background-color: #eeeeee;
        }
        #container1{
            margin-top: 80px;
            max-width: 35%;
            padding: 5%;
            height: 400px;
            padding-left: 6%;
            padding-right: 6%;
            padding-bottom: 30%;
        }
    </style>
</head>
<body class="body">
    <div class="container-fluid">
        <div id="container1" style="border-radius: 20px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" class="container bg-white">
           <center> <h2><b>Login</b></h2></center>
            <form action="/login/req" method="get">
            {{csrf_field()}}
                <label for="" class="form-label mt-3 mb-1">Username</label>
                <input name="username" type="text" placeholder="Masukan username" autocomplete="off" class="form-control" required>
                <label for="" class="form-label mt-3 mb-1">Password</label>
                <input type="password" name="password" placeholder="Masukan Password" class="form-control" required>
                @if ($cek3 == 1)
                <div class="text-danger mt-2">
                        Password atau Username salah
                    </div>
                @endif
                <input type="submit" name="submit" value="Login" class="btn btn-primary mt-4" style="padding-left: 134px; padding-right: 134px;">
            </form>
        </div>
    </div>
</body>
</html>
