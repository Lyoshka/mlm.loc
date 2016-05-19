<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['user/user/confirm-email', 'token' => $token->old_email_token]);
?>
Здравствуйте <?= $user->username ?>,

Для подтверждения смены вашего email перейдите по ссылке указанной ниже:

<?= $confirmLink ?>
