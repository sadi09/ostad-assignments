<h3> Product Name, Quantity, and Total Amount per Order Item</h3>

<table class="table table-responsive">
    <thead>
        <tr>

            <th>Product Name</th>
            <th>Order Id</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $grand_total = 0;

        $query = "SELECT order_items.*, order_items.unit_price * order_items.quantity as totAm, products.name FROM `order_items` LEFT JOIN products ON products.product_id = order_items.product_id ORDER BY order_items.order_id ASC";

        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
           
                    <td>{$row['name']}</td>
                    <td>{$row['order_id']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['unit_price']}</td>
                    <td>{$row['totAm']}</td>
            
            </tr>";

            $grand_total += $row["totAm"];
        }

        ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4">Total</th>
            <th><?= $grand_total ?></th>
        </tr>
    </tfoot>
</table>