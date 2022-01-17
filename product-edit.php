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
                    <h3 class="fw-bold mb-0">Products Edit</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <?php
        include 'dbcon.php';

        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id ='$id'";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
                 
        ?>
                <div class="row g-3 mb-3">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Basic information</h6>
                            </div>
                            <div class="card-body">
                                <form action="product.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-6">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" required name="name" value="<?php echo $row['name']; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">New Price</label>
                                            <input type="number" class="form-control" required name="price" placeholder="Enter New Price" value="<?php echo $row['price']; ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Product Description</label>
                                            <textarea class="fw-light fs-6 p-2" style="width: 100%; resize:none;" ; required name="description" id="" rows="4" maxlength="255" placeholder="Enter Product description"><?php echo $row['description']; ?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                                <label class="form-label">Update Product Image</label>
                                                <input type="file" accept="image/*" id="file" class="form-control" name="image">
                                                <input type="hidden" name="old-image" value="<?php echo $row['image']; ?>">
                                            </div>
                                        <div class="border-0 mb-4">
                                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                                <button type="submit" name="update" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->
                <?php
            }
        } else {
            echo "No Record Found";
        }
                ?>

                <!-- <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Images</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <div class="product-cart">
                                        <div class="checkout-table table-responsive">
                                            <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="product">Product</th>
                                                        <th class="quantity">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="product-cart d-flex align-items-center">
                                                                <div class="product-thumb">
                                                                    <button class="border-0"><img src="assets/images/product/thunb-2.jpg" class="img-fluid avatar xl" alt="Product"></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
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


<script>
    $(document).ready(function() {
        //Ch-editer
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        //Datatable
        $('#myCartTable')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
        $('.deleterow').on('click', function() {
            var tablename = $(this).closest('table').DataTable();
            tablename
                .row($(this)
                    .parents('tr'))
                .remove()
                .draw();

        });
        //Multiselect
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
    });

    $(function() {
        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
                replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'DÃ©solÃ©, le fichier trop volumineux'
            }
        });
    });
</script>

</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/product-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 12:10:13 GMT -->

</html>