<div class="panel">

    <?= $this->form->radio('tooltip_enabled', 'enable comments tooltip' , 1, isset($values['tooltip_enabled'])&& $values['tooltip_enabled']==1) ?>
    <?= $this->form->radio('tooltip_enabled', 'disable comments tooltip' , 2, isset($values['tooltip_enabled'])&& $values['tooltip_enabled']==2) ?>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue">
    </div>
</div>