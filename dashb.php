<?php
include 'conection.php';
//include 'secure.php';
include 'header.php';
?>


 <div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">

            <table id="tablapagos" class="table table-condensed table-bordered table-hover">
                <thead>
                    <tr>
                        <?php
                        // select d.up, left(d.sn,10), p.mar, p.mo, left(p.anoc,4),  max(d.fecha), date_format(max(d.fecha),'%Y-%m') from PCSdet d left join PCS p on d.sn=p.sn group by 2 order by 1,7;

                        $field1 = "left(p.anoc,4)";     //Filas
                        $field2 = "d.up";      //Columnas                        
                        $from = "PCSdet d left join PCS p on d.sn=p.sn ";
                        $where = "where idestatus = 1";
                        $where = "";
                        $orderby = "order by 1 desc";

                        $query = "select $field2, count($field2) from $from group by 1";
                        echo $query . "+++++++++++++            ";
                        $result = mysqli_query($link, $query);
                        mysqli_data_seek($result, 0);
                        $query = "";
                        while ($row = mysqli_fetch_row($result)) {
                            $query = $query . (strlen($query) > 0 ? ", " : "") . "sum(case when $field2='$row[0]' then 1 else 0 end) as `$row[0]`";
                        }
                        echo $query . "+++++++++++++            ";

                        $query = "select $field1, $query from $from $where group by 1 $orderby";
                        echo $query . "+++++++++++++            ";
                        $result = mysqli_query($link, $query);
                        $field_cnt = mysqli_num_fields($result);
                        mysqli_data_seek($result, 0);
                        while ($property = mysqli_fetch_field($result)) {
                            ?>
                            <th width='<?php echo (100 / $field_cnt) . "%" ?>'><?php echo $property->name; ?></th> 
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        mysqli_data_seek($result, 0);
                        while ($row = mysqli_fetch_row($result)) {
                            ?>    
                            <tr>
                                <?php for ($i = 0; $i <= $field_cnt - 1; $i++) { ?>
                                    <td><?php echo $row[$i] ?>  </td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                                <span class="text-warning"></span>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>






<?php
include 'footer.php'
?>