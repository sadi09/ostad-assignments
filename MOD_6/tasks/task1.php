<h3> Customer Information with Total Orders</h3>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>Customer Id</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Location</th>
            <th>Total Orders</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $query = "SELECT customers.*, (SELECT COUNT(orders.order_id) FROM orders WHERE orders.customer_id = customers.customer_id) as ordersCount FROM `customers` ORDER BY ordersCount DESC";

        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['customer_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['location']}</td>
                    <td>{$row['ordersCount']}</td>
            
            </tr>";
        }

        ?>
    </tbody>
</table>