<!DOCTYPE html>
<html>
    <head>
        <!--  500 0.6      <link rel="shortcut icon" href="i.ico"/>-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=0.5, user-scalable=no" />



        <title><?php echo $miapp ?></title>
        <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <style type="text/css">
            body {padding-top: 80px;}
            /*            table{font-size: 11px;}*/

            .glyphicon {
                padding-right: 8px;
            }
            .panel { 
                /*                box-shadow: 0px 5px 20px #e6e6e6; */
                /*                box-shadow: 0px 10px 20px #b3b3b3; */
/*                box-shadow: 0px 20px 50px black; */
            } 

            .table-condensed > thead > tr > th,
            .table-condensed > tbody > tr > th,
            .table-condensed > tfoot > tr > th,
            .table-condensed > thead > tr > td,
            .table-condensed > tbody > tr > td,
            .table-condensed > tfoot > tr > td {
                padding: 1px;                 
                font-size: 12px;

            }

            .btn {
                border-radius: 0px;
            }

        </style>

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"> <strong> <?php echo $miapp ?></strong></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><span class="glyphicon glyphicon-book" aria-hidden="true"> </span>Lista</a></li>
                        <li><a href="dashb.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"> </span>Estatus</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"> </span>Exportar</a></li>
                        <li><a href="acercade.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"> </span>Acerca de</a></li>                
                    </ul> 
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><?php echo "OPCIONES DE $_SESSION[username]" ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="importar.php"><span class="glyphicon glyphicon-import" aria-hidden="true"> </span>IMPORTAR CD</a></li>
                                <li role="separator" class="divider"></li>
                                <li ><a href="users.php"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span>USUARIO</a></li>
                                <li role="separator" class="divider"></li>

                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span>CERRAR SESION</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <img src="img/logo.png" width="200px" alt=""/>
            <br />






