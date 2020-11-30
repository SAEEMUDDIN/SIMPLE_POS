<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #outer-div {
        height: 50%;
        width: 100%;
        text-align: center;
        background-color: #0666a3;
        padding: 50px;

      }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    th{
        background-color: #dddddd;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    border: 1px solid #ddd;
    padding: 8px;
    }

    body{
    /* Set "my-sec-counter" to 0 */
    counter-reset: my-sec-counter;
    }
    p::before {
    font-size: 18px;
    font-weight: normal;
    /* Increment "my-sec-counter" by 1 */
    counter-increment: my-sec-counter;
    content: counter(my-sec-counter);
    }

    #input {
            text-align: center;
            padding: 5px;

            margin: 2%;
        }
        .qty {
            width: 40px;
            height: 10px;
            text-align: center;
    }

    #mytable{
        th{
            background-color: white;
        }

        td, th {
        border: 1px dotted;
        text-align: left;
        border: 1px dotted;
        padding: 8px;
        }
    }
    </style>


</head>
<body>
<?php

    
//Muhamad Akmal bin Abu Bakar 1811543  

$products = array(
    array(
        "item_no"=> 1,
        "description"=>"Home Office Table 9006-BK",
        "price"=> 195.40,
        "discount" => 0.30
    ),
    array(
        "item_no"=> 2,
        "description"=>"Office Chair Y3001-RD",
        "price"=> 100.00,
        "discount" => 0.10
    ),
    array(
        "item_no"=> 3,
        "description"=>"Bookshelf 8043-40-B",
        "price"=> 98.30,
        "discount" => 0.00
    ),
    array(
        "item_no"=> 4,
        "description"=>"Shoes Cabinet 7022-Y",
        "price"=> 103.00,
        "discount" => 0.25
    ),
    array(
        "item_no"=> 5,
        "description"=>"Sideboard 6005-A",
        "price"=> 225.90,
        "discount" => 0.50
    ),
    array(
        "item_no"=> 6,
        "description"=>"Coffee Table 5017-W",
        "price"=> 154.70,
        "discount" => 0.15
    ),
    array(
        "item_no"=> 7,
        "description"=>"Chest Drawer 4008-C",
        "price"=> 99.50,
        "discount" => 0.05
    ),
    array(
        "item_no"=> 8,
        "description"=>"TV Console Table 1004-W",
        "price"=> 162.50,
        "discount" => 0.40
    ),
    array(
        "item_no"=> 9,
        "description"=>"Cloth Wardrobe 1402-90-B",
        "price"=> 126.50,
        "discount" => 0.12
    ),
    array(
        "item_no"=> 10,
        "description"=>"Chair Z1001-GY",
        "price"=> 44.70,
        "discount" => 0.00
    )
)
?>
    
    
    
 // MR SHARIFUL ISLAM 1619061
    
    <div id="outer-div">
    <h1>WELCOME TO AWANI FURNITURE</h1>
    </div>
    <h2>List of item we have today</h2>
    <form action="receipt.php" method="get">
    <table style="width:80% align: center;">
    <tr>
        <th>Item No</th>
        <th>Product Description</th>
        <th>Price(RM)</th>
        <th>Discount(%)</th>
        <th>Quantity</th>
    </tr>
    <tr>
        <td>
        <p>
        </p>
        </td>
        <td>
            <?php
            echo $products[0]['description'];
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[0]['price'],2);
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[0]['discount'],2);
            ?>
        </td>
        <td>
            <input type="text" name="quantity_item1" required>
        </td>
    </tr>
    <tr>
        <td>
            <p>
            </p>
        </td>
        <td>
            <?php
            echo $products[1]['description'];
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[1]['price'],2);
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[1]['discount'],2);
            ?>
        </td>
        <td>
            <input type="text" name="quantity_item2" required>
        </td>
    </tr>
    <tr>
        <td>
            <p>
            </p>
        </td>
        <td>
            <?php
            echo $products[2]['description'];
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[2]['price'],2);
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[2]['discount'],2);
            ?>
        </td>
        <td>
            <input type="text" name="quantity_item3" required>
        </td>
    </tr>
    <tr>
        <td>
            <p>
            </p>
        </td>
        <td>
            <?php
            echo $products[3]['description'];
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[3]['price'],2);
            ?>
            </td>
        <td>
            <?php
            echo number_format((float)$products[3]['discount'],2);
            ?>
        </td>
        <td>
            <input type="text" name="quantity_item4" required>
        </td>
    </tr>
    <tr>
        <td>
            <p>
            </p>
        </td>
        <td>
            <?php
            echo $products[4]['description'];
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[4]['price'],2);
            ?>
        </td>
        <td>
            <?php
            echo number_format((float)$products[4]['discount'],2);
            ?>
        </td>
        <td>
            <input type="text" name="quantity_item5" required>
        </td>
        </tr>
        <tr>
            <td>
                <p>
                </p>
            </td>
            <td>
                <?php
                echo $products[5]['description'];
                ?>
            </td>
            <td>
                <?php
                echo number_format((float)$products[5]['price'],2);
                ?>
                </td>
            <td>
                <?php
                echo number_format((float)$products[5]['discount'],2);
                ?>
            </td>
            <td>
                <input type="text" name="quantity_item6" required>
            </td>
        </tr><tr>
            <td>
                <p>
                </p>
            </td>
            <td>
                <?php
                echo $products[6]['description'];
                ?>
            </td>
            <td>
                <?php
                echo number_format((float)$products[6]['price'],2);
                ?>
                </td>
            <td>
                <?php
                echo number_format((float)$products[6]['discount'],2);
                ?>
            </td>
            <td>
                <input type="text" name="quantity_item7" required>
            </td>
        </tr><tr>
            <td>
                <p>
                </p>
            </td>
            <td>
                <?php
                echo $products[7]['description'];
                ?>
            </td>
            <td>
                <?php
                echo number_format((float)$products[7]['price'],2);
                ?>
                </td>
            <td>
                <?php
                echo number_format((float)$products[7]['discount'],2);
                ?>
            </td>
            <td>
                <input type="text" name="quantity_item8" required>
            </td>
        </tr><tr>
            <td>
                <p>
                </p>
            </td>
            <td>
                <?php
                echo $products[8]['description'];
                ?>
            </td>
            <td>
                <?php
                echo number_format((float)$products[8]['price'],2);
                ?>
                </td>
            <td>
                <?php
                echo number_format((float)$products[8]['discount'],2);
                ?>
            </td>
            <td>
                <input type="text" name="quantity_item9" required>
            </td>
        </tr><tr>
            <td>
                <p>
                </p>
            </td>
            <td>
                <?php
                echo $products[9]['description'];
                ?>
            </td>
            <td>
                <?php
                echo number_format((float)$products[9]['price'],2);
                ?>
                </td>
            <td>
                <?php
                echo number_format((float)$products[9]['discount'],2);
                ?>
            </td>
            <td>
                <input type="text" name="quantity_item10" required>
            </td>
        </tr>
    </table>
    <h1></h1>
    <input type="submit" name="submit" style="position:absolute;right:169px;border:3px solid black;height: 40px;width: 160px;"value="Proceed to Payment">
    </form>
    
    
  //MD SAEEM UDDIN 1721129

    <?php
    if(isset($_GET['quantity_item1'])){
        $quantity_item1 = $_GET['quantity_item1'];  // Storing Selected Value In Variable

    }
        if(isset($_GET['quantity_item2'])){
            $quantity_item2 = $_GET['quantity_item2'];  // Storing Selected Value In Variable

        }
            if(isset($_GET['quantity_item3'])){
                $quantity_item3 = $_GET['quantity_item3'];  // Storing Selected Value In Variable

            }
                if(isset($_GET['quantity_item4'])){
                    $quantity_item4 = $_GET['quantity_item4'];  // Storing Selected Value In Variable

                }
                    if(isset($_GET['quantity_item5'])){
                        $quantity_item5 = $_GET['quantity_item5'];  // Storing Selected Value In Variable

                    }
                    if(isset($_GET['quantity_item6'])){
                        $quantity_item6 = $_GET['quantity_item6'];  // Storing Selected Value In Variable

                        }

                        if(isset($_GET['quantity_item7'])){
                            $quantity_item7 = $_GET['quantity_item7'];  // Storing Selected Value In Variable

                        }

                            if(isset($_GET['quantity_item8'])){
                                $quantity_item8 = $_GET['quantity_item8'];  // Storing Selected Value In Variable

                            }

                            if(isset($_GET['quantity_item9'])){
                                $quantity_item9 = $_GET['quantity_item9'];  // Storing Selected Value In Variable

                            }

                            if(isset($_GET['quantity_item10'])){
                                $quantity_item10 = $_GET['quantity_item10'];  // Storing Selected Value In Variable

    } else
    echo "PLEASE ENTER YOUR ITEM QUANTITY!";
    ?>



</body>
</html>
