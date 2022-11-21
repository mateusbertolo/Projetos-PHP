
<body>
    <?php
        require('./modulos/sidemenudashboard.php');  
        require('./modulos/autenticacao.php');
        require('./modulos/menuheaderdashboard.php');
     
        $querycategoriadash = " SELECT * FROM categoria ";
        $resultado_categoria = mysqli_query($conn, $querycategoriadash);
        $error_mensage = $_GET['error'] ?? null;
     ?>
    <div id="contentnovoidioma">
    <form action="novojogoconsulta.php" method="post">
    
        <div class="content">
                    <label for="nome" class="novoidioma">Nome*</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira o Novo Nome" type="text" name="nome" id="novonome"></div> <br>

                    <label for="price" class="novoidioma">Valor*</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira o Valor" type="number" name="valor" id="novovalor" min="0.00"></div> <br>

                    <label for="imagem_url" class="novoidioma">Imagem*</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira a Imagem" type="text" name="imagem" id="novaimagem" min="0"></div> <br>

                    <label for="video_url" class="novoidioma">Video</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira o Video" type="text" name="video" id="novovideo" min="0"></div> <br>

                </div> 
        <div class="content">
                    <label for="release_date" class="novoidioma">lançamento*</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira o Lançamento" type="date" name="lancamento" id="novolancamento"></div> <br>

                    <label for="developer" class="novoidioma">Desenvolvedora*</label>
                    <div class="labelnovoidioma">
                    <input placeholder="Insira a desenvolvedora" type="text" name="desenvolvedora" id="novadesenvolvedora"></div> <br>
                        
                        <div class="multiselecao">
                            <label for="categoria">Categoria*</label>
                                <select name="categoria" id="categoria" required>
                                <option value="" disabled selected>Selecione</option>
                        </div>
                    <?php while ($categoria = mysqli_fetch_array($resultado_categoria)) { ?>
                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                
                    <?php } ?>
                </div> 

                <div class="content">
                    <div class="label">
                        <textarea placeholder="descrição" name="descricao"  id="description" cols="30" rows="10"></textarea>
                    </div>
                </div>

                    <button class="button-salvar"> 
                        salvar 
                    </button>
                    
           </form>
    </div>
</body>
</html>