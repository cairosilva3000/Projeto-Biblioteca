<h2>Gênero #<?=$genero['id']?></h2>
<hr>
<?=form_open('GeneroController/salvar')?>
    <label>Nome: </label>
    <input type="text" name="nome" value='<?=$genero['nome']?>'>
    <input type="hidden" name="id" value='<?=$genero['id']?>'>
    <button type="submit">Atualizar</button>
    <?=anchor(
        'GeneroController/index','voltar'
    )?>
<?=form_close()?>