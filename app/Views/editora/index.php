<h2>Editora</h2>
<?=anchor('HomeController/index','Home')?>
<hr>
<h3>Nova Editora</h3>
<?=form_open('EditoraController/salvar')?>
    <p>
        <label>Nome</label>
        <input name="nome" type="text">
    </p>
    <p>
        <label>E-mail</label>
        <input name="email" type="text">
    </p>
    <p>
        <label>Telefone:</label>
        <input name="Telefone" type="text">
    </p>
    <p>
        <button type="submit">Cadastrar</button>
    </p>
<?=form_close()?>
<h3>Editoras</h3>
<p>
    <table>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>E-MAIL</td>
            <td>TELEFONE</td>    
        </tr>
        <?php foreach($editoras as $e) : ?>
            <tr>
                <td><?=$e['id']?></td>
                <td>
                    <?=anchor(
                        'EditoraController/editar/' .$e['id'],
                        $e['nome']
                    )?>
                </td>
                <td><?=$e['email']?></td>
                <td><?=$e['telefone']?></td>
            </tr>
        <?php endforeach ?>
    </table>
</p>
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