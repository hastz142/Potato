<?php
echo "Fale Conosco<br>";
echo "Preencha o formulário abaixo para entrar em contato:<br>";
echo "<form action='envia_contato.php' method='POST'>";
echo "Nome: <input type='text' name='nome'><br><br>";
echo "Email: <input type='email' name='email'><br><br>";
echo "Mensagem:<br><textarea name='mensagem'></textarea><br><br>";
echo "<input type='submit' value='Enviar'><br>";
echo "</form>";
?>
