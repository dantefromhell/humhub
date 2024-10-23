<?php

use humhub\helpers\Html;
use humhub\modules\content\widgets\richtext\RichText;
use humhub\modules\ui\view\components\View;
use humhub\modules\user\models\fieldtype\MarkdownEditor;

/**
 * @var $this View
 * @var $user \humhub\modules\user\models\User
 */
$categories = $user->profile->getProfileFieldCategories();
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('UserModule.profile', '<strong>About</strong> this user') ?>
    </div>
    <div class="panel-body">
        <?php $firstClass = "active" ?>

        <?php if (count($categories) > 1): ?>
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <?php foreach ($categories as $category): ?>
                    <li class="nav-item <?= $firstClass ?>">
                        <a href="#profile-category-<?= $category->id ?>"
                           class="nav-link"
                           data-bs-toggle="tab"><?= Html::encode(Yii::t($category->getTranslationCategory(), $category->title)) ?></a>
                    </li>
                    <?php
                    $firstClass = "";
                endforeach;
                ?>
            </ul>
            <?php $firstClass = "active" ?>
        <?php endif; ?>

        <div class="tab-content">
            <?php foreach ($categories as $category): ?>
                <div class="tab-pane <?php
                echo $firstClass;
                $firstClass = "";
                ?>" id="profile-category-<?= $category->id ?>">
                    <form class="form-horizontal" role="form">
                        <?php foreach ($user->profile->getProfileFields($category) as $field) : ?>
                            <div class="mb-3">
                                <label class="col-sm-3 control-label">
                                    <?= Html::encode(Yii::t($field->getTranslationCategory(), $field->title)) ?>
                                </label>
                                <?php if (strtolower($field->title) == 'about'): ?>
                                    <div class="col-sm-9">
                                        <div
                                            class="form-control-static"><?= RichText::output($field->getUserValue($user, true)) ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-sm-9">
                                        <?php if ($field->field_type_class == MarkdownEditor::class): ?>
                                            <p class="form-control-static"
                                               style="min-height: 0 !important;padding-top:0;">
                                                <?= RichText::output($field->getUserValue($user, true)) ?>
                                            </p>
                                        <?php else: ?>
                                            <p class="form-control-static"><?= $field->getUserValue($user, false) ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
