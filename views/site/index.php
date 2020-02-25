<?php

/* @var $this yii\web\View */

use app\components\Foto;

?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Hoja de Ejercicios 2</h1>

        <p class="lead">Esta es la pagina de inicio</p>
    </div>
    <?php
    
    echo '<div class="col-md-4">';
    echo "<p><center>Izquierda</center></p>";
    echo Foto::widget([
        'nombre' => 'nada.png',
    ]);
    echo '</div>';
    echo '<div class="col-md-4">';
    echo "<p><center>Centro</center></p>";
    echo Foto::widget([
        'nombre' => 'nada.png',
    ]);
    echo '</div>';
    echo '<div class="col-md-4">';
    echo "<p><center>Derecha</center></p>";
    echo Foto::widget([
        'nombre' => 'alpe.png',
    ]);
    echo '</div>';
    
    ?>
</div>
