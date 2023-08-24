<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/style.css') }}">
    <title>Asri Single Window</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/asw.png') }}" type="image/icon type">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100 " style="background-color: #A0BFE0">
                <div class="sidebar-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ Vite::asset('resources/images/asrimotor-logo.png') }}" alt=""
                            style="width: 100%">
                    </a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item active">
                        <a href="#" class="sidebar-link collapsed">
                            <i class="fa-solid fa-sliders pe-2 "></i>
                            Dashboard
                        </a>
                    </li>
                    
            
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="fa-regular fa-user pe-2 "></i>
                            setting
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Change password</a>
                            </li>
                             <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Logout</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </aside>


        <!-- Main Component -->
        <main>
            @yield('test')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ Vite::asset('resources/js/script.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/active.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datapicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</body>

</html>
