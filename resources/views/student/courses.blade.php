<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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
            <a href="{{route('student')}}" class="w-100"><button class="nav_btn w-100"><span class="hov"></span> BACK</button></a>

            <div class="menu-div">
                <h3 class="ps-4">{{ $LoggedUserInfo['stud_name']}}</h3>
            </div>
        </div>
    </nav>
    <section class="unit w-100">
        <div class="last">
            <div class="unit-name w-75">
            <h4>{{$unit->unit_code}}</h4>
                <h2>{{$unit->unit_name}}</h2>
                
            </div>
            <div class="lecturer w-25">
                <p> {{$unit->unit_lecturer}}</p>
            </div>
        </div>
        @foreach ($unit_coursework as $item)
        <div class="content w-100">
            <h4>{{$item->cwork_head}}</h4>
            
            <p>{{$item->cwork_desc}}</p>

           
        </div>
        @endforeach

    </section>
   
</body>

</html>