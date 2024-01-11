<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/login.css">
    <title>Kinondoni login</title>
</head>

<body>
<nav class="main-nav w-100">
    <div class="logo-div">
        <img src="images/logo2.png" alt="">
    </div>

    <div class="categories w-75">
        <div class=""></div>
        <a href="/"><button class="nav_btn w-100"><span class="hov"></span> HOME</button></a>
        

       
    </div>
</nav>
    <section class="login-body w-100">
        <form action="{{route('auth.check')}}" method="POST" class="form-control p-4 w-50">
            @csrf
            <div class="usr-input w-100">
                <h2>LOGIN</h2>
                <hr>
            </div>
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif

            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
            @endif
            <div class="usr_input w-100">
                
                <input type="email" name="email" required placeholder="Email" class="form-control" value="" placeholder="Enter your email here:">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="usr_input w-100">
                
                <input type="password" name="password" required class="form-control" value="" placeholder="password">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="usr_input w-100">
              
            </div>
            <button class="btn btn-secondary p-2 m-1 w-100" type="submit">login</button>
        </form>
    </section>


    

</body>

</html>