
<body>
    <?php
        require('./modulos/sidemenudashboard.php');  
        require('./modulos/autenticacao.php');
        require('./modulos/menuheaderdashboard.php');
     
        $querycategoriadash = " SELECT nome, id FROM categoria ";
        $resultado_categoria = mysqli_query($conn, $querycategoriadash);
        $error_mensage = $_GET['error'] ?? null;
     ?>
    <form action="novacategoriaconsulta.php" method="post">
        <div id="contentnovoidioma">
                    <label class="novoidioma">Categoria</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira a nova Categoria" type="text" name="categoria" id="novoidioma"></div> <br>
   
                    <button class="button-salvar"> 
                     salvar 
                    </button>
                        <?php if($error_mensage != null) { ?>
                            <div class="error-message"><?=$error_mensage?></div>

                        <?php } ?>

                </div> 
           
           </form>
    </div>
</body>
</html>