<?php
/* @var $model Delivery */
$this->breadcrumbs = [
    Yii::t('DeliveryModule.delivery', 'Способы доставки') => ['/delivery/deliveryBackend/index'],
    $model->name,
];

$this->pageTitle = Yii::t('DeliveryModule.delivery', 'Способы доставки - просмотр');

$this->menu = [
    ['icon' => 'fa fa-fw fa-list-alt', 'label' => Yii::t('DeliveryModule.delivery', 'Управление способами доставки'), 'url' => ['/delivery/deliveryBackend/index']],
    ['icon' => 'fa fa-fw fa-plus-square', 'label' => Yii::t('DeliveryModule.delivery', 'Добавить способ доставки'), 'url' => ['/delivery/deliveryBackend/create']],
    ['label' => Yii::t('DeliveryModule.delivery', 'Способ доставки') . ' «' . mb_substr($model->name, 0, 32) . '»'],
    [
        'icon' => 'fa fa-fw fa-pencil',
        'label' => Yii::t('DeliveryModule.delivery', 'Редактирование способ доставки'),
        'url' => [
            '/delivery/deliveryBackend/update',
            'id' => $model->id
        ]
    ],
    [
        'icon' => 'fa fa-fw fa-eye',
        'label' => Yii::t('DeliveryModule.delivery', 'Просмотреть способ доставки'),
        'url' => [
            '/delivery/deliveryBackend/view',
            'id' => $model->id
        ]
    ],
    [
        'icon' => 'fa fa-fw fa-trash-o',
        'label' => Yii::t('DeliveryModule.delivery', 'Удалить способ доставки'),
        'url' => '#',
        'linkOptions' => [
            'submit' => ['/delivery/deliveryBackend/delete', 'id' => $model->id],
            'confirm' => Yii::t('DeliveryModule.delivery', 'Вы уверены, что хотите удалить способ доставки?'),
            'params' => [Yii::app()->getRequest()->csrfTokenName => Yii::app()->getRequest()->csrfToken],
            'csrf' => true,
        ]
    ],
];
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('DeliveryModule.delivery', 'Просмотр') . ' ' . Yii::t('DeliveryModule.delivery', 'способа доставки'); ?><br/>
        <small>&laquo;<?php echo $model->name; ?>&raquo;</small>
    </h1>
</div>

<?php $this->widget(
    'bootstrap.widgets.TbDetailView',
    [
        'data' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'name' => 'status',
                'value' => $model->statusTitle,
            ],
            'price',
            'free_from',
            'available_from',
            'separate_payment',
            'position',
            [
                'name' => 'description',
                'type' => 'html'
            ],

        ],
    ]
); ?>
