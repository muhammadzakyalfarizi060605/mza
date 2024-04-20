<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tanggapan $tanggapan
 */
?>

<?php
$this->assign('title', __('Edit Tanggapan'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Tanggapan'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $tanggapan->id_tanggapan]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($tanggapan) ?>
    <div class="card-body">
        <?= $this->Form->control('tgl_tanggapan') ?>
        <?= $this->Form->control('isi_tanggapan') ?>
        <?= $this->Form->control('petugas_id', ['value' => $this->Identity->get('id'),'type' => 'hidden', 'class' => 'form-control', 'readonly' => true]) ?>
        <?= $this->Form->control('pengaduan_id', ['options' => $pengaduan, 'class' => 'form-control']) ?>
    </div>
    <div class="card-footer d-flex">
        <div class="mr-auto">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tanggapan->id_tanggapan],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tanggapan->id_tanggapan), 'class' => 'btn btn-danger']
            ) ?>
        </div>
        <div class="ml-auto">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'view', $tanggapan->id_tanggapan], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>