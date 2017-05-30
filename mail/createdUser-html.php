<?php
use yii\helpers\Html;

/**
 * @var yii\web\View               $this
 * @var \budyaga\users\models\User $user
 * @var string                     $password
 */

$homeUrl = Yii::$app->urlManager->createAbsoluteUrl(['/']);
?>
<div class="password-reset">
    <p>Hello <?= Html::encode($user->username) ?>,</p>

    <p>Administrator created an account on <?= Html::a(Html::encode($homeUrl), $homeUrl) ?></p>

    <p>Login: <?= $user->email ?></p>
    <p>Password: <?= $password ?></p>
</div>
