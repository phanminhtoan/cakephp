<div class="users form large-9 medium-8 columns content">
<?= $this->Form->create($user) ?>
<fieldset>
    <legend><?= __('Add User') ?></legend>
    <?php
            echo $this->Form->input('username', ['type' => 'email']);
            echo $this->Form->input('password', ['type' => 'password']);
            echo $this->Form->input('name');
            ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
