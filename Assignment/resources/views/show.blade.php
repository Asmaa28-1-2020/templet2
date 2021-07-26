<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            h1{
               background-color: greenyellow;
               text-align: center;
               color: white;
                
                
                
            } 
            
            
            
            
        </style>
        
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <h1>welcome</h1>
        
        <table class="table border"border="3">
            
            <tr    background-color: cadetblue;
    color: white;
} style="">
                <th>id</th> 
                <th>fname</th> 
                <th>lname</th> 
                <th>email</th> 
                <th>password</th> 
                <th>telephone</th> 
                <th>gender</th>
                <td>delete</td> 
            <td>edit</td> 
            </tr>
            
            <tr>
            @foreach($rows as $data)
            <td>{{$data->id}}</td> 
           <td>{{$data->fname}}</td> 
             <td>{{$data->lname}}</td> 
            <td>{{$data->email}}</td> 
            <td>{{$data->password}}</td>
              <td>{{$data->telephone}}</td> 
            <td>{{$data->gender}}</td> 
            <td> <a  class="btn btn-danger btn-sm" href="{{$data->id}}/delete">delete</a></td> 
            <td ><a  class="btn btn-primary btn-sm"href="{{$data->id}}/edit">edit</a></td> 
            </tr>
            @endforeach
            
        </table>
        </div>
        </div>
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
