<h3>Livro #<?= $Livro['id'] ?></h3>
<hr>
<?=form_open('LivroController/salvar')?>
    <label>ISBN </label>
    <input type="number" name="isbn" value="<?= $Livro["isbn"]?>">
    <label>Quantidade de paginas</label>
    <input type="number" name="paginas" id="" value="<?= $Livro["paginas"]?>">
    <label>Ano</label>
    <input type="number" name="ano" id="" value="<?= $Livro["isbn"]?>">
    <select name="id_obra" id="">
        <option value="" selected disabled>Selecione...</option>
        <?php foreach($Obra as $o) : ?>
            <option value='<?=$o['id'] ?>'>
                <?=$o['titulo']?>
            </option>
        <?php endforeach?>
    </select>
    <select name="id_editora" id=""> 
        <option value="" selected disabled>Selecione...</option>
        <?php foreach($Editora as $e) : ?>
            <option value='<?=$e['id']?>'>
                <?=$e['nome']?>
            </option>
        <?php endforeach?>
    </select>
    <input type="hidden" name='id' value='<?=$Livro['id']?>'>
    <button type="submit">Cadastrar</button>
<?=form_close()?>
