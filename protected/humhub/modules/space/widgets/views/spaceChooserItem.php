<?php

/* @var $space Space */

use humhub\libs\Helpers;
use humhub\modules\space\models\Space;
use humhub\modules\space\widgets\Image;
use humhub\widgets\bootstrap\Badge;
use yii\helpers\Html;

?>

<li<?= (!$visible) ? ' style="display:none"' : '' ?> data-space-chooser-item <?= $data ?>
                                                     data-space-guid="<?= $space->guid; ?>">
    <a href="<?= $space->getUrl(); ?>">
        <div class="d-flex">
            <?= Image::widget([
                'space' => $space,
                'width' => 24,
                'htmlOptions' => [
                    'class' => 'float-start',
                ]]);
            ?>
            <div class="flex-grow-1">
                <strong class="space-name"><?= Html::encode($space->name); ?></strong>
                <?= $badge ?>
                <div data-message-count="<?= $updateCount; ?>" style="display: none;"
                     class="badge badge-space messageCount float-end tt"
                     title="<?= Yii::t('SpaceModule.chooser', '{n,plural,=1{# new entry} other{# new entries}} since your last visit', ['n' => $updateCount]); ?>">
                    <?= $updateCount; ?>
                </div>
                <br>
                <p><?= Html::encode(Helpers::truncateText($space->description, 60)); ?></p>
                <?php if ($space->hasTags()) : ?>
                    <div class="space-tags" style="display:none">
                        <?php foreach ($space->getTags() as $tag) : ?>
                            <?= Badge::secondary($tag) . ' ' ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </a>
</li>
