<?php
session_start();

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Order Invoices</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Item</th>
                                    <th>Billing Date</th>
                                    <th>Total Amount</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include 'dbcon.php';

                                $limit = 10;

                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else {
                                    $page = 1;
                                }
                                $offset = ($page - 1) * $limit;

                                $showquery = "SELECT * FROM orders ORDER BY id DESC LIMIT {$offset},{$limit}";
                                $queryshow = mysqli_query($con, $showquery);

                                while ($orders = mysqli_fetch_assoc($queryshow)) {
                                ?>
                                    <tr>
                                        <td><strong><?php echo $orders['order_id']; ?></strong></td>
                                        <td><img src="assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span><?php echo $orders['item']; ?></span></td>
                                        <td><?php echo $orders['date']; ?></td>
                                        <td><?php echo $orders['price']; ?></td>
                                        <td><?php echo $orders['cust_name']; ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-white" href="invoices.php"><i class="icofont-print fs-5"></i></a>
                                            <a class="btn btn-sm btn-white" href="invoices.php"><i class="icofont-download fs-5"></i></a>
                                            <a class="btn btn-sm btn-white" href="invoices.php"><i class="icofont-send-mail fs-4"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-12">
                            <nav class="justify-content-end d-flex">
                                <?php

                                $queryselect = "SELECT * FROM  orders ";
                                $selectquery = mysqli_query($con, $queryselect);

                                if (mysqli_num_rows($selectquery) > 0) {
                                    $total_orders = mysqli_num_rows($selectquery);

                                    $total_page = ceil($total_orders / $limit);

                                    echo '<ul class="pagination">';
                                    if ($page > 1) {
                                        echo   '<li class="page-item p-1" >
                                                <a class="page-link" href="order-invoices.php?page=' . ($page - 1) . '">Previous</a>
                                            </li>';
                                    }

                                    for ($i = 1; $i <= $total_page; $i++) {
                                        if ($i == $page) {
                                            $active = "";
                                        } else {
                                            $active = "active";
                                        }
                                        echo '<li class="' . $active . 'page-item active p-1"><a class="page-link" href="order-invoices.php?page=' . $i . '">' . $i . '</a></li>';
                                    }
                                    if ($total_page > $page) {
                                        echo '<li class="page-item p-1">
                                            <a class="page-link" href="order-invoices.php?page=' . ($page + 1) . '">Next</a>
                                        </li>';
                                    }
                                    echo '</ul>';
                                }

                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#patient-table')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    });
</script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/order-invoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:18 GMT -->

</html>