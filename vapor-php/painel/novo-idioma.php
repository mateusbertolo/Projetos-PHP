
<body>
    <?php
        require('./modulos/sidemenudashboard.php');  
        require('./modulos/autenticacao.php');
        require('./modulos/menuheaderdashboard.php');
     
        $queryidiomadash = " SELECT nome, id FROM idioma ";
        $resultado_idiomas = mysqli_query($conn, $queryidiomadash);
        $error_mensage = $_GET['error'] ?? null;
     ?>
    <form action="novoidiomaconsulta.php" method="post">
        <div id="contentnovoidioma">
                    <label class="novoidioma">Idioma</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira o Novo idioma" type="text" name="idiomas" id="novoidioma"></div> <br>
   
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