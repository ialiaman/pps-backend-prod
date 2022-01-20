<?php
session_start();

include 'dbcon.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';
include 'auth.php';
?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row g-3">
            <div class="col-lg-12 col-md-12">
                <div class="tab-filter d-flex align-items-center justify-content-between mb-3 flex-wrap">
                </div>
                <div class="tab-content mt-1">
                    <div class="tab-pane fade show active" id="summery-today">
                        <div class="row g-1 g-sm-3 mb-3 row-deck">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Customers</span>
                                            <div><span class="fs-6 fw-bold me-2">
                                                    <?php

                                                    $customers_query = "SELECT * FROM customers";
                                                    $customers_query_run = mysqli_query($con, $customers_query);

                                                    if ($customers_total = mysqli_num_rows($customers_query_run)) {
                                                        echo "$customers_total";
                                                    } else {
                                                        echo "NO Data";
                                                    }

                                                    ?>
                                                </span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Order</span>
                                            <div><span class="fs-6 fw-bold me-2">
                                                    <?php

                                                    $orders_query = "SELECT * FROM orders";
                                                    $orders_query_run = mysqli_query($con, $orders_query);

                                                    if ($total_orders = mysqli_num_rows($orders_query_run)) {
                                                        echo "$total_orders";
                                                    } else {
                                                        echo "NO Data";
                                                    }

                                                    ?>
                                                </span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Total Sale</span>
                                            <div><span class="fs-6 fw-bold me-2">
                                                    <?php

                                                    $price_query = "SELECT * FROM orders";
                                                    $price_query_run = mysqli_query($con, $price_query);

                                                    $total_price = 0;
                                                    while ($total = mysqli_fetch_assoc($price_query_run)) {
                                                        $total_price += $total['price'];
                                                    }
                                                    echo $total_price;

                                                    ?>
                                                </span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Visitors</span>
                                            <div><span class="fs-6 fw-bold me-2">11452</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-users-social fs-3 color-light-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Total Products</span>
                                            <div><span class="fs-6 fw-bold me-2">
                                                    <?php

                                                    $products_query = "SELECT * FROM products";
                                                    $products_query_run = mysqli_query($con, $products_query);

                                                    if ($products_total = mysqli_num_rows($products_query_run)) {
                                                        echo "$products_total";
                                                    } else {
                                                        echo "NO Data";
                                                    }

                                                    ?>
                                                </span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-bag fs-3 color-light-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-info">
                                            <span class="text-muted">Top Selling Item</span>
                                            <div><span class="fs-6 fw-bold me-2">122</span></div>
                                        </div>
                                        <div class="right-icon">
                                            <i class="icofont-star fs-3 color-lightyellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row end -->
                    </div>
                </div>
            </div>
        </div><!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Sales Status</h6>
                    </div>
                    <div class="card-body">
                        <div id="apex-GenderOverview"></div>
                    </div>
                </div>
            </div>
        </div><!-- Row end  -->


        <div class="row g-3 mb-3 row-deck">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Active Users Status</h6>
                    </div>
                    <div class="card-body">
                        <div class="p-4 active-user bg-lightblue rounded-2 mb-2">
                            <span class="fw-bold d-flex justify-content-center fs-3">
                                <?php

                                $visit_query = "SELECT * FROM visit_count";
                                $visit_query_run = mysqli_query($con, $visit_query);

                                $total_visitor = 0;
                                while ($total = mysqli_fetch_assoc($visit_query_run)) {
                                    $total_visitor += $total['count'];
                                }
                                echo $total_visitor;

                                ?>
                            </span>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Active pages</th>
                                        <th scope="col">Users</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'dbcon.php';

                                    $displayquery = "SELECT * FROM visit_count ORDER BY id ASC";
                                    $querydisplay = mysqli_query($con, $displayquery);

                                    while ($pages = mysqli_fetch_assoc($querydisplay)) {
                                ?>
                                    <tr>
                                        <td><?php echo $pages['page_name']; ?></td>
                                        <td><?php echo $pages['count']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Recent Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Item</th>
                                        <th>Customer Name</th>
                                        <th>Payment Info</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    include 'dbcon.php';

                                    $limit = 5;

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
                                            <td><?php echo $orders['cust_name']; ?></td>
                                            <td><?php echo $orders['pay_info']; ?></td>
                                            <td>
                                                $<?php echo $orders['price']; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($orders['status'] == 1) {
                                                ?>
                                                    <span class="badge bg-success">Completed</span>
                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge bg-warning">Progress</span>
                                                <?php
                                                }
                                                ?>

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
                                                <a class="page-link" href="dashboard.php?page=' . ($page - 1) . '">Previous</a>
                                            </li>';
                                        }

                                        for ($i = 1; $i <= $total_page; $i++) {
                                            if ($i == $page) {
                                                $active = "";
                                            } else {
                                                $active = "active";
                                            }
                                            echo '<li class="' . $active . 'page-item active p-1"><a class="page-link" href="dashboard.php?page=' . $i . '">' . $i . '</a></li>';
                                        }
                                        if ($total_page > $page) {
                                            echo '<li class="page-item p-1">
                                            <a class="page-link" href="dashboard.php?page=' . ($page + 1) . '">Next</a>
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
            </div>
        </div><!-- Row end  -->

    </div>
</div>

<script>
    $('#myDataTable')
        .addClass('nowrap')
        .dataTable({
            responsive: true,
            columnDefs: [{
                targets: [-1, -3],
                className: 'dt-body-right'
            }]
        });
</script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:00 GMT -->

</html>