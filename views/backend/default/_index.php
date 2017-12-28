<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;

$this->title = 'Index forum';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;



Portlet::begin(['title' => $this->title,'subTitle' => 'forums data','icon' => 'glyphicon glyphicon-cog']);

echo $this->render('index');

Portlet::end();



