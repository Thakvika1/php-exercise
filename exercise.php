<?php


function tableCell($num){
    $table_header = 
    "<table width='270px'>
        <tbody>";

    $table_footer = 
        "</tbody>
    </table>";

    $table_content = "";
    for($i = 1; $i <= $num; $i++){

    $table_cell_header = "<tr>";
    $table_cell_footer = "</tr>";

        for($j = 1; $j <= $num; $j++){
            if($i % 2 == 0){
                if($j % 2 == 0){
                    // echo "black ";
                    $table_cell_header .= "<td width='30px' height='30px' style='background-color: black; border: 1px solid black;''></td>";
                }
                else {
                    // echo "white ";
                    $table_cell_header .= "<td width='30px' height='30px' style='background-color: white; border: 1px solid black''></td>";
                }
            }
            else {
                if($j % 2 == 0){
                    // echo "white ";
                    $table_cell_header .= "<td width='30px' height='30px' style='background-color: white; border: 1px solid black''></td>";
                }
                else {
                    // echo "black ";
                    $table_cell_header .= "<td width='30px' height='30px' style='background-color: black; border: 1px solid black'></td>";
                }
            }
        }

        // echo "<br />";
        $table_content .= $table_cell_header.$table_cell_footer;
    }

    echo $table_header.$table_content.$table_footer;
}

echo tableCell(8);

