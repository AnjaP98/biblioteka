<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sve knjige</title>
  <link type="text/css" href="http://127.0.0.1:8000/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="http://127.0.0.1:8000/static/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="http://127.0.0.1:8000/static/css/theme.css" rel="stylesheet">
    <link type="text/css" href="http://127.0.0.1:8000/static/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


 

</head>
<body>


<style>
      .module-head{
            background-color: #9400D3;
            color:#fff;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            font-style: bold;
        }
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            font-style: bold;
        }
        .module-head h3{
            color:#fff;
        }

        .widget-menu{
            background: #9400D3 !important;
            color:#fff;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            font-style: bold;
        }
      .navbar-inner{
            background: cadetblue !important;
            color:#fff;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            font-style: bold;
        }

        </style>
  
<div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a>
                <a class="brand" href="http://127.0.0.1:8000/home" style="color:#fff;">Početna</a>
            
        </div>
    </div>
</div>
<br>
       
                    <table class="table table-hover" style="align-self: center;">
                        <thead>
                            <tr>
                                <th style="height: 100px;width: 50px; " >ID</th>
                                <th style="height: 100px;width: 200px;">Naslov knjige</th>
                                <th style="height: 100px;width: 200px;">Autor knjige</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sveknjige as $knjiga)
                                <tr>
                                    <td style="height: 20px;width: 50px;">{{ $knjiga->id }}</td>
                                    <td style="height: 20px;width: 200px;">{{ $knjiga->naslov_knjige }}</td>
                                    <td style="height: 20px;width: 200px;">{{ $knjiga->autor_knjige }}</td>
                                    <td>   <a href="{{url('obrisiknjigu/'.$knjiga->id)}}"  style="color: black;">Obriši</a></td>
                                   <!-- <td><a href = "{{url('izmeniknjigu/'.$knjiga->id)}}">Izmeni</a></td> -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                


    </div>

</body>
</html>