<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class=”navbar navbar-expand-lg navbar-light bg-light”>
 <a class=”navbar-brand” href=”#”>My first navbar</a>
 <button class=”navbar-toggler” type=”button” data-toggle=”collapse” data-target=”#
navbarSupportedContent” aria-controls=”navbarSupportedContent” aria-expanded=”false”
aria-label=”Toggle navigation”>
 <span class=”navbar-toggler-icon”></span>
 </button>
 <div class=”collapse navbar-collapse” id=”navbarSupportedContent”>
 <ul class=”navbar-nav mr-auto”>
 <li class=”nav-item active”>
 <a class=”nav-link” href=”#”> <span class=”sr-only”>(current)</span></a>
 </li>
 <li class=”nav-item”>
 <a class=”nav-link” href=”#”>Link 1</a>
 </li>
 <li class=”nav-item”>
 <a class=”nav-link disabled” href=”#”>Link Disabled</a>
 </li>
 </ul>
 <form class=”form-inline my-2 my-lg-0”>
 <input class=”form-control mr-sm-2” type=”text” placeholder=”Search” arialabel=”Search”>
 <button class=”btn btn-outline-success my-2 my-sm-0” type=”submit”>Find 
Stuff</button>
 </form>
 </div>
</nav>
<div>
    @yield('content')
    @yield('content1')
    @yield('content2')
</div>
</body>
</html>