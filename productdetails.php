<?php
require "connection.php";
class Products{
    public function __construct()
    {
        $connect = new Connect();
        $this->connection=$connect->connection;
    }
    public function getData(){
        $sql="SELECT * FROM products;";
        $result=$this->connection->query($sql);
        return $result;
    }
}

$products = new Products();
$data = $products->getData();

?>
<table>
    <tr>
        <th>Product Id</th>
        <th>SKU ID</th>
        <th>NAME</th>
        <th>PRICE</th>
    </tr>
    <?php
    if($data) {
        foreach ($data as $row) {
            ?>
            <tr>
                <td><?php echo $row["ProductID"]; ?></td>
                <td><?php echo $row["ProductSKU"]; ?></td>
                <td><?php echo $row["ProductName"]; ?></td>
                <td><?php echo $row["ProductPrice"]; ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
<style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        padding:10px;
    }
</style>
