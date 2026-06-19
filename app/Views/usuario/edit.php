<h2>Usuario #<?=$Usuario['cpf']?></h2>
<hr>
<?=form_open('UsuarioController/salvar')?>
    <label>CPF:</label>
    <input type="number" name="cpf" value="<?=$Usuario['cpf']?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$Usuario['nome']?>">
    <label>Email:</label>
    <input type="email" name="email" id="" value="<?=$Usuario['email']?>">
    <label>Telefone:</label>
    <input type="number" name="telefone" id="" value="<?=$Usuario['telefone']?>">
    <label>Endereço:</label>
    <input type="text" name="endereco" id="" value="<?=$Usuario['endereco']?>">
    <label>Numero:</label>
    <input type="number" name="numero" id="" value="<?=$Usuario['numero']?>">
    <label>Bairro:</label>
    <input type="text" name="bairro" id="" value="<?=$Usuario['bairro']?>">
    <label>Cidade:</label>
    <input type="text" name="cidade" id="" value="<?=$Usuario['cidade']?>">
    <label>UF:</label>
        <select id="uf" name="uf" value="<?=$Usuario['uf']?>">
            <option value="" selected disabled><?=$Usuario['uf']?></option>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
        </select>
    <label>Data de Nascimento:</label>
    <input type="date" name="data_nascimento" id="" value="<?=$Usuario['data_nascimento']?>">
    <select name="id_tipo_usuario" id="">
        <?php foreach($TipoUsuario as $t) : ?>
            <?php if($t['id'] == $Usuario['id_tipo_usuario']) : ?>
                    <option selected value="<?=$t['id']?>"><?=$t['nome']?></option>
                <?php else : ?>
                    <option value="<?=$t['id']?>"><?=$t['nome']?></option>
            <?php endif ?>
        <?php endforeach ?>
    </select>
    <button type="submit">Cadastrar</button>
<?=form_close()?>