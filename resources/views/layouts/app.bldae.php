<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    
<header>
    <nav class="main-nav">
        <a href="#">
            <img src="{{asset('icon.png')}}" class="logo" alt="">
        </a>
        <nav class="links">
            <a href="#">Despre</a>
            <a href="#">Produse Metodice</a>
            <a href="#">Exemple De Lucrari</a>
        </nav>
        <div class="home-content">
            <h1>Platforma De Promovare</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta commodi reiciendis aut debitis ipsum! Suscipit provident unde rerum cumque? Consequatur amet aspernatur atque eveniet minus odio deserunt blanditiis delectus exercitationem.</p>
            <div class="buttons">
                <a href="" class="register">Inscriere</a>
                <a href="" class="login">Autentificare</a>
            </div>
        </div>
    </nav>
</header>
</body>
</html>