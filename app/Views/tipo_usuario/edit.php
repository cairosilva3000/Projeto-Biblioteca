<h2>Tipo Usuario #<?=$tipos_Usuario['id']?></h2>
<hr>
<?=form_open('TipoUsuarioController/salvar')?>
    <label>Nome: </label>
    <input type="text" name="nome" value='<?=$tipos_Usuario['nome']?>'>
    <input type="hidden" name="id" value='<?=$tipos_Usuario['id']?>'>
    <button type="submit">Atualizar</button>
    <?=anchor(
        'TipoUsuarioController/index','voltar'
    )?>
<?=form_close()?>