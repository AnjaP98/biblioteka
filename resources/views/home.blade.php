<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="">
    <link rel="image_src" href="" />
    <link rel="canonical" href="" />

    <title>Bibilioteka</title>

    <link type="text/css" href="http://127.0.0.1:8000/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="http://127.0.0.1:8000/static/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="http://127.0.0.1:8000/static/css/theme.css" rel="stylesheet">
    <link type="text/css" href="http://127.0.0.1:8000/static/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <script type="text/javascript">
    var config = {};
    config.path = {};
    config.path.tpl = "http://localhost";
    config.path.ajax = "http://localhost";    
</script>


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
            height: 100px;
            text-align: center;
        }
        .btn-box-row_row-fluid{
           color: #333;
           

           
        }
       
    </style>

    <div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
               </a>
                <br><br>
                <a class="brand" href="http://127.0.0.1:8000/home" style="color:#fff;">BIBLIOTEKA</a>
            
        </div>
    </div>
</div>
<br>
<a href="{{ route('dodajclana') }}">
        <div style="align-self: center;" class="btn-box-row row-fluid">
            <button style="width: 250px; height: 100px;margin-left: 430px;
            " class="btn-box big span4 homepage-form-box" id="dodajclana">
                </i>
                <b>DODAVANJE ČLANA</b>
            </button>
    </a>                      
           
            <a href="{{ route('sviclanovi') }}">
            <button style="width: 250px; height: 100px" class="btn-box big span4 homepage-form-box" id="sviclanovi">
                <i class="icon-user"></i>
                <b>SVI ČLANOVI</b>
            </button></a>
        </div>
        <br>
        <br>
        <div  class="btn-box-row row-fluid">
        <a href="{{ route('dodajknjigu') }}">
            <button style="width: 250px; height: 100px;margin-left: 430px" class="btn-box big span4 homepage-form-box" id="dodajknjigu">
               
                <b>DODAVANJE KNJIGE</b>
            </button></a>
       
     
           
            <a href="{{ route('sveknjige') }}">
            <button style="width: 250px; height: 100px" class="btn-box big span4 homepage-form-box" id="sveknjige">
               
                <b> SVE KNJIGE</b>
            </button></a>
        </div>

      


</body>
</html>