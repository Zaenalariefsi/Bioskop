<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="container-label">Bioskop XX <span></span></div>

            <div class="container-icon">
                <div class="circle"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>

            <div class="container-form">
                <form action="/home.php" method="POST">
                    <label for="username">username</label>
                    <input type="text" id="username" placeholder="Username anda" autofocus>
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Masukan Password anda">

                    <div class="changge-password">
                        Lupa password <a href="#">Click Disini</a>
                    </div>

                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>