<?php $this->set('title_for_layout', "Editer {genre|l} {name}"); ?>

<div class="block span12">

    <p class="block-heading">
        Editer
    </p>
    <div class="block-body">
        <?= $this->Form->create('{model}', array('type' => 'file')); ?>
            <?= $this->Form->input('id'); ?>
            <?= $this->Form->input('name', array('label' => "Titre")); ?>
        <?= $this->Form->end('Sauvegarder'); ?>
    </div>
</div>