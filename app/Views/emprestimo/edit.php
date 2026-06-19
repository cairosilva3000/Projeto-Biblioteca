<h3>Livro #<?= $Emprestimo['id'] ?></h3>
<hr>
<?=form_open('EmprestimoController/salvar')?>
    <label>Data de Inicio</label>
    <input type="date" name="data_inicio" value="<?= $Emprestimo["data_inicio"]?>">
    <label>Data de Devolução</label>
    <input type="date" name="data_fim" value="<?= $Emprestimo["data_fim"]?>">
    <label>Usuário</label>
    <select name="id_usuario" id="">
        <option value="" selected disabled>Selecione...</option>
        <?php foreach($Usuario as $u) : ?>
            <option value='<?=$u['cpf']?>' <?= ($Emprestimo['id_usuario'] == $u['cpf']) ? 'selected' : '' ?>>
                <?=$u['nome']?>
            </option>
        <?php endforeach?>
    </select>
    <select name="id_livro" id=""> 
        <option value="" selected disabled>Selecione...</option>
        <?php foreach($Livro as $l) : ?>
            <option value='<?=$l['id']?>' <?= ($Emprestimo['id_livro'] == $l['id']) ? 'selected' : '' ?>>
                <?=$l['isbn']?>
            </option>
        <?php endforeach?>
    </select>
    <input type="hidden" name='id' value='<?=$Emprestimo['id']?>'>
    <button type="submit">Cadastrar</button>
<?=form_close()?>