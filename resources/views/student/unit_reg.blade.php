<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    

    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/student.css">
    <title>kinondoni</title>
</head>

<body>
    <nav class="main-nav w-100">
        <div class="logo-div">
            <img src="/images/logo2.png" alt="">
        </div>

        <div class="categories w-75">
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <a href="student" class="w-100"><button class="nav_btn w-100"><span class="hov"></span> BACK</button></a>

            <div class="menu-div">
                <h3 class="ps-4">{{ $LoggedUserInfo['stud_name']}}</h3>
            </div>
        </div>
    </nav>
    <section class="main-section w-100 m-0">
        <div class="header w-75">
            <h3>AVAILABLE FOR REGISTRATION</h3>
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
        <div class="registration-section w-75">
        
            @foreach ($unit as $item)
            <div class="unit-card-reg">
                <div class="card-details w-100">
                    <h6>UNIT: </h6>
                    <h4>{{$item->unit_name}}</h4>
                    <p>Chapters: <span class="chapters">{{$item->unit_chapters}}</span></p>
                    
                    <hr class="w-50">
                    <span class="chapters">{{$item->unit_desc}}</span>
                    <hr>
                   

                </div>
                <form action="{{url('reg_unit/'.$item->id )}}" method="post">@csrf<button class="register-btn">REGISTER</button></form>

            </div>
            @endforeach
        </div>
   
</body>

</html>