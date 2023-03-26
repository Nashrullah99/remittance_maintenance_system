<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3da1a747b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Remittance maintenance system</title>
</head>
<body>
    <div class="header d-flex justify-content-between">
        <div class="logo m-3">
            <a href="{{ url('/index')}}"><img src="{{ asset('images/janata_bank-logo_signature.png') }}" alt="" width="" height=""></a>
        </div>
        <div class="profile d-flex align-item-center m-3" style="padding-right:1rem">
            <div>
                <p><strong>Mohammad Nashrullah Naum</strong> <br>
                Employee ID: JBL-123456<span><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form></span>
                </p>    
            </div>
            <div >
                <img src="{{ asset('images/naum.jpg') }}" alt="" width="65px" height="65px">
            </div>
        </div>
    </div>
    <div>
        <nav class="navbar navbar-expand-lg d-flex justify-content-evenly" style="background-color:#3285a8">
            <div>
                <a href="{{ route('root') }}" class="bttn" data-id="home">Home</a>
            </div>
            <div>
                <a href="{{ route('index') }}" class="bttn" data-id="add-member">Add member</a>
            </div>
            <div>
                <a href="{{ route('allmember') }}" class="bttn" data-id="see-allmember">See all member</a>
            </div>
            <div>
                <a href="{{ route('monthlyreport') }}" class="bttn" data-id="report">Monthly report</a>
            </div>
            <div>
                <a href="{{ route('sendmessage') }}" class="bttn" data-id="send-message">Send message</a>
            </div> 
            <form class="d-flex" action="{{ route('searchbeneficiary') }}" method="POST">
                @csrf
                <input class="form-control me-2 p-2" placeholder="Search beneficiary" aria-label="Search" name="searchId">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
    <!-- <div class="container-fluid mt-3" style="background-color: #3285a8">
        <p class="copy-right m-4">&copy; 2023-2024 Admission office, Bangladesh University of Professionals, Mirpur Cantonment, Dhaka-1216</p>
    </div> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}" ></script>
</body>
</html>