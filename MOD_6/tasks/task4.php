<h3> Top 5 Customers with Highest Purchase Amount</h3>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>Customer Id</th>
            <th>Customer Name</th>
            <th>Total Purchase</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $grand_total = 0;

        $query = "SELECT *, (SELECT SUM(orders.total_amount) FROM orders WHERE orders.customer_id = customers.customer_id) as totPurchase FROM `customers` ORDER BY totPurchase DESC LIMIT 5";

        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
           
                    <td>{$row['customer_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['totPurchase']}</td>
            
            </tr>";

            $grand_total += $row["totPurchase"];
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