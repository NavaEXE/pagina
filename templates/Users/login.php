<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGMADMIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>



<style>
    
    .gray-bg:before{

	content:'';
	position: absolute;
        top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background-color: rgba(0,0,0,0.6);

    }
    input{
        
        color: white;
        font-size: 18px;
    }
    
    </style>

<body class="gray-bg" style="background:url('/webroot/img/login.jpg');background-size: contain;">

    <div style="color:white" class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img style="width: 360px;" class="img" src="/webroot/img/newlogo.png"     alt=""></h1>

            </div>
   
            <h3 style="font-size:26px">Bienvenido</h3>
            <p>Es necesario contar con un usuario y contraseña para acceder a nuestro servicio.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Iniciar Sesion</p>

<div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset style="margin-bottom: 10%;">
        <legend><?= __('Porfavor ingrese un usuario y una contraseña') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login'),['class'=>'btn btn-primary block full-width m-b']); ?>
    <?= $this->Form->end() ?>
</div>
    
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>

