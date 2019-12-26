<?php
function viewServicesMenu(){
    $servicesQuery = mysqli_query(
        $GLOBALS["link"],
        "SELECT * FROM services WHERE turnNav!='NULL' ORDER BY turnNav ASC"
    );

    if(!$servicesQuery){
        return [];
    }

    while ($arr[] = mysqli_fetch_assoc($servicesQuery)){}

    return $arr;
}
