<?php
include 'secure.php';
include 'header.php';
include 'conection.php';
?>

<br />


<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').DataTable({
            "paging": true,
            "lengthMenu": [[10, 50, 100, 500, -1], [10, 50, 100, 500, "Todo"]],
            "pageLength": 100,
            "order": [[0, "desc"]],
            "scrollX": true,
            "info": true
        });
    });
</script>


<div class="container">
    <div class="row">

        <div class="col-xs-12 col-lg-12">

            <h1>PC Logs</h1>
            <h4>PC Logs</h4>

            <a href="#" data-target="#modalusuario" class="btn btn-sm btn-success" data-toggle="<?php echo ($_SESSION['userid'] == 1 ? 'modal' : '') ?>"><span class='glyphicon glyphicon-plus'> </span>CREAR NUEVO</a>
            <br />
            <br />
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-user" aria-hidden="true">  </span></div>
                <div class="panel-body">
                    <table id="tabla" class="table table-condensed table-hover nowrap" width="100%">
                        <thead>
                            <tr>
                                <th>LOG</th>
                                <th>DOM</th>
                                <th>USUARIO</th>
                                <th>PC</th>
                                <th>SN</th>
<!--                                <th>MARCA</th>-->
                                <th>MODELO</th>
                                <th>CPU</th>
                                <th>R</th>
                                <th>AÑO</th>
                                <th>IP</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select date_format(d.fecha,'%Y-%m-%d') as fecha, left(p.SN,15) as sn, left(p.anoc,4) as ano, upper(p.mar) as mar, p.mo, d.pcna, d.up, d.usu,  d.off as ip, cpu, round(left(d.mem/1000000000,3),0) as ram   from PCSdet as d left join PCS as p on p.SN=d.SN order by 1 desc limit 6000";
                            $result = mysqli_query($link, $query);
                            mysqli_data_seek($result, 0);
                            while ($row = mysqli_fetch_array($result)) {
                                echo"<tr>"
                                . "<td>$row[fecha]</td>"
                                . "<td>$row[up]</td>"
                                . "<td>$row[usu]</td>"
                                . "<td>$row[pcna]</td>"
                                . "<td>$row[sn]</td>"
                                //. "<td>$row[mar]</td>"
                                . "<td>$row[mo]</td>"
                                . "<td>$row[cpu]</td>"
                                        . "<td>$row[ram]</td>"
                                . "<td>$row[ano]</td>"
                                . "<td>$row[ip]</td>"
                                . "</tr>";
                            }
                            ?>


                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>








<?php
include 'footer.php';
?>
