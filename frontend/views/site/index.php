<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="py-4 px-2 bg-transparent rounded-3">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-6">
                    <?= Html::img('@web/assets/employees.png', ['alt'=>'some', 'class'=>'thing' , 'style'=>'width: 450px; height: 390px;']);?>
                </div>
                <div class="col-6 py-5">
                    <br><h2 class="display-4">Welcome to the <b>Employee App</b>!</h2><br>
                    <p class="fs-5 fw-light">You have successfully logged-in into the application.</p><br>
                    <p><a class="btn btn-lg btn-success" href="/index.php?r=site%2Fdata">View Details</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
