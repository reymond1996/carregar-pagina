<?php
/* '\' escape, eliminar as aspar */

echo "<a href=\"principal.php\">Link1</a>";
echo "<a href=\"principal.php?a=pagina2.php\">Link2</a>";
echo "<a href=\"principal.php?a=pagina3.php\">Link3</a>";


@$pagina = $_GET['a'];

if (isset($pagina)) {
    include $pagina;
} else {
    echo "Bem vindo a pagina principal";
}
