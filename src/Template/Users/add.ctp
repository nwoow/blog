<!-- src/Template/Users/add.ctp -->

<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
		
		
        <?= $this->Form->input('role', [
            'options' => ['dietitian' => 'Dietitian', 'patient' => 'Patient']
        ]) ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>