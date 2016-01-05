<?php
date_default_timezone_set('UTC');

function ds($dn) {
    return rad2deg(deg2rad(-23.45)*sin(360.0*(($dn+284.0)/365.0)));
}
function azimute($delta, $phi, $h) {
    return asin((sin($phi)*sin($delta)) + (cos($phi)*cos($delta)*cos($h)));
}

$ts_inicio = strtotime(date('Y-01-01 00:00:00'));
?>
<table>
    <thead>
        <tr>
            <th>Dia do ano</th>
            <th>Data</th>
            <th>Declinação</th>
            <th>Azimute</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($dn=0; $dn<365;$dn++) {
            $ts = $ts_inicio + ($dn*24*60*60);
        ?>
        <tr>
            <td><?php print date('z', $ts)+1?></td>
            <td><?php print date('Y-m-d', $ts)?></td>
            <td><?php print ds($dn+1)?></td>
            <td><?php print azimute(ds($dn+1), 23.45, 0)?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
