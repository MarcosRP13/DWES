<?php
// src/views/View.php
class View {
    public function render(array $data = []) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Vista</title>
        </head>
        <body>
        <table border="1">
            <tr>
                <?php foreach ($data as $item => $valor) { ?>
                    <td><?php echo htmlspecialchars($valor); ?></td>
                <?php } ?>
            </tr>
        </table>
        </body>
        </html>
        <?php
    }
}

