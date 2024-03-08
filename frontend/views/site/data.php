<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

// employee table data
use yii\helpers\Html;

$this->title = 'Employee Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div class="my-3 box rounded-3">
    <div class="site-data">
    <h1><?= Html::encode($this->title) ?></h1><br>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Joining Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= Html::encode($employee->id) ?></td>
                    <td><?= Html::encode($employee->name) ?></td>
                    <td><?= Html::encode($employee->email) ?></td>
                    <td><?= Html::encode($employee->department) ?></td>
                    <td><?= Html::encode($employee->joining_date) ?></td>
                    <td><?= Html::encode($employee->status) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    </div>
</div>
