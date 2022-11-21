<head>
    <?php
    require('./modulos/autenticacao.php');
    require('./modulos/sidemenudashboard.php');
    require('./modulos/menuheaderdashboard.php');
    
    $querycategoriadash = " SELECT nome, id FROM categoria ";
    $resultado_categorias = mysqli_query($conn, $querycategoriadash);
    ?>
</head>
<body>  
    <div id="content-container">
        <div id="button-container">
            <button class="button-defalt">
                <a href="nova-categoria.php">Nova Categoria</a>
            </button> 
        </div>
  

    <div id="list-container">
        <table>
             <tr>   
                    <th> Categoria </th>
                    <th> Editar </th>
                    <th> Excluir</th>
                </tr>     
                <?php while($linhascategoria = mysqli_fetch_array($resultado_categorias)) {  ?>      
                <tr>
                    <td><?php echo $linhascategoria['nome']; ?></td>  
                    <td class="center"><a href="editar-categoria.php?id=<?=$linhascategoria['id']?>"> Editar</a></td>
                    <td class="center"><a href="excluir-categoria.php?id=<?=$linhascategoria['id']?>"> Excluir</a></td>
                </tr> 
                <?php }  ?>
            </table>   
        </div> 
    </div>
</body>
</html>