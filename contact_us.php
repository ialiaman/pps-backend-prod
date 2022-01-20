<?php
session_start();

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/scripts.php';
include 'auth.php';
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
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Khan
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row py-2">
                            <div class="col-6">
                                <span class="text-uppercase fw-bold">Khan</span>
                            </div>
                            <div class="col-6">
                                <span class="fw-bold">abc@gmail.com</span>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-6">
                                <span class="fw-bold">+(112) 222 444</span>  
                            </div>
                            <div class="col-6">
                                <span class="fw-bold"> 20/01/2022</span>  
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-12">
                                <span > <strong>Product not Deliverd </strong> </span>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Shery
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        <div class="row py-2">
                            <div class="col-6">
                                <span class="text-uppercase fw-bold">Shery</span>
                            </div>
                            <div class="col-6">
                                <span class="fw-bold">abcd@gmail.com</span>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-6">
                                <span class="fw-bold">+(112) 333 444</span>  
                            </div>
                            <div class="col-6">
                                <span class="fw-bold"> 19/01/2022</span>  
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-12">
                                <span > <strong>Product Deliverd </strong> </span>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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