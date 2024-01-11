<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/login.css">
    <title>KINONDONI</title>
</head>

<body>
    
    <section class="login-body w-100">
        <form action="{{route('auth.save')}}" method="POST" class="form-control p-4 w-50">
            @csrf
            <div class="usr-input w-100">
                <h2>ADD STUDENT</h2>
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
            
            <input type="text" name="name" required placeholder="Full names" class="form-control" value="" >
            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>
            <div class="usr_input w-100">
                
                <input type="email" name="email" required placeholder="school email" class="form-control" value="">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="usr_input w-100">
                
                <input type="password" name="password" required placeholder="password" required class="form-control" value="">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="usr_input w-100">
                
                <input type="password" name="password_confirm" required placeholder="confirm password" required class="form-control" value="">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            
           
            <button class="btn btn-secondary p-2 m-1 w-100" type="submit">ADD</button>
        </form>
    </section>


    

</body>

</html>