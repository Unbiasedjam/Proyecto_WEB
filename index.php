<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Bacal</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link type="text/css" href="layout/styles/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
        <br>
        <img src="imagenes/gdo.png" style="width:250px">
        <h2><p class="text-center">Inventarios Bacal</p></h2>
        
        <div class="row ">
            <!-- col.//                   Para administradores-->

            <aside class="col-sm-4"></aside>
            <aside class="col-sm-4">
                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
                        <hr>
                        <form method="post" action="admin.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" name="txtUser" class="form-control" placeholder="Login">
                                </div>
                                <!-- input-group.// -->
                            </div>
                            <!-- form-group// -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="txtPass" class="form-control" placeholder="******" type="password">
                                </div>
                                <!-- input-group.// -->
                            </div>
                            <!-- form-group// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            </div>
                            <!-- form-group// -->
                            <p class="text-center"><a href="#" class="btn">Sign In</a></p>
                            <p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
                        </form>
                    </article>
                </div>
            </aside>
            <!-- col.// -->
        </div>
        <!-- row.// -->
</body>

</html>