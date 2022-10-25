<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter</title>  

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>

</head>
<body>
    <table>
        <strong>Filter list</strong>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
            foreach (filter_list() as $id =>$filter) {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter). '</td></tr>';
            }
        ?>
    </table><br/><br/>


    <?php
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
    ?>

<br/><br/>

    <?php
        $int = 0;

        if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT) !== false) {
            echo("Integer is valid");
        } else {
            echo("Integer is not valid");
        }
    ?>


</body>
</html>