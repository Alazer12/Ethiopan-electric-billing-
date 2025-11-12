<?php 
    require_once('head_html.php'); 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    require_once('../Includes/user.php');
    if ($logged==false) {
         header("Location:../index.php");
    } 
?>

<style type="text/css">
body {
    background-image: url(../assets/img/photo-1619252584172-a83a949b6efd.jpg);
    background-repeat: repeat-x;
}
</style>
<link href="../assets/css/css/style.css" rel="stylesheet" type="text/css">
<body class="btn-sm">

    <div id="wrapper">

        <?php 
            require_once("nav.php");
            require_once("sidebar.php");
        ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">
                
                <!-- Page Heading -->
                <html>
<head>
<title>Consumption</title>
	<script>
		function calculateSum() {
			var num1 = document.getElementById("num1").value;
			if (num1 <=50)
            {
            var con = (Number(num1) * 0.2730) + 10  ;
            document.getElementById("num2").value = 10;
            document.getElementById("num3").value = 0.2730;
            document.getElementById("num4").value = (con*(0.15));
            document.getElementById("result").value = (con)+(con*(0.15));
            }
            else if (num1 <=100)
            {
            var con = (Number(num1) * 0.7670) + 42  ;
            document.getElementById("num2").value = 42;
            document.getElementById("num3").value = 0.7670;
            document.getElementById("num4").value = (con*(0.15));
            document.getElementById("result").value = con+(con*(0.15));
            
            }
            else if (num1 <=200)
            {
            var con = (Number(num1) * 1.6250) + 42  ;
            document.getElementById("num2").value = 42;
            document.getElementById("num3").value = 1.6250;
            document.getElementById("num4").value = (con*(0.15));
            document.getElementById("result").value = con+(con*(0.15));
            
            }
          
            else if (num1 <=300)
            {
            var con = (Number(num1) * 2) + 42  ;
            document.getElementById("num2").value = 42;
            document.getElementById("num3").value = 2;
            document.getElementById("num4").value = (con*(0.15));
            document.getElementById("result").value = con+(con*(0.15));
            
            }
            else if (num1 <=400)
            {
            var con = (Number(num1) * 2.2000) + 42  ;
            document.getElementById("num2").value = 42;
            document.getElementById("num3").value = 2.2;
            document.getElementById("num4").value = (con*(0.15));
            document.getElementById("result").value =con+(con*(0.15));
            
            }
            else if (num1 <=500)
            {
            var con = (Number(num1) * 2.4050) + 42  ;
            document.getElementById("num2").value = 42;
            document.getElementById("num3").value = 2.4050;
            document.getElementById("num4").value = (con*(0.15));
            document.getElementById("result").value = con+(con*(0.15));
            
            }
            else   
            {
            var con = (Number(num1) * 2.4810) + 42  ;
            document.getElementById("num2").value = 42;
            document.getElementById("num3").value = 2.4810;
            document.getElementById("num4").value = (con*(0.15));
            document.getElementById("result").value = con+(con*(0.15));
            
            }
			
		}
	</script>
</head>
<body>
	<h1><span style="text-align: center"></span> <span style="text-align: center"></span><span style="text-align: left"></span><span style="text-align: center"></span>Consumption</h1>
<label for="consumption">CONSUMPTION UNIT<strong>:</strong></label>
	<strong>
	<input name="num1" type="number" class="alert-secondary" id="num1" >
	<br><br>
	<button type="button" onclick="calculateSum()">Calculate</button>
	</strong>
<p>
	  <strong>
      </strong></p>
	<table width="511" height="165" border="1" class="alert-light-primary">
	  <tbody>
	    <tr>
	      <td width="138"><strong style="color: #000000; font-size: 2rem;"> RATE PER UNIT</strong></td>
	      <td width="131"><strong>
	        <input name="num3" type="number" class="alert-light-secondary" id="num3" readonly="readonly">
	      </strong></td>
        </tr>
	    <tr>
	      <td class="text-gray-600"><strong style="font-size: 2rem; color: #000000;">SERVICES CHARGE</strong></td>
	      <td><strong>
	        <input name="num2" type="number" class="alert-secondary" id="num2" readonly="readonly">
	      </strong></td>
        </tr>
	    <tr>
	      <td><strong style="font-size: 2rem; color: #000000;">VAT:15%</strong></td>
	      <td><strong>
	        <input name="num4" type="number" class="alert-secondary" id="num4" readonly="readonly">
	      </strong></td>
        </tr>
	    <tr>
	      <td><strong style="color: #000000; font-size: 2rem;">TOTAL PAYMENT</strong></td>
	      <td><input name="result" type="text" class="alert-secondary" id="result" readonly></td>
        </tr>
      </tbody>
</table>
	<p><strong>
	  <label for="Services Charge"><br>
    </label>
	  <br>
</strong></p>
	<p>s</p>
	<p><strong><br>
</strong></p>
</body>
</html>

    </div>
    <!-- /#wrapper -->

 <?php 
    require_once("footer.php");
    require_once("js.php");
?>

</body>

</html>

