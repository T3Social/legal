<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use humhub\modules\legal\widgets\Content;
use yii\bootstrap\Html;

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $page \humhub\modules\legal\models\Page */
/* @var $canManagePages boolean */
?>

<div class="panel">
    <div class="panel-heading">
        <?php if ($canManagePages): ?>
            <?= Html::a(Yii::t('LegalModule.base', 'Edit this page'), ['/legal/admin/page', 'pageKey' => $page->page_key], ['class' => 'btn btn-default pull-right', 'data-ui-loader' => '']); ?>
        <?php endif; ?>
        <?= $page->title; ?>
    </div>
    <div class="panel-body">
        <?= Content::widget(['content' => $page->content]) ?>
    </div>
</div>