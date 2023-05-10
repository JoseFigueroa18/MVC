<h1>Listado de notas</h1>
<?php while ($notas = $todasLasNotas->fetch_object()):?>
    <?=$notas->titulo?> - <?=$notas->fecha?> </br>
<?php endwhile; ?>