<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Santiago San</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Minha Loja</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Downloads</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ajuda
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control rounded" placeholder="Search">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registar</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row col-md-12" style="padding:15px;">
            
                <div class="card col-md-2" style="padding:15px;">
                    <img class="card-img-top" src="{{ asset('images/1.jpg')}}" class="card-img-top" width="150px" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card col-md-2" style="padding:15px;">
                    <img class="card-img-top" src="{{ asset('images/2.jpg')}}" class="card-img-top" width="150px" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card col-md-2" style="padding:15px;">
                    <img class="card-img-top" src="{{ asset('images/3.jpg')}}" class="card-img-top" width="150px" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card col-md-2" style="padding:15px;">
                    <img class="card-img-top" src="{{ asset('images/4.jpg')}}" class="card-img-top" width="150px" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card col-md-2" style="padding:15px;">
                    <img class="card-img-top" src="{{ asset('images/5.jpg')}}" class="card-img-top" width="150px" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card col-md-2" style="padding:15px;">
                    <img class="card-img-top" src="{{ asset('images/6.jpg')}}" class="card-img-top" width="150px" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="card col-md-2" style="padding:15px;">
                    <img class="card-img-top" src="{{ asset('images/7.jpg')}}" class="card-img-top" width="150px" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>          

            </div>
            <hr>

                <ul class="pagination pagination-lg">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul> 
        </div>
    </body>
</html>
