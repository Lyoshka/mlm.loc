<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['user/user/confirm-email', 'token' => $token->new_email_token]);
?>
Здравствуйте <?= $user->username ?>,

Для подтверждения регистрации пройдите по следующей ссылке:

<?= $confirmLink ?>
