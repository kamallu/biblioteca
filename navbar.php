	<?php include('tooltip.php'); ?>			
	<div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
					<li class="divider-vertical"></li><li class=""><a  rel="tooltip"  data-placement="bottom" title="INICIO" id="home"   href="index.php"><i class="icon-home icon-large"></i>&nbsp;INICIO</a> </li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom" title="HORARIO" id="login" href="about.php"><i class="icon-info-sign icon-large"></i>&nbsp;HORARIO</a> 
					</li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom" title="INTRANET" id="login" href="librarian"><i class="icon-user icon-large"></i>&nbsp;INTRANET</a>
					</li>
					<li class="divider-vertical"></li>
					<li class="divider-vertical"></li>
					<li class="divider-vertical"></li>
				
					<li class="divider-vertical"></li>
					<li class="signup"><span class="sg"></span></li>
					</ul>
                    
                    </div>
                                <!--reloj-->
					<div style="color: white;
padding: 20px 50px 5px 50px;
float: right;
font-size: 16px;"> 
                     
 
<body onLoad="mueveReloj()"> 
<form name="form_reloj"> 
<input type="text" name="reloj" size="8" style="background-color :#600; color : White; font-family : Verdana, Arial, Helvetica; font-size : 12pt; text-align : center;" onFocus="window.document.form_reloj.reloj.blur()"></form>

  </div>
       <script language="JavaScript"> 
function mueveReloj(){ 
    momentoActual = new Date() 
    hora = momentoActual.getHours() 
    minuto = momentoActual.getMinutes() 
    segundo = momentoActual.getSeconds() 

    str_segundo = new String (segundo) 
    if (str_segundo.length == 1) 
        segundo = "0" + segundo 

    str_minuto = new String (minuto) 
    if (str_minuto.length == 1) 
        minuto = "0" + minuto 

    str_hora = new String (hora) 
    if (str_hora.length == 1) 
        hora = "0" + hora 

    horaImprimible = hora + " : " + minuto + " : " + segundo 

    document.form_reloj.reloj.value = horaImprimible 

    setTimeout("mueveReloj()",1000) 
} 
</script> 
	<!--reloj-->
                </div>
            </div>
        </div>
   

	     	