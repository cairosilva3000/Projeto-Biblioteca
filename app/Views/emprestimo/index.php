<div class="container">

    <h2>Empréstimos</h2>

    <?=anchor(
        'HomeController/index',
        '🏠 Home',
        ['class' => 'btn-home']
    )?>

    <hr>

    <h3>Novo Empréstimo</h3>

    <?=form_open('EmprestimoController/salvar')?>

        <p>
            <label>Data de Início</label>
            <input type="date" name="data_inicio">
        </p>

        <p>
            <label>Data de Devolução</label>
            <input type="date" name="data_fim">
        </p>

        <p>
            <label>Usuário</label>
            <select name="id_usuario">
                <option value="" selected disabled>Selecione...</option>
                <?php foreach($Usuario as $u) : ?>
                    <option value="<?=$u['cpf']?>">
                        <?=$u['nome']?>
                    </option>
                <?php endforeach ?>
            </select>
        </p>

        <p>
            <label>Livro</label>
            <select name="id_livro">
                <option value="" selected disabled>Selecione...</option>
                <?php foreach($Livro as $l) : ?>
                    <option value="<?=$l['id']?>">
                        <?=$l['isbn']?>
                    </option>
                <?php endforeach ?>
            </select>
        </p>

        <p>
            <button type="submit">Cadastrar</button>
        </p>

    <?=form_close()?>

    <h3>Empréstimos Cadastrados</h3>

    <table>
        <tr>
            <td>ID</td>
            <td>DATA INÍCIO</td>
            <td>DATA DEVOLUÇÃO</td>
            <td>LIVRO</td>
            <td>USUÁRIO</td>
        </tr>

        <?php foreach($Emprestimo as $e) : ?>
            <tr>

                <td>
                    <?=anchor(
                        'EmprestimoController/editar/'.$e['id'],
                        $e['id']
                    )?>
                </td>

                <td><?=$e['data_inicio']?></td>

                <td><?=$e['data_fim']?></td>

                <td>
                    <?php foreach($Livro as $l) : ?>
                        <?php if($e['id_livro'] == $l['id']) : ?>
                            <?=$l['isbn']?>
                        <?php endif ?>
                    <?php endforeach ?>
                </td>

                <td>
                    <?php foreach($Usuario as $u) : ?>
                        <?php if($e['id_usuario'] == $u['cpf']) : ?>
                            <?=$u['nome']?>
                        <?php endif ?>
                    <?php endforeach ?>
                </td>

            </tr>
        <?php endforeach ?>
    </table>

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
    max-width:1000px;
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