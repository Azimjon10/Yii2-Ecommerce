<?php

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'contentOptions' => [
                    'style' => 'width: 60px'
                ]
            ],
            [
                'attribute' => 'name',
                'content' => function ($model) {
                    return \yii\helpers\StringHelper::truncateWords($model->name, 7);
                }
            ],
            [
                'label' => 'Image',
                'attribute' => 'image',
                'content' => function ($model) {
                    /** @var \common\models\Product $model */
                    return Html::img($model->getImageUrl(), ['style' => 'width: 50px']);
                }
            ],
            'price:currency',
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    /** @var \common\models\Product $model */
                    return Html::tag('span', $model->status ? 'Active' : 'Draft', [
                        'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                    ]);
                }
            ],
            'status',
            [
                'attribute' => 'created_at',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space: nowrap']
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space: nowrap']
            ],

            [
                'class' => 'common\grid\ActionColumn',
                'contentOptions' => [
                    'class' => 'td-actions'
                ]
            ],
        ],
    ]); ?>


</div>
