<div class="container">

    <h2>Usuários</h2>

    <?=anchor(
        'HomeController/index',
        '🏠 Home',
        ['class' => 'btn-home']
    )?>

    <hr>

    <h3>Novo Usuário</h3>

    <?=form_open('UsuarioController/salvar',['class'=>'form-grid'])?>

        <div>
            <label>CPF</label>
            <input type="number" name="cpf">
        </div>

        <div>
            <label>Nome</label>
            <input type="text" name="nome">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Telefone</label>
            <input type="number" name="telefone">
        </div>

        <div>
            <label>Endereço</label>
            <input type="text" name="endereco">
        </div>

        <div>
            <label>Número</label>
            <input type="number" name="numero">
        </div>

        <div>
            <label>Bairro</label>
            <input type="text" name="bairro">
        </div>

        <div>
            <label>Cidade</label>
            <input type="text" name="cidade">
        </div>

        <div>
            <label>UF</label>
            <select name="uf">
                <option value="" selected disabled>Selecione...</option>
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
        </div>

        <div>
            <label>Data de Nascimento</label>
            <input type="date" name="data_nascimento">
        </div>

        <div>
            <label>Tipo de Usuário</label>
            <select name="id_tipo_usuario">
                <option value="" selected disabled>Selecione...</option>
                <?php foreach($TipoUsuario as $t) : ?>
                    <option value="<?=$t['id']?>">
                        <?=$t['nome']?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="full-width">
            <button type="submit">Cadastrar</button>
        </div>

    <?=form_close()?>

    <h3>Usuários Cadastrados</h3>

    <div class="table-responsive">
        <table>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Nº</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Nascimento</th>
                <th>Tipo</th>
            </tr>

            <?php foreach($Usuario as $u) : ?>
                <tr>

                    <td>
                        <?=anchor(
                            'UsuarioController/editar/'.$u['cpf'],
                            $u['cpf']
                        )?>
                    </td>

                    <td><?=$u['nome']?></td>
                    <td><?=$u['email']?></td>
                    <td><?=$u['telefone']?></td>
                    <td><?=$u['endereco']?></td>
                    <td><?=$u['numero']?></td>
                    <td><?=$u['bairro']?></td>
                    <td><?=$u['cidade']?></td>
                    <td><?=$u['uf']?></td>
                    <td><?=date('d/m/Y', strtotime($u['data_nascimento']))?></td>

                    <td>
                        <?php foreach($TipoUsuario as $tipo) : ?>
                            <?php if($tipo['id'] == $u['id_tipo_usuario']) : ?>
                                <?=$tipo['nome']?>
                            <?php endif ?>
                        <?php endforeach ?>
                    </td>

                </tr>
            <?php endforeach ?>
        </table>
    </div>

</div>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#0d0d0d;
    color:#fff;
    min-height:100vh;
    padding:30px;
}

.container{
    max-width:1100px;
    margin:auto;
    background:#1a1a1a;
    padding:30px;
    border-radius:15px;
    box-shadow:0 0 20px rgba(138,43,226,.4);
}

h2{
    text-align:center;
    color:#b266ff;
    margin-bottom:20px;
}

h3{
    color:#d0a6ff;
    margin:20px 0 15px;
}

hr{
    border:none;
    height:1px;
    background:#6a0dad;
    margin:20px 0;
}

a{
    text-decoration:none;
    color:#b266ff;
    transition:.3s;
}

a:hover{
    color:#fff;
}

.btn-home{
    display:inline-block;
    padding:10px 20px;
    background:linear-gradient(135deg,#6a0dad,#8a2be2);
    color:#fff;
    border-radius:8px;
    margin-bottom:10px;
}

.btn-home:hover{
    box-shadow:0 0 15px rgba(178,102,255,.8);
}

form p{
    margin-bottom:15px;
}

label{
    display:block;
    margin-bottom:5px;
    color:#ddd;
}

input,
select{
    width:100%;
    padding:10px;
    border:1px solid #6a0dad;
    border-radius:8px;
    background:#111;
    color:#fff;
    outline:none;
}

input:focus,
select:focus{
    border-color:#b266ff;
    box-shadow:0 0 10px rgba(178,102,255,.5);
}

button{
    padding:10px 20px;
    border:none;
    border-radius:8px;
    background:linear-gradient(135deg,#6a0dad,#8a2be2);
    color:#fff;
    font-weight:bold;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    transform:translateY(-2px);
    box-shadow:0 0 15px rgba(178,102,255,.8);
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
    border-radius:10px;
    overflow:hidden;
}

table tr:first-child{
    background:#6a0dad;
    color:#fff;
    font-weight:bold;
}

td{
    padding:12px;
    border-bottom:1px solid #333;
}

tr:not(:first-child){
    background:#222;
    transition:.3s;
}

tr:not(:first-child):hover{
    background:#2d1b4d;
}
</style>