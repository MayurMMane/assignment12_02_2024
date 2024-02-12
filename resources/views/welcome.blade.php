<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Orders</h2>

<table>
    <tr>
        <th>Order ID</th>
        <th>Order Name</th>
        <th>Product Name</th>
        <th>User ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Product ID</th>
        <th>Status</th>
    </tr>
    <tbody id="ordersTableBody">
        <?php foreach($data as $order): ?>
            <tr>
                <td><?= $order['order_id'] ?></td>
                <td><?= $order['order_name'] ?></td>
                <td><?= $order['product_name'] ?></td>
                <td><?= $order['user_id'] ?></td>
                <td><?= $order['username'] ?></td>
                <td><?= $order['email'] ?></td>
                <td><?= $order['product_id'] ?></td>
                <td><?= $order['status'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
