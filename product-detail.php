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
                    <h3 class="fw-bold mb-0">Products Detail</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="product-details ">
                            <?php
                            include 'dbcon.php';
                            
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                            } else {
                                $id = 1;
                            }
                            $query = "SELECT * FROM products WHERE id ='$id'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {

                            ?>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="product-details-image mt-50">
                                                <div class="product-image">
                                                    <div class="product-image-active tab-content">
                                                        <a class="single-image tab-pane fade active show" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                                            <img src="<?php echo "uploads/".$row['image'];?>" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="product-details-content mt-45">
                                                <h2 class="fw-bold fs-4"><?php echo $row['name'];?></h2>
                                                <div class="my-3">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <span class="text-muted ms-3">(449 customer review)</span>
                                                </div>
                                                <div class="product-price">
                                                    <h6 class="price-title fw-bold">Price</h6>
                                                    <p class="sale-price">$ <?php echo $row['price'];?> USD</p>
                                                </div>
                                                <p> <?php echo $row['description'];?> </p>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>

<script>
    // =========== select-item-1 active 
    selectItem1 = document.querySelectorAll("#select-item-1 .single-item");
    for (var i = 0; i < selectItem1.length; i++) {
        selectItem1[i].onclick = function() {
            var el = selectItem1[0];
            while (el) {
                if (el.tagName === "DIV") {
                    el.classList.remove("active");
                }
                el = el.nextSibling;
            }
            this.classList.add("active");
        };
    }
    // =========== select-color-1 active
    selectColor1 = document.querySelectorAll("#select-color-1 li");
    for (var i = 0; i < selectColor1.length; i++) {
        selectColor1[i].onclick = function() {
            var el = selectColor1[0];
            while (el) {
                if (el.tagName === "LI") {
                    el.classList.remove("active");
                }
                el = el.nextSibling;
            }
            this.classList.add("active");
        };
    }
</script>

</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:16 GMT -->

</html>