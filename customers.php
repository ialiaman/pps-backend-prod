<?php
session_start();

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';

?>


<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Customers Information</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Customers</button>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Customers</th>
                                    <th>Register Date</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Actions</th>
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

                                $showquery = "SELECT * FROM customers ORDER BY id DESC LIMIT {$offset},{$limit}";
                                $queryshow = mysqli_query($con, $showquery);

                                while ($customers = mysqli_fetch_assoc($queryshow)) {
                                ?>
                                    <tr>
                                        <td><strong><?php echo $customers['cust_id']; ?></strong></td>
                                        <td>
                                            <a href="customer-detail.php?id=<?php echo $customers['id']; ?>">
                                                <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                <span class="fw-bold ms-1"><?php echo $customers['cust_name']; ?></span>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $customers['reg_date']; ?>
                                        </td>
                                        <td><?php echo $customers['mail']; ?></td>
                                        <td><?php echo $customers['phn_num']; ?></td>
                                        <td><?php echo $customers['country']; ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                            </div>
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

                                $queryselect = "SELECT * FROM  customers ";
                                $selectquery = mysqli_query($con, $queryselect);

                                if (mysqli_num_rows($selectquery) > 0) {
                                    $total_orders = mysqli_num_rows($selectquery);

                                    $total_page = ceil($total_orders / $limit);

                                    echo '<ul class="pagination">';
                                    if ($page > 1) {
                                        echo   '<li class="page-item p-1" >
                                                <a class="page-link" href="customers.php?page=' . ($page - 1) . '">Previous</a>
                                            </li>';
                                    }

                                    for ($i = 1; $i <= $total_page; $i++) {
                                        if ($i == $page) {
                                            $active = "";
                                        } else {
                                            $active = "active";
                                        }
                                        echo '<li class="' . $active . 'page-item active p-1"><a class="page-link" href="customers.php?page=' . $i . '">' . $i . '</a></li>';
                                    }
                                    if ($total_page > $page) {
                                        echo '<li class="page-item p-1">
                                            <a class="page-link" href="customers.php?page=' . ($page + 1) . '">Next</a>
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
        </div><!-- Row End -->
    </div>
</div>
<!-- Body: Body Ends -->

<!-- Add Customers-->
<div class="modal fade" id="expadd" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expaddLabel">Add Customers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="item" class="form-label">Customers Name</label>
                                <input type="text" class="form-control" id="item">
                            </div>
                            <div class="col-sm-12">
                                <label for="taxtno" class="form-label">Customers Profile</label>
                                <input type="File" class="form-control" id="taxtno">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="depone" class="form-label">Country</label>
                                <input type="text" class="form-control" id="depone">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc" class="form-label">Customers Register date</label>
                                <input type="date" class="form-control w-100" id="abc">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="abc11" class="form-label">Mail</label>
                                <input type="text" class="form-control" id="abc11">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc111" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="abc111">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">Total Order</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Customers Ends-->

<!-- Edit Customers-->
<div class="modal fade" id="expedit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Customers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="item1" class="form-label">Customers Name</label>
                                <input type="text" class="form-control" id="item1" value="Cloth">
                            </div>
                            <div class="col-sm-12">
                                <label for="taxtno1" class="form-label">Customers Profile</label>
                                <input type="file" class="form-control" id="taxtno1">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" value="South Africa">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc1" class="form-label">Customers Register date</label>
                                <input type="date" class="form-control w-100" id="abc1" value="2021-03-12">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="mailid" class="form-label">Mail</label>
                                <input type="text" class="form-control" id="mailid" value="PhilGlover@gmail.com">
                            </div>
                            <div class="col-sm-6">
                                <label for="phoneid" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phoneid" value="843-555-0175">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">Total Order</label>
                                <input type="text" class="form-control" value="18">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Customers Ends-->
</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:19 GMT -->

</html>