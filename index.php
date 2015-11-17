<?php


include'./include/Global.php';
include'./template/footer.php';


$title="Controle de Estoque";?>


<form method="post">
    <div class="center">

        Nome:                   <input type="text" name="nome" />
        valor:                  <input type="text" name="valor" />
        quantidade:             <input type="text" name="quantidade" />
        data de validade:       <input type="text" name="data" />
                               <input type="submit" value="Cadastrar" name="botao"/>
    </div>
</form>

<?php
include'./template/header.php';

