<!DOCTYPE html>
<html>
<style>
    a:link { 
  text-decoration: none; 
} 
a:visited { 
  text-decoration: none; 
} 
a:active { 
  text-decoration: none; 
}
</style>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><b>Student Management Project Laravel11</b></a>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%">
                    <div class="w3-bar-item w3-teal w3-button">
                        <a href="/" class="a" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'"><h3><b>Home</b></h3></a>
                    </div>
                    <a href="{{route('indexstudents')}}" class="w3-bar-item w3-button">Student</a>
                    <a href="{{route('indexteachers')}}" class="w3-bar-item w3-button">Teacher</a>
                    <a href="{{route('indexcourses')}}" class="w3-bar-item w3-button">Courses</a>
                    <a href="{{route('indexbatches')}}" class="w3-bar-item w3-button">Batches</a>
                    <a href="{{route('indexenrollments')}}" class="w3-bar-item w3-button">Enrollment</a>
                    <a href="#" class="w3-bar-item w3-button">Payment</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
