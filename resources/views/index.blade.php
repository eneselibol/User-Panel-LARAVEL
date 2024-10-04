<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ana Sayfa</title>
    <link href="{{ asset('css/index-style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
@if(Session::has('update-status'))
    <div class="alert-div">
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ Session::get('update-status') }}
        </div>
    </div>
@endif
<div class="wrapper">
    <div class="login-box">
        <div class="grid-container">
            <div class="grid-item"><h3 class="info-text">Kullanıcı Bilgileri</h3></div>
            <div class="grid-item"> <a href="{{ route('log-out') }}" class="log-out"><span class="fa fa-sign-out"></span></a></div>
        </div>
        <form class="form-container" method="post" action="{{ route('user-update') }}">
            @csrf
            <div class="input-div">
                <label class="label-text">Kullanıcı Adı</label>
                <div class="input-addon">
                    <input class="form-element input-field" name="user_name" type="text" value="{{$userProfile->user_name}}" readonly>
                    <button class="input-addon-item">
                        <span class="fa fa-user"></span>
                    </button>
                </div>
            </div>

            <div class="input-div">
                <label class="label-text">Email</label>
                <div class="input-addon">
                    <input class="form-element input-field" name="email" placeholder="Email" value="{{$userProfile->email}}" type="email">
                    <button class="input-addon-item">
                        <span class="fa fa-envelope"></span>
                    </button>
                </div>
            </div>

            <div class="input-div">
                <label class="label-text">Telefon Numarası</label>
                <div class="input-addon">
                    <input class="form-element input-field" name="tel" placeholder="Telefon" value="{{$userProfile->tel}}" type="text">
                    <button class="input-addon-item">
                        <span class="fa fa-phone"></span>
                    </button>
                </div>
            </div>

            <div class="input-div">
                <label class="label-text">Cinsiyet</label>
                <div class="input-addon">
                    <select class="form-element input-field" name="gender" style="background-color: white;height: 100%">

                        <option value="0" @if($userProfile->gender == 0) selected @endif>Seçiniz..</option>
                        <option value="1" @if($userProfile->gender == 1) selected @endif>Erkek</option>
                        <option value="2" @if($userProfile->gender == 2) selected @endif>Kadın</option>
                    </select>
                    <button class="input-addon-item">
                        <span class="fa fa-user"></span>
                    </button>
                </div>
            </div>

            <div class="input-div">
                <label class="label-text">Adres</label>
                <div class="input-addon">
                    <input class="form-element input-field" name="address" value="{{$userProfile->address}}" placeholder="Adres" type="text">
                    <button class="input-addon-item">
                        <span class="fa fa-location-arrow"></span>
                    </button>
                </div>
            </div>

            <div class="input-div">
                <label class="label-text">Meslek</label>
                <div class="input-addon">
                    <input class="form-element input-field" name="job" value="{{$userProfile->job}}" placeholder="Meslek" type="text">
                    <button class="input-addon-item">
                        <span class="fa fa-briefcase"></span>
                    </button>
                </div>
            </div>


            <input class="form-element is-submit" type="submit" value="Kaydet">
        </form>
    </div>
</div>
</body>
</html>
