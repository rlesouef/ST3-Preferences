<?php $this->set('title_for_layout', "{models}"); ?>

<div class="block span12">

    <p class="block-heading">
        {models}
        <span class="block-icon pull-right">
            <a href="<?= $this->Html->url(array('action' => 'edit')); ?>" rel="tooltip" title="Ajouter">
                <i class="icon-plus"></i>
            </a>
        </span>
    </p>

    <p class="block-body"> &nbsp; </p>

    <table class="responsive table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (${models|l} as $k => ${model|l}): ?>
                <tr>
                    <td><?= ${model|l}['{model}']['id']; ?></td>
                    <td><?= ${model|l}['{model}']['name']; ?></td>
                    <td>
                        <a href="<?= $this->Html->url(array('action' => 'edit', ${model|l}['{model}']['id'])); ?>" class="btn btn-primary">
                            <i class="icon-edit"></i>
                            Editer
                        </a>
                        <a href="<?= $this->Html->url(array('action' => 'delete', ${model|l}['{model}']['id'])); ?>" class="btn btn-primary" onclick="return confirm('Etes vous sûr de vouloir supprimer ?')">
                            <i class="icon-delete"></i>
                            Supprimer
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>