<?php
function Es($T) {
    return 1.10718*pow(10, (7.5*$T)/(237.3*$T));
}

function E($Tw, $T) {
    $A = 8.0*pow(10, -4);
    $P = 1000.0;

    return Es($Tw)*$T-$A*$P*($T-$Tw);
}

function UR($e, $es) {
    return ($e/$es)*100;
}

function Calcula($Tw, $T) {
    $Es = Es($T);
    $E = E($Tw, $T);
    return UR($E, $Es);
}
?>
<style>
* {
    font-family: sans-serif;
    font-size:11px;
}
table {
    border:1px solid #ccc;
}
table td, table th {
    background:#f8f8f8;
    margin:1px;
    padding:3px;
    text-align:right;
}
</style>
<table>
    <thead>

        <tr>
            <th></th>
            <?php for ($Tw=2.0; $Tw<=4.0; $Tw+=0.1) { ?>
                <th><?php print $Tw?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php for ($Tw=2.0; $Tw<=4.0; $Tw+=0.1) { ?>
            <tr>
                <td><?php print $Tw?></td>
                <?php for ($T=2.0; $T<=4.0; $T+=0.1) { ?>
                    <td><?php print Calcula($Tw, $T)?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>