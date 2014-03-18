<?php 
include('includes/conexion.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de búsqueda de tesis y pasantías de Ingeniería Metalúrgica</title>
<meta name="keywords" content="tesis, pasantias, unexpo, metalurgia" />
<meta name="description" content="Sistema de búsqueda de tesis y pasantías de Ingeniería Metalúrgica" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_top">
        <div id="logounexpo"></div>
        <div id="titulocentral">
        	Sistema de Búsqueda de Tesis y Pasantías de Ingeniería Metalúrgica
        </div>
        <div id="logometalurgia"></div>
	</div>
	<div id="templatemo_header">
    	<div id="site_title">
        <!--Aqui va el titulo del sitio-->
        	<a>SBTPIM</a>
        </div>
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.html" class="home">Inicio</a></li>
                <li><a href="nosotros.html" class="services">Nosotros</a></li>
                <li><a href="gallery.html" class="gallery">Foto - Galería</a></li>
                <li><a href="buscador.php" class="selected news">Buscador</a></li>
                <li class="last"><a href="contact.html" class="contact">Contacto</a></li>
            </ul>
        </div> <!-- end of templatemo_menu -->
        <div><a href="http://es.hiresimage.com" title="es.hiresimage.com" class="top"  target="_blank"><img src="images/top.png" alt="es.hiresimage.com"  /></a></div>
    </div> <!-- END of header -->
   
    <div id="templatemo_main">
    	<div class="col_1 no_margin_right">
        <?php 
		extract($_GET);
		?>
        <div id="templatemo_search">
        	<h3>Búsqueda de Pasantías y Tesis</h3>
        	<form action="buscador.php" method="get">
            	<input class="txt_field" type="text" name="busqueda" value="<?php echo $busqueda; ?>" />
                <table width="70%">
                	<tr>
                    	<td align="right"><label>Tipo de Investigación: </label></td>
                        <td align="right"><select id="tipo" name="tipo">
                        	<option value="">Todas</option>
                            <option value="0">Pasantias</option>
                            <option value="1">Tesis</option>
                        </select></td>
                        <script>
							document.getElementById('tipo').value = '<?php echo $tipo; ?>';
						</script>
                	</tr>
                    <tr>
                    	<td align="right"><label>Categoría: </label></td>
                        <td align="right"><select name="categoria" id="categoria">
                        	<option value="">Todas</option>
                            <?php $sql = "SELECT * FROM categoria";
								  $rs = mysql_query($sql);
								  while($fila = mysql_fetch_assoc($rs)):
							?>
                            	<option value="<?php echo $fila['id'] ?>"><?php echo $fila['nombre'] ?></option>
                            <?php endwhile;?>
                        </select></td>
                        <script>
							document.getElementById('categoria').value = '<?php echo $categoria; ?>';
						</script>
                	</tr>
                </table>
                <input type="submit" value="Buscar" style="float:right; margin-right:70px;" /> 
            </form>
        
        </div>
        <?php 
		
		$sql = "SELECT p.id,titulo, tematica,id_categoria,nombre, tipo, autor, tutor, jurado, ubicacion, resumen, cota, ruta, DATE_FORMAT(fechaPresentacion,'%d-%m-%Y') fechaPresentacion,(MATCH (titulo,tematica, autor, tutor, jurado, resumen, cota) AGAINST ('*$busqueda*' IN BOOLEAN MODE)) Puntuacion FROM proyecto p INNER JOIN categoria c ON(p.id_categoria=c.id) WHERE MATCH (titulo,tematica, autor, tutor, jurado, resumen, cota) AGAINST ('*$busqueda*' IN BOOLEAN MODE) ";
		
		if($tipo!='')
			$sql.=" AND tipo = $tipo ";
		if($categoria!='')
			$sql.=" AND id_categoria = $categoria ";	
		$sql.= "ORDER BY Puntuacion DESC";	
			
		
		$rs = mysql_query($sql);
		if($rs):
		?>
        <div id="busqueda">
        	<?php while($fila = mysql_fetch_assoc($rs)): ?>
            
            <div class="resultado">
            	<h4>Título: <em><a href="admin/app/webroot/files/proyecto/ruta/<?php echo $fila['id']."/".$fila['ruta']; ?>" target="_blank"><?php echo $fila['titulo']; ?></a></em></h4>
                <h5>Temática: <em><?php echo $fila['tematica']; ?></em></h5>                
                <h6>Categoría: <em><?php echo $fila['nombre']; ?></em></h6>
                <h6>Tipo: <em><?php switch($fila['tipo']){
					case 0: echo "Pasantía"; break;
					case 1: echo "Tesis"; break;
					} ?></em></h6>
                Autor:  <?php echo $fila['autor']; ?>&nbsp;|&nbsp;&nbsp;Tutor: <?php echo $fila['tutor']; ?>&nbsp;|&nbsp;&nbsp;Jurado: <?php echo $fila['jurado']; ?>&nbsp;|&nbsp;&nbsp;Cota: <?php echo $fila['cota']; ?><br/>
                <h6>Ubicación: <em><?php echo $fila['ubicacion']; ?></em></h6>
                <hr style="margin-top:0; margin-bottom:0;"/>
                <h4>Resumen.</h4>
                <p>
                	<?php echo $fila['resumen']; ?>
                </p>
                Presentado el: <?php echo $fila['fechaPresentacion']; ?>   
                
                
            </div>
            
            <?php endwhile; ?>
        </div>	
        <?php endif; ?>    
        </div>
        <div class="clear"></div>
    </div>
</div> <!-- END of templatemo_wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	<div class="col_4">
        	<h4>Páginas</h4>
            <ul class="nobullet bottom_list">
            	<li><a href="index.html">Inicio</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="gallery.html">Foto - Galería</a></li>
                <li><a href="buscador.php">Buscador</a></li>
                <li><a href="contact.html">Contacto</a></li>
            </ul>
        </div>
        
        <div class="col_4">
        	<h4>Otros sitios de Interés</h4>
            <ul class="nobullet bottom_list">
            	<li><a href="http://zeus.unexpo.edu.ve/" target="_blank">UNEXPO</a></li>
                <li><a href="http://www.poz.unexpo.edu.ve/web/" rel="nofollow" target="_parent">UNEXOP Puerto Ordaz</a></li>            
            </ul>
        </div>
        
         <div class="col_4">
        	<h4>Enlaces</h4>
            <ul class="nobullet bottom_list">
            	<li><a href="https://www.google.co.ve/?gws_rd=cr&ei=rDqKUv4Mo-WwBPLZgLAM#q=metalurgica&tbm=nws" target="_blank">Noticias de Metalúrgica</a></li>
            </ul>
        </div>
        <div class="col_4 no_margin_right">
        	<h4>Twitter</h4>
            <a href="https://twitter.com/unexpo_poz">Siguenos en Twitter</a>
        </div>
        <div class="clear"></div>
        <div id="templatemo_copyright">
			Copyright © 2013-2014 UNEXPO | <a rel="nofollow" href="#" rel="nofollow" target="_parent">Mirella Zuleta</a>
		</div>
    </div> <!-- END of templatemo_footer -->
</div> <!-- END of templatemo_footer_wrapper -->

</body>
</html>