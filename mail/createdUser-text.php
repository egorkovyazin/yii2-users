<?php
/**
 * @var yii\web\View               $this
 * @var \budyaga\users\models\User $user
 * @var string                     $password
 */
?>
Hello <?= $user->username ?>,

Administrator created an account on <?= Yii::$app->urlManager->createAbsoluteUrl(['/']) ?>

Login: <?= $user->email ?>
Password: <?= $password ?>
