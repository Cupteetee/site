<?php
function viewServicesContent(){
    $servicesQuery = mysqli_query(
        $GLOBALS["link"],
        "SELECT * FROM services WHERE turnContent!='NULL' ORDER BY turnContent ASC"
    );

    if(!$servicesQuery){
        return [];
    }

    while ($arr[] = mysqli_fetch_assoc($servicesQuery)){}

    return $arr;
}


