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

    <link rel="stylesheet" href="css/student.css">
    <title>Kinondoni</title>
</head>

<body>
    <nav class="main-nav w-100">
        <div class="logo-div">
            <img src="images/logo2.png" alt="">
        </div>
        <div class="menu-div">
                
                <h3 class="ps-4">{{ $LoggedUserInfo['stud_name']}}</h3>
            </div>

        <div class="categories w-75">
            <div class=""></div>
            <div class=""></div>
            <a href="register_units"> <button class="nav_btn w-100"><span class="hov"></span>UNIT REGISTRATION</button></a>
            <a href="logout"> <button class="nav_btn w-100"><span class="hov"></span> LOGOUT</button></a>


            
        </div>
    </nav>
    <section class="main w-100">
       
        <hr class="w-75">
        <div class="units w-75">
            <div class="header w-100">
                <h2>Registered units</h2>
            </div>
            <hr>
            <div class="units-grid w-100">
                 

                @foreach ($my_units as $item)
                <div class="unit-card w-100">
                <div class="logo-div">
            <img src="images/logo2.png" alt="">
        </div>
                    <div class="sect-1">
                                                         

                        
                        <h2>{{$item->unit_name}}</h2>
                        <h4>{{$item->unit_code}}</h4>
                    </div>
                    <div class="course-info">
                        <div class="progress-container">
                            <div class="progress"></div>
                            <span class="progress-text">
                                COMPLETION
                            </span>
                        </div>
                        
                        
                        <a href="{{ url('course/'.$item->unit_id) }}"> <button class="button-54">contents</button></a>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
    
</body>

</html>