<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TweetMe</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row mx-3">
            <!-- <div class="col-md-12 mt-2">
                <a href="/" style="font-size:30px"><i class="fab fa-twitter"></i></a>
            </div> -->
            
            <div class="col-md-3 mt-2">
            <a href="/tweet" style="font-size:30px; margin-bottom:100px"><i class="fab fa-twitter"></i></a>
            <div class="list-group h5 my-2">    
                <a href="/tweet" class="@if(Request::is('tweet')) active @endif list-group-item list-group-item-action">
                <i class="fas fa-house-user"></i> Home
                </a>
                <a href="/explore" class="@if(Request::is('explore')) active @endif list-group-item list-group-item-action"><i class="fas fa-hashtag"></i> Explore</a>
                <a href="/profile/{{ Auth::user()->username }}" class="@if(Request::is('profile*')) active @endif list-group-item list-group-item-action"><i class="fas fa-user-alt"></i> Profile</a>
                <a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action"><i class="fas fa-sign-out-alt"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            </div>

            <!-- <div class="col-md-3 mt-2">
            <a href="/tweet" style="font-size:30px; margin-bottom:100px"><i class="fab fa-twitter"></i></a>
                <nav class="nav flex-column h5">
                <a class="nav-link @if(Request::is('tweet')) active @endif" href="/tweet"><i class="fas fa-house-user"></i> Home</a>
                <a class="nav-link @if(Request::is('explore')) active @endif" href="/explore"><i class="fas fa-hashtag"></i> Explore</a>
                <a class="nav-link @if(Request::is('profile*')) active @endif" href="/profile"><i class="fas fa-user-alt"></i> Profile</a>
                <a class="nav-link" href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action"><i class="fas fa-sign-out-alt"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </nav>
            </div> -->

            <!-- <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link @if(Request::is('tweet')) active @endif" data-toggle="pill" href="/tweet" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link @if(Request::is('explore')) active @endif" data-toggle="pill" href="/explore" role="tab" aria-controls="v-pills-explore" aria-selected="false">Explore</a>
                <a class="nav-link @if(Request::is('profile')) active @endif" data-toggle="pill" href="/profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                <a class="nav-link" data-toggle="pill" href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action" role="tab" aria-controls="v-pills-logout" aria-selected="false">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
            </div> -->
            <!-- <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                </div>
            </div>
            </div> -->


            <div class="col-md-5 mt-2">
                @yield('content')
            </div>

            <div class="col-md-4 mt-2">
            <form class="form-inline mb-2">
            <input class="form-control rounded-pill" type="search" placeholder="Search Twitter" aria-label="Search" style="width:100%">
            <button class="btn" type="submit"></button>
            </form>

            <div class="bg-light py-2 px-3 rounded-lg mb-3">
            <h4>Whats Happening</h4>
            </div>

            <footer class="text-secondary">
            <p> &#9400; 2020 - TweetMe, Inc</p>
            </footer>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>