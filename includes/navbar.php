 <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-4 me-0">
        <div class="d-flex flex-column h-100">
                <a href="index.html" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">eBazar</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="dashboard.php"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Products</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-product">   
                            <li><a class="ms-link" href="product-add.php">Product Add</a></li>
                            <li><a class="ms-link" href="product-list.php">Product List</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                            <i class="icofont-notepad fs-5"></i> <span>Orders</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-order">
                            <li><a class="ms-link" href="order-list.php">Orders List</a></li>
                            <li><a class="ms-link" href="order-invoices.php">Order Invoices</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                            <i class="icofont-funky-man fs-5"></i> <span>Customers</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="customers-info">
                            <li><a class="ms-link" href="customers.php">Customers List</a></li>
                            <li><a class="ms-link" href="customer-detail.php">Customers Details</a></li>
                        </ul>
                    </li>
                    <a class="m-link" href="contact_us.php">
                            <i class="icofont-phone-circle fs-5"></i> <span>Contact Us</span></a>
                    <!-- Accounts Commented -->
                    <!-- <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                                class="icofont-ui-calculator"></i> <span>Accounts</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                         Menu: Sub menu ul -->
                    <!--    <ul class="sub-menu collapse" id="menu-Componentsone">
                            <li><a class="ms-link" href="invoices.php">Invoices </a></li>
                        </ul>
                    </li> -->
                </ul>
                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
        </div>
    </div>
<!-- sidebar ends -->

    <!-- main body area -->
<div class="main px-lg-4 px-md-4">

    <!-- Body: Header -->
    <div class="header">
        <nav class="navbar py-4">
            <div class="container-xxl">

                <!-- header rightbar icon -->
                <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                    <div class="d-flex">
                        <a class="nav-link text-primary collapsed" href="help.php" title="Get Help">
                            <i class="icofont-info-square fs-5"></i>
                        </a>
                    </div>
                    <div class="dropdown zindex-popover">
                        <a class="nav-link dropdown-toggle pulse" href="#" role="button"
                            data-bs-toggle="dropdown">
                            <img src="assets/images/flag/GB.png" alt="">
                        </a>
                        <div
                            class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                            <div class="card border-0">
                                <ul class="list-unstyled py-2 px-3">
                                    <li>
                                        <a href="#" class=""><img src="assets/images/flag/GB.png" alt="">
                                            English</a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><img src="assets/images/flag/DE.png" alt="">
                                            German</a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><img src="assets/images/flag/FR.png" alt="">
                                            French</a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><img src="assets/images/flag/IT.png" alt="">
                                            Italian</a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><img src="assets/images/flag/RU.png" alt="">
                                            Russian</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                        <div class="u-info me-2">
                            <p class="mb-0 text-start line-height-sm "><span class="font-weight-bold">
                                <?php echo  $_SESSION['firstname'];  ?>
                            </span></p>
                            <small> <?php echo  $_SESSION['lastname'];  ?> </small>
                        </div>
                        <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-display="static">
                            <img class="avatar lg rounded-circle img-thumbnail"
                                src="assets/images/profile_av.svg" alt="profile">
                        </a>
                        <div
                            class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                            <div class="card border-0 w280">
                                <div class="card-body pb-0">
                                    <div class="d-flex py-1">
                                        <img class="avatar rounded-circle" src="assets/images/profile_av.svg"
                                            alt="profile">
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0"><span class="font-weight-bold">
                                                <?php echo  $_SESSION['firstname']; echo  $_SESSION['lastname']; ?>
                                            </span></p>
                                            <small class=""><?php echo  $_SESSION['email'];  ?> </small>
                                        </div>
                                    </div>

                                    <div>
                                        <hr class="dropdown-divider border-dark">
                                    </div>
                                </div>
                                <div class="list-group m-2 ">
                                    <a href="logout.php"
                                        class="list-group-item list-group-item-action border-0 "><i
                                            class="icofont-logout fs-5 me-3"></i>Signout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="setting ms-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i
                                class="icofont-gear-alt fs-5"></i></a>
                    </div>
                </div>

                <!-- menu toggler -->
                <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#mainHeader">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- main menu Search-->
                <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                    <!-- <div class="input-group flex-nowrap input-group-lg">
                        <input type="search" class="form-control" placeholder="Search" aria-label="search"
                            aria-describedby="addon-wrapping">
                        <button type="button" class="input-group-text" id="addon-wrapping"><i
                                class="fa fa-search"></i></button>

                    </div> -->
                </div>

            </div>
        </nav>
    </div>
    <!-- Body: Header Ends -->

    <!-- Modal Custom Settings-->
    <div class="modal fade right" id="Settingmodal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                        class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings
                                </h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo">
                                        <div class="indigo"></div>
                                    </li>
                                    <li data-theme="tradewind">
                                        <div class="tradewind"></div>
                                    </li>
                                    <li data-theme="monalisa">
                                        <div class="monalisa"></div>
                                    </li>
                                    <li data-theme="blue" class="active">
                                        <div class="blue"></div>
                                    </li>
                                    <li data-theme="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li data-theme="green">
                                        <div class="green"></div>
                                    </li>
                                    <li data-theme="orange">
                                        <div class="orange"></div>
                                    </li>
                                    <li data-theme="blush">
                                        <div class="blush"></div>
                                    </li>
                                    <li data-theme="red">
                                        <div class="red"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-gradient py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                        class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                                <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" id="CheckGradient">
                                    <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar
                                        )</label>
                                </div>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic">
                                        <div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting
                                        </div>
                                    </li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker"
                                                class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker"
                                                class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1"
                                                class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2"
                                                class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3"
                                                class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4"
                                                class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5"
                                                class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                        class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins"
                                                value="font-poppins">
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans"
                                                value="font-opensans" checked="">
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font"
                                                id="font-montserrat" value="font-montserrat">
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-mukta"
                                                value="font-mukta">
                                            <label class="form-check-label" for="font-mukta">
                                                Mukta Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                        class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch">
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                            <label class="form-check-label" for="theme-high-contrast">Enable High
                                                Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary lift">Save Changes</button>
                        </div>
                    </div>
                </div>
        </div>
    <!-- Modal Custom Settings Ends->
    </div>
</div>
