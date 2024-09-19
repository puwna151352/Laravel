<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>
<nav>
<ul>
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="{{url('/lecturers')}}">Lecturer List</a></li>
</ul>
</nav>
<h2>Lecturer List</h2>
<form action="/lecturers/insert" method="post">
    @csrf
    Lecturer :<br>
    <input type="text" name="lec_name"><br>
    Email :<br>
    <input type="email" name="email"><br>
    Major :<br>
    <select  name="major">
    <option value="Computer Science">Computer Science</option>
    <option value="Information Technology">Information Technology</option>
    <option value="Geo-informatics">Geo-informatics</option>
    <option value="Artificial Intelligence">Artificial Intelligence</option>
    <option value="Cybersecurity">Cybersecurity</option>
    </select><br>
    <input type="submit" value="Add Lecturer">
</form>
<h1>Lecturer Management</h1>

<table>

    <table border="1">
    <thead>
        <tr>
            <th class="a">Lecturer ID</th>
            <th class="a">Lecturer Name</th>
            <th class="a">Email</th>
            <th class="a">Major</th>
            
        </tr>
    </thead>
    <tbody>
    <h2>Lecturer List {{ count($lecturers) }} lecturers</h2> 
    @foreach($lecturers as $lecturers)
            <tr>
            <td>{{$lecturers->id}} </td> 
            <td>{{$lecturers->lec_name}} </td> 
            <td>{{$lecturers->email}} </td> 
            <td>{{$lecturers->major}} </td> 
            <td>
                <button class="btn-danger"  onclick="confirmDelete({{$lecturers->id}})">Delete</button>
        </td>
                </tr>
        @endforeach
</body>

    <script>
        function confirmDelete(lec_id){
            if(confirm("Are you sure you went to delete this lecturers")){
                window.location.href="/lecturer/delete" +lec_id;
            }

        }
    </script>
</html>

