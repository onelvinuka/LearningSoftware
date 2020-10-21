<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning Tool</title>
	<link rel="stylesheet" href="css/style1.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	
	<link rel="stylesheet" href="SimpleCalculadorajQuery.css">
    <script src="SimpleCalculadorajQuery.js"></script>
</head>
<body>
	<div class="row col-sm-12" id="header" style="background-color: darkblue;">
		<div class="col-sm-12" align="center">
			<h1 align="center" style="color: #ffffff">COLUMN</h1>
		</div>	
	</div>

    <div class="row col-sm-12" id="header">
		<div class="col-sm-12" align="center">
			<h2 style="color:#f5dbb3">Effective Height</h2>
		</div>
    </div>
    
    <div class="row col-sm-12" id="content">
		<div class="col-sm-12" align="center" style="height:67vh;">
			
            <h5>
                Given the complexity of mathematical manipulation
            </h5>
		</div>
    </div>
	
    <div id="micalc"> </div>
	
    <div class="row col-sm-12" id="header" style="background-color: darkblue;">	
        <div class="col-sm-1" align="center">
            <button><img src="../images/paper/btn_back.png"></button>
        </div>
        <div class="col-sm-1 offset-sm-6" align="center">
            <button><img src="../images/paper/btn_next.png"></button>
        </div>
        <div class="col-sm-1" align="center">
            <button onclick="window.print()"><img src="../images/paper/btn_print.png"></button>
        </div>
        <div class="col-sm-1" align="center">
            <button onclick="window.location.href='calc.html'""><img src="../images/paper/btn_cal.png"></button>
        </div>
        <div class="col-sm-1" align="center">
            <button><img src="../images/paper/btn_home.png"></button>
        </div>
		<div class="col-sm-1" align="center">
            <button><img src="../images/paper/btn_exit.png"></button>
        </div>

    </div>
<br>


<script>
$("#button_calc").on("click", function() {
 $("#micalc").Calculadora({'EtiquetaBorrar':'Clear'});
});
</script>
</body>
</html>
