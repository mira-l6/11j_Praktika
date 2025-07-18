<?php
    //?
    //tazi str se izpulnqva sled natiskane na buton filtrirai
    session_start();


    include "db_connection.php";

    function validate($data) 
    {
        return htmlspecialchars(trim($data));
    }

    $property_type = $_POST['property-type'] ?? 'all';
    $populated_place = $_POST['populated-place'] ?? 'all';
    $town_area = validate($_POST['town-area'] ?? '');
    $min_price = isset($_POST['min-price']) ? floatval($_POST['min-price']) : null;
    $max_price = isset($_POST['max-price']) ? floatval($_POST['max-price']) : null;
    $min_quadrature = isset($_POST['min-quadrature']) ? floatval($_POST['min-quadrature']) : null;
    $max_quadrature = isset($_POST['max-quadrature']) ? floatval($_POST['max-quadrature']) : null;

    // Map form values to DB table names
    $property_type_map = [
        "room1" => "room1",
        "room2" => "room2",
        "room3" => "room3",
        "room4" => "room4",
        "roomn" => "roomn",
        "maisonette" => "maisonette",
        "studio" => "studio",
        "office" => "office",
        "store" => "store",
        "restaurant" => "restaurant",
        "storage" => "storage",
        "hotel" => "hotel",
        "industrial" => "industrial_premise",
        "business" => "business_property",
        "housefloor" => "house_floor",
        "house" => "house",
        "villa" => "villa",
        "plot" => "plot",
        "garage" => "garage",
        "land" => "land"
    ];

    $selected_tables = [];

    if ($property_type === "all") 
    {
        $selected_tables = array_values($property_type_map);
    } 
    else if (array_key_exists($property_type, $property_type_map)) 
    {
        $selected_tables[] = $property_type_map[$property_type];
    } 
    else 
    {
        die("Invalid property type.");
    }

    $offers = [];

    foreach ($selected_tables as $table) 
    {
        // Determine column names
        $prefix = $table;
        $id_col = $prefix . "_ID";
        $price_col = $prefix . "_Price";
        $city_col = $prefix . "_City";
        $province_col = $prefix . "_Province";
        $region_col = $prefix . "_Region";
        $quad_col = $prefix . "_Quadrature";

        $where_clauses = [];

        if ($populated_place !== 'all') 
        {
            if (str_starts_with($populated_place, 't')) 
            {
                $where_clauses[] = "`$city_col` = '" . mysqli_real_escape_string($con, substr($populated_place, 1)) . "'";
            } 
            elseif (str_starts_with($populated_place, 'p')) 
            {
                $where_clauses[] = "`$province_col` = '" . mysqli_real_escape_string($con, substr($populated_place, 1)) . "'";
            }
        }

        if (!empty($town_area)) 
        {
            $where_clauses[] = "`$region_col` = '" . mysqli_real_escape_string($con, $town_area) . "'";
        }

        if (!is_null($min_price)) 
        {
            $where_clauses[] = "`$price_col` >= $min_price";
        }
        if (!is_null($max_price)) 
        {
            $where_clauses[] = "`$price_col` <= $max_price";
        }

        if (!is_null($min_quadrature)) 
        {
            $where_clauses[] = "`$quad_col` >= $min_quadrature";
        }
        if (!is_null($max_quadrature)) 
        {
            $where_clauses[] = "`$quad_col` <= $max_quadrature";
        }

        $sql = "SELECT *, '$table' AS offer_table, '$prefix' AS offer_prefix FROM `$table`";
        if (!empty($where_clauses)) 
        {
            $sql .= " WHERE " . implode(" AND ", $where_clauses);
        }

        $result = mysqli_query($con, $sql);
        if (!$result) 
        {
            echo "Error in query: " . mysqli_error($con);
            continue;
        }

        while ($row = mysqli_fetch_assoc($result)) 
        {
            $offers[] = $row;
        }
    }

    $_SESSION['offers'] = $offers;


    /*
    orig kod
    //bez if za proverka na isset za stoinostite, zashtoto moje da filtrirash i po nishto

    //proverka dali za vsqko ot menutata e izbrana stoinost; opciq vsichki
    //value = all v html faila
    if(($_POST['property-type']) == "all")
    {
        $property_type = trim($_POST['property-type']);
        $propertytypeqry = "`business_property`, `garage`, `hotel`, `house`, `house_floor`, `industrial_premise`, `land`, `maisonette`, `office`, `plot`, `restaurant`, `room1`, `room2`, `room3`, `room4`, `roomn`, `shop`, `storage`, `studio`, `villa`";
    }
    else
    {
        switch($_POST['property-type'])
        {
            case "room1":
                $propertytypeqry = "`room1`";
                break;
            case "room2":
                $propertytypeqry = "`room2`";
                break;
            case "room3":
                $propertytypeqry = "`room3`";
                break;
            case "room4":
                $propertytypeqry = "`room4`";
                break;
            case "roomn":
                $propertytypeqry = "`roomn`";
                break;
            case "maisonette":
                $propertytypeqry = "`maisonette`";
                break;
            case "studio":
                $propertytypeqry = "`studio`";
                break;
            case "office":
                $propertytypeqry = "`office`";
                break;
            case "store":
                $propertytypeqry = "`store`";
                break;
            case "restaurant":
                $propertytypeqry = "`restaurant`";
                break;
            case "storage":
                $propertytypeqry = "`storage`";
                break;
            case "hotel":
                $propertytypeqry = "`hotel`";
                break;
            case "industrial":
                $propertytypeqry = "`industrial_premise`";
                break;
            case "business":
                $propertytypeqry = "`business_property`";
                break;
            case "housefloor":
                $propertytypeqry = "`housefloor`";
                break;
            case "house":
                $propertytypeqry = "`house`";
                break;
            case "villa":
                $propertytypeqry = "`villa`";
                break;
            case "plot":
                $propertytypeqry = "`plot`";
                break;
            case "garage":
                $propertytypeqry = "`garage`";
                break;
            case "land":
                $propertytypeqry = "`land`";
                break;
        }
    }
    
    if(($_POST['populated-place']) == "all")
    {
        $populatedplaceqry = "";
    }
    else
    {
        $populated_place = trim($_POST['populated-place']);
        $populatedplaceqry = "``".$populated_place;
    }
    if(isset($_POST['town-area']))
    {
        $town_area = trim($_POST['town-area']);
        $townareaqry = "";
    }
    else
    {
        $townareaqry = "";
    }
    if(isset($_POST['max-price']))
    {
        $max_price = trim($_POST['max-price']);
        $maxpriceqry = "";
    }
    else
    {
        $max_price = null;
        $maxpriceqry = "";
    }
    if(isset($_POST['min-price']))
    {
        $min_price = trim($_POST['min-price']);
        $minpriceqry = "";
    }
    else
    {
        $min_price = null;
        $minpriceqry = "";
    }
    if(isset($_POST['min_quadrature']))
    {
        $min_quadrature = validate($_POST['min_quadrature']);
        $minquadratureqry = "";
    }
    else
    {
        $min_quadrature = null;
        $minquadratureqry = "";
    }
    if(isset($_POST['max_quadrature']))
    {
        $max_quadrature = validate($_POST['max_quadrature']);
        $maxquadratureqry = "";
    }
    else
    {
        $max_quadrature = null;
        $maxquadratureqry = "";
    }
   
    //zaqvkata da se konkatinira samo ot nenull stoinostite

    //s for cikul se obhojda masiv s vsichki vidove imoti
    $sqlgetoffer = "SELECT * FROM ".$propertytypeqry." WHERE ";
    $resultgetoffer = mysqli_query($con, $sqlgetoffer);
    $offerscount = mysqli_num_rows($resultgetoffer);

    while ($rowgetoffer = mysqli_fetch_assoc($resultgetoffer)) 
    {
        $offers[] = $rowgetoffer;
    }*/