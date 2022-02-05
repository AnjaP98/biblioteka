<!DOCTYPE html>
<html>
<head>
<title> Izmeni knjigu</title>
</head>
<body>
<form action="/izmeniknjigu/{{$knjiga->id}}" method="POST">
                    <div class="form-group">
                        <input type="text" name="naslov_knjige"   ></input>  
                      
                    </div>
                    <div class="form-group">
                        <input type="text" name="autor_knjige"   ></input>  
                      
                    </div>

                    <div class="form-group">
                        <button type="submit">Izmeni</button>
                    </div>
                    {{ csrf_field() }}
                </form>
</body>
</html>