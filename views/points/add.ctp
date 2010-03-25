<h2>Nuevo WIFI</h2>
<?php echo $form->create(null, array('action' => '/add','class'=>'form','accept-charset'=>'UTF-8'));?>
<div class="optional">
	<?php echo $form->input('name', array (
	'class'=>'caja',
	'label'=>'Nombre',
	'error' => 'Nombre es obligatorio'
	)); ?>
</div>
<div class="optional">
	<?php echo $form->input('description', array (
	'class'=>'caja',
	'label'=>'Descripcion',
	'error' => 'Introduce una descripcion'
	)); ?>
</div>
<div class="optional">
	<?php echo $form->input('street', array (
	'class'=>'caja',
	'label'=>'Direccion [calle numero, Almeria]',
	'error' => 'Direccion'
	)); ?>
</div>

<div class="submit">
	<?php echo $form->submit('Añadir',array('class'=>'boton'));?>
	<?php echo $form->end(); ?>
</div>
</form>
<ul class="actions">
<li><?php echo $html->link('Listado', '/')?></li>
</ul>
