<head>
    <?php
    require('./modulos/autenticacao.php');
    require('./modulos/sidemenudashboard.php');
    require('./modulos/menuheaderdashboard.php');
    
    $queryjogodash = " SELECT nome, id FROM jogo ";
    $resultado_jogo = mysqli_query($conn, $queryjogodash);
    ?>
</head>
<body>  
    <div id="content-container">
        <div id="button-container">
            <button class="button-defalt">
                <a href="novo-jogo.php">Novo Jogo</a>
            </button> 
        </div>
  

    <div id="list-container">
        <table>
             <tr>   
                    <th> Jogo </th>
                    <th> Editar </th>
                    <th> Excluir</th>
                </tr>     
                <?php while($linhasjogo = mysqli_fetch_array($resultado_jogo)) {  ?>      
                <tr>
                    <td><?php echo $linhasjogo['nome']; ?></td>  
                    <td class="center"><a href="editar-jogo.php?id=<?=$linhasjogo['id']?>"> Editar</a></td>
                    <td class="center"><a href="excluir-jogo.php?id=<?=$linhasjogo['id']?>"> Excluir</a></td>
                </tr> 
                <?php }  ?>
            </table>   
        </div> 
    </div>
</body>
</html>