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
                    <h3 class="fw-bold mb-0">Products</h3>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <?php
                include 'dbcon.php';

                $limit = 10;

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $offset = ($page - 1) * $limit;

                $displayquery = "SELECT * FROM products ORDER BY id DESC LIMIT {$offset},{$limit}";
                $querydisplay = mysqli_query($con, $displayquery);

                while ($products = mysqli_fetch_assoc($querydisplay)) {
                ?>
                    <div class="card mb-3 bg-transparent p-2">
                        <div class="card border-0 mb-1">
                            <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                <a href="">
                                    <img class="w120 rounded img-fluid" src="<?php echo "uploads/" . $products['image']; ?> " alt="">
                                </a>
                                <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <a href="product-detail.php?id=<?php echo $products['id']; ?>">
                                        <h6 class="mb-3 fw-bold"><?php echo $products['name']; ?> <span class="text-muted small fw-light d-block"><?php echo $products['description']; ?> </span>
                                        </h6>
                                    </a>
                                    <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                        <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                            <div class="text-muted small">Price</div>
                                            <strong>$<?php echo $products['price']; ?> </strong>
                                        </div>
                                        <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                            <div class="text-muted small">Ratings</div>
                                            <strong><i class="icofont-star text-warning"></i>4.5 <span class="text-muted">(145)</span></strong>
                                        </div>
                                        <div class="btn-group ms-sm-auto mx-sm-0  mx-auto" role="group" aria-label="Basic outlined example">
                                            <a href="product-edit.php?id=<?php echo $products['id']; ?>"><button type="button" class="btn btn-outline-secondary editrow mx-2"><i class="icofont-ui-edit text-success"></i></button></a>
                                            <form action="product.php" method="POST">
                                                <input type="hidden" name="delete_id" value="<?php echo $products['id']; ?>">
                                                <input type="hidden" name="delete_image" value="<?php echo $products['image']; ?>">
                                                <button type="submit" name="delete_data" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="row g-3 mb-3">
                    <div class="col-md-12">
                        <nav class="justify-content-end d-flex">
                            <?php

                            $queryselect = "SELECT * FROM  products ";
                            $selectquery = mysqli_query($con, $queryselect);

                            if (mysqli_num_rows($selectquery) > 0) {
                                $total_products = mysqli_num_rows($selectquery);

                                $total_page = ceil($total_products / $limit);

                                echo '<ul class="pagination">';
                                if ($page > 1) {
                                    echo   '<li class="page-item p-1" >
                                                <a class="page-link" href="product-list.php?page=' . ($page -1) . '">Previous</a>
                                            </li>';
                                }

                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($i == $page) {
                                        $active = "";
                                    } else {
                                        $active = "active";
                                    }
                                    echo '<li class="' . $active . 'page-item active p-1"><a class="page-link" href="product-list.php?page=' . $i . '">' . $i . '</a></li>';
                                }
                                if ($total_page > $page) {
                                echo '<li class="page-item p-1">
                                            <a class="page-link" href="product-list.php?page=' . ($page + 1) . '">Next</a>
                                        </li>';
                                }
                                echo '</ul>';
                            }

                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>

<script>
    var stepsSlider2 = document.getElementById('slider-range2');
    var input3 = document.getElementById('minAmount2');
    var input4 = document.getElementById('maxAmount2');
    var inputs2 = [input3, input4];
    noUiSlider.create(stepsSlider2, {
        start: [149, 399],
        connect: true,
        step: 1,
        range: {
            'min': [0],
            'max': 2000
        },

    });

    stepsSlider2.noUiSlider.on('update', function(values, handle) {
        inputs2[handle].value = values[handle];
    });
</script>

</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:07 GMT -->

</html>