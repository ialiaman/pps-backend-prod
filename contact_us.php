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
                    <h3 class="fw-bold mb-0">Contact Us</h3>
                </div>
            </div>
        </div>
        <!-- Row end  -->
        <?php
            include 'dbcon.php';

            $limit = 10;

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $offset = ($page - 1) * $limit;

            $displayquery = "SELECT * FROM contact ORDER BY id DESC LIMIT {$offset},{$limit}";
            $querydisplay = mysqli_query($con, $displayquery);

            while ($contact = mysqli_fetch_assoc($querydisplay)) {
        ?>
        <div class="accordion" id="accordion1">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $contact['name']; ?>" aria-expanded="false" aria-controls="<?php echo $contact['name']; ?>">
                    <?php echo $contact['name']; ?>
                    </button>
                </h2>
                <div id="<?php echo $contact['name']; ?>" class="accordion-collapse collapse">
                <div class="accordion-body">
                        <div class="row py-2">
                            <div class="col-6">
                                <span class="text-uppercase fw-bold"><?php echo $contact['name']; ?></span>
                            </div>
                            <div class="col-6">
                                <span class="fw-bold"><?php echo $contact['email']; ?></span>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-6">
                                <span class="fw-bold"><?php echo $contact['phone']; ?></span>  
                            </div>
                            <div class="col-6">
                                <span class="fw-bold"> <?php echo $contact['time']; ?></span>  
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-12">
                                <span > <strong><?php echo $contact['message']; ?></strong> </span>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <!-- Row end  -->

    </div>
</div>

<!-- Modal Cropper-->
<div class="modal docs-cropped" id="getCroppedCanvasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cropped</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.html">Download</a>
            </div>
        </div>
    </div>
</div>



</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:16 GMT -->

</html>