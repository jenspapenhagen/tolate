<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/view.css" media="all">
    <style type="text/css">
        .rand08 {
            border: 1px solid #2C6ED5;
            background-color: #C4D3F6;
            width:79%;
        }

        .rand08 caption {
            color: #0055AA;
        }

        .rand08 th {
            background-color: #6D93E1;
            color: #FFFFFF;
        }

        .rand08 td, #rand08 th {
            border: 1px solid #FFFFFF;
            font-family: Verdana, Arial, sans-serif;
            font-size: 11px;
            font-weight: normal;
        }
        </style>

</head>
<body id="main_body" >

<img id="top" src="img/top.png" alt="">
<div id="form_container">
    <h1><br></h1>

    <?php
    $page = "view.php"; //default

    if(isset($_GET['page'])){
        $input = $_GET['page'];
         switch ($input) {
            case 'view':
                $page = "view.php";
                break;

            case 'form':
                $page = "form.php";
                break;

            case 'action':
                $page = "action.php";
                break;

            default:
                $page = "view.php";
                break;

        }

    }

    include($page);
    ?>
</div>
<img id="bottom" src="img/bottom.png" alt="">





</body>
</html>