<html>
    <body>
        <?=$produtohtml['nome']?><br/>
        <?=$produtohtml['preco']?><br/>
        <!--
        function typography
        function escape: utilizada para escapar de tags html
        isto ajuda na sergurança do site
        
        -->
        <?= auto_typography(html_escape($produtohtml['descricao']))?><br/>
    </body>
</html>