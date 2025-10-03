<html>
<head>

</head>
<body>
<table>
    <tr>
        <?php foreach ($tareas as $tarea) { ?>
        <td> <?php echo "" . $tarea['id']; ?> </td>
        <td> <?php echo "" . $tarea['titulo']; ?> </td>
        <td> <?php echo "" . $tarea['descripcion']; ?> </td>
        <td> <?php echo "" . $tarea['fecha_creacion']; ?> </td>
        <td> <?php echo "" . $tarea['fecha_vencimiento']; ?> </td>
    </tr>
    <?php } ?>

</table>
</body>
</html>

