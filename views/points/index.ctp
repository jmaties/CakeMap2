<h2>Listado de Sitios con WIFI Abierto</h2>
<div class="mapa">
<?php
$avg_lat = 0;
$avg_lon = 0;
$count=0;
$borrar= '';
foreach($points as $n=>$point){
//if($session->check('Usuario') == true) { $borrar="<br/><a href='/admin/points/delete/".$point['Point']['id']."'>Borrar</a>"; }
	$points[$n]['Point']['title'] = "<strong>".$point['Point']['name']."</strong><br/>";
	$points[$n]['Point']['html'] = $point['Point']['description'].$borrar;
	/*$avg_lat += $point['Point']['latitude'];
	$avg_lon += $point['Point']['longitude'];
	$count++;*/
	}
//print_r($points);
//$avg_lat = $avg_lat/$count;
//$avg_lon = $avg_lon/$count;
$avg_lat=36.845148;
$avg_lon=-2.452011;
$default = array('type'=>'0','zoom'=>14,'lat'=>$avg_lat,'long'=>$avg_lon);
echo $googleMap->map($default, $style = 'width:100%; height: 750px' );
//if(isset($points)){
	echo $googleMap->addMarkers($points);
//	}


?>
</div>

<div class="lateral">
<span><?php echo $html->link('[+]Añadir Wifi', '/points/nuevo', array('class'=>'add')); ?></span>
<div id="wifis">
	<ul>
<?php foreach ($points as $point): ?>
	<li class="punto"><a href="javascript:<?php echo $point['Point']['js'] ?>"><?php echo $point['Point']['name'] ?></a></li>
<?php endforeach; ?>
	</ul>
</div>
</div>
