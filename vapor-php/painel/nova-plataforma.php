
<body>
    <?php
        require('./modulos/sidemenudashboard.php');  
        require('./modulos/autenticacao.php');
        require('./modulos/menuheaderdashboard.php');
     
        $queryplataformadash = " SELECT nome, id FROM plataforma ";
        $resultado_plataforma = mysqli_query($conn, $queryplataformadash);
        $error_mensage = $_GET['error'] ?? null;
     ?>
    <form action="novaplataformaconsulta.php" method="post">
        <div id="contentnovoidioma">
                    <label class="novoidioma">Plataforma</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira a nova Plataforma" type="text" name="plataforma" id="novoidioma"></div> <br>
   
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