<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .wrapper-login {
            width: 100%;
            height: auto;

            text-align: center;
            align-items: center;
        }
        form {
            background: #FEFAF9;
            border: 1px solid;
            width: 50%;
            margin: 0 auto;
            padding: 40px;
        }
    </style>
</head>

<body>
    <div class="wrapper-login">
        <form action="{{ route('postLogin') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="tai_khoan" placeholder="Account">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Success</button>
        </form>
    </div>
</body>

</html>
