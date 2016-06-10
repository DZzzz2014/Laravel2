<?php
return array(
	'title'=>'Users',
	'single'=>'User',
	'model'=>'App\User',
	'columns'=>array(
		'id',
		'email'=>array(
			'title'=>'E-mail'
		),
		'name'=>array(
			'title'=>'Логин'
		)
	),
	'filter'=>array(
		'id', 'name', 'email'
	),
	'edit_fields'=>array(
		'name'=>array(
			'title'=>'Логин'
		),
		'email'=>array(
			'title'=>'E-mail'
		)
	)
);