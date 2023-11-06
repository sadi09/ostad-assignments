<h3> Total Revenue per Product Category</h3>

<table class="table table-responsive">
    <thead>
        <tr>

            <th>Category Name</th>
            <th>Category Id</th>
            <th>Total Revenue</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $grand_total = 0;

        $query = "SELECT *, (SELECT SUM(order_items.quantity * order_items.unit_price) FROM order_items INNER JOIN products ON products.product_id = order_items.product_id WHERE products.category_id = categories.category_id) AS totRev FROM `categories` ORDER BY totRev DESC;";

        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
           
                    <td>{$row['category_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['totRev']}</td>
            
            </tr>";

            $grand_total += $row["totRev"];
        }

        ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="2">Total</th>
            <th><?= $grand_total ?></th>
        </tr>
    </tfoot>
</table>