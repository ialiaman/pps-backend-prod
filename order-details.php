<?php
    session_start();
    
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/scripts.php';
    include 'auth.php';

?>
            <?php
                include 'dbcon.php';

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                } else {
                    $id = 1;
                }
                $query = "SELECT * FROM orders WHERE id ='$id'";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0){
                    foreach ($query_run as $row) {

            ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div
                                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Order Details : <?php echo $row['order_id'];?></h3>
                                
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        <div class="col">
                            <div class="alert-success alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-success text-light"><i
                                            class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Order Created at</div>
                                        <span class="small"><?php echo $row['date'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i
                                            class="fa fa-user fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Name</div>
                                        <span class="small"><?php echo $row['cust_name'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-warning alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i
                                            class="fa fa-envelope fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Email</div>
                                        <span class="small"><?php echo $row['email'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-info alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-info text-light"><i
                                            class="fa fa-phone-square fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Contact No</div>
                                        <span class="small"><?php echo $row['phn_num'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div
                        class="row g-3 mb-3 row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 row-deck">
                        <div class="col">
                            <div class="card auth-detailblock">
                                <div
                                    class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Delivery Address</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Block Number:</label>
                                            <span><strong><?php echo $row['block_num'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Address:</label>
                                            <span><strong><?php echo $row['address'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Pincode:</label>
                                            <span><strong><?php echo $row['pincode'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Phone:</label>
                                            <span><strong><?php echo $row['phn_num'];?></strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Billing Address</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Block Number:</label>
                                            <span><strong><?php echo $row['block_num'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Address:</label>
                                            <span><strong><?php echo $row['address'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Pincode:</label>
                                            <span><strong><?php echo $row['pincode'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Phone:</label>
                                            <span><strong><?php echo $row['phn_num'];?></strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Invoice Detail</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Number:</label>
                                            <span><strong><?php echo $row['number'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Seller GST :</label>
                                            <span><strong><?php echo $row['seller_gst'];?></strong></span>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label col-6 col-sm-5">Purchase GST :</label>
                                            <span><strong><?php echo $row['purchase_gst'];?></strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-xl-12 col-xxl-8">
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Order Summary</h6>
                                </div>
                                <div class="card-body">
                                    <div class="product-cart">
                                        <div class="checkout-table table-responsive">
                                            <table
                                                class="table display dataTable table-hover align-middle"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="product">Product Image</th>
                                                        <th>Product Name</th>
                                                        <th class="quantity">Quantity</th>
                                                        <th class="price">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/product/product-1.jpg"
                                                                class="avatar rounded lg" alt="Product">
                                                        </td>
                                                        <td>
                                                            <h6 class="title"><span><?php echo $row['item'];?></span>
                                                            </h6>
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <p class="price"><?php echo $row['price'];?></p>
                                                        </td>
                                                    </tr>  
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="checkout-coupon-total checkout-coupon-total-2 d-flex flex-wrap justify-content-end">
                                            <div class="checkout-total">
                                                <div class="single-total">
                                                    <p class="value">Subotal Price:</p>
                                                    <p class="price">$1096.00</p>
                                                </div>
                                                <div class="single-total">
                                                    <p class="value">Shipping Cost (+):</p>
                                                    <p class="price">$12.00</p>
                                                </div>
                                                <div class="single-total">
                                                    <p class="value">Discount (-):</p>
                                                    <p class="price">$10.00</p>
                                                </div>
                                                <div class="single-total">
                                                    <p class="value">Tax(18%):</p>
                                                    <p class="price">$198.00</p>
                                                </div>
                                                <div class="single-total total-payable">
                                                    <p class="value">Total Payable:</p>
                                                    <p class="price">$1296.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-xxl-4">
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Status Orders</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-12">
                                                <label class="form-label">Order ID</label>
                                                <input type="text" disabled class="form-control" value="<?php echo $row['order_id'];?>">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Order Status</label>
                                                <select class="form-select" aria-label="Default select example">
                                                <?php
                                                
                                                if($row['status']==1)
                                                {
                                                ?>
                                                    
                                                    <option selected value="1">Completed</option>
                                                    <option value="2">Progress</option>
                                                    
                                                 <?php
                                                }
                                                else
                                                {
                                                ?>
                                                    <option selected value="1">Progress</option>
                                                    <option value="2">Completed</option>

                                                <?php
                                                }
                                                ?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="btn btn-primary mt-4 text-uppercase">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>
            <!-- Body: Body Ends -->
            <?php
            }
                } else {
                            echo "No Record Found";
                        }
            ?>
    <script>
        $(document).ready(function () {
            $('#myCartTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                    columnDefs: [
                        { targets: [-1, -3], className: 'dt-body-right' }
                    ]
                });
        });
    </script>

</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:18 GMT -->

</html>