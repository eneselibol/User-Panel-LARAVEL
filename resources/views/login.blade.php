<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Paneli</title>
    <link href="{{ asset('css/login-style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
@if(Session::has('status'))
    <div class="alert-div">
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ Session::get('status') }}
        </div>
    </div>
@endif
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form method="post" action="{{ route('user-register') }}">
            @csrf <!-- Form güvenliği için laravel tarafından oluşturulmuştur. -->
            <label for="chk" aria-hidden="true">Kayıt Ol</label>
            <input type="text" name="username" placeholder="Kullanıcı Adı" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="number" name="tel" placeholder="Telefon" required="">
            <input type="password" name="password" placeholder="Şifre" required="">
            <button>Kayıt Ol</button>
        </form>
    </div>

    <div class="login">
        <form method="post" action="{{ route('user-login') }}">
            @csrf <!-- Form güvenliği için laravel tarafından oluşturulmuştur. -->
            <label for="chk" aria-hidden="true">Giriş Yap</label>
            <input type="text" name="username" placeholder="Kullanıcı Adı" required="">
            <input type="password" name="password" placeholder="Şifre" required="">
            <button>Giriş Yap</button>
        </form>
    </div>
</div>
</body>
</html>
