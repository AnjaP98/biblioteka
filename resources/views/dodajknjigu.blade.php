<!DOCTYPE html>
<html>
<head>
<title>Biblioteka - DODAJ CLANA</title>
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
        .btn-box-row_row-fluid{
           color: #333;
            
        }

        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
           
            font-style: bold;
        }
    </style>

    <div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a>
                <a class="brand" href="http://127.0.0.1:8000/home" style="color:#fff;">BIBLIOTEKA</a>
            
        </div>
    </div>
</div>
<br>
<H3> Dodavanje nove knjige</h3>
<form action=" {{ url('dodajknjigu')}} " method="POST">


<div class="Form-group mb-3" >
	<label for="">Naslov knjige</label>
<input type="text" name="naslov_knjige" class="form-control" style="height: 20px;width:200px">
</div>
<div class="Form-group mb-3" >
    <BR>
	<label for="">Ime autora</label>
<input type="text" name="autor_knjige" class="form-control" style="height: 20px;width:200px">
</div>
<BR><BR>
<div class="form-group mb-3">
<button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">SAČUVAJ</button>
</div>
{{ csrf_field() }}

</form>

</body>
</html>

