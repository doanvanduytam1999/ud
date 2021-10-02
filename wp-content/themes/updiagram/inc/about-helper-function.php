<?php
    function format_values_data($values) {
        $temp = $values[1];
        $values[1] = $values[3];
        $values[3] = $temp;

        $temp = $values[2];
        $values[2] = $values[6];
        $values[6] = $temp;

        $temp = $values[5];
        $values[5] = $values[7];
        $values[7] = $temp;

        return $values;
    }
    

?>