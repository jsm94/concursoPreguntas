<?php
include "modelo/funcionesBD.php";
$ranking = getRanking();
?>
<div class="container">
    <h1>TOP 5</h1>
    <table class="table">
        <tr>
            <th>Pregunta 1</th>
            <th>Pregunta 2</th>
            <th>Pregunta 3</th>
            <th>Tiempo</th>
        </tr>

        <?php
        foreach($ranking as $row){
            ?>
            <tr>
                <?php
                foreach($row as $column){
                    ?>
                    <td><?php echo $column; ?></td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
