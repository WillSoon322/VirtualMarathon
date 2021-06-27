    <?php
    $start = 0;$show = 1;

    $pageCount = (count($result)) / $show;
    if($pageCount%$show!=0){
        $pageCount++;
    }

    for ($i=1;$i<$pageCount;$i++){
        $temp=$show*($i-1);
        echo "<a href =\"tracks?start=$temp\">$i</a>";
    }

    if(isset($_GET['start'])){
        $start = $db ->escapeString($_GET['start']);
        $query .= " LIMIT $start, $show";
        $result = $db->executeSelectQuery($query);
    }
    ?>