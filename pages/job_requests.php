<?php


?>

<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                <h3 class="mb-0">Job Request</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <?php
                if (isset($_SESSION['role_id']) &&
                    in_array($_SESSION['role_id'], [1, 2], true)
                ){
                    echo <<<HTML
                        <!-- start of main row div -->
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                    <!-- start of row of cards -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="small-box text-bg-danger">
                                                    <div class="inner">
                                                    <h3>65</h3>
                                                    <p>New Job Requests</p>
                                                    </div>  
                                                    <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                                        <i class="bi bi-link-45deg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="small-box text-bg-warning">
                                                    <div class="inner">
                                                    <h3>44</h3>
                                                    <p>Pending Job Requests</p>
                                                    </div>
                                                    <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                                                    <i class="bi bi-link-45deg"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            
                                            <div class="col">
                                                <div class="small-box text-bg-success">
                                                    <div class="inner">
                                                    <h3>53</h3>
                                                    <p>Finished Job Requests</p>
                                                    </div>
                                                    <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                                    <i class="bi bi-link-45deg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of row of cards -->
                                    </div>
                                    <!-- end of card-body -->
                                </div>
                                <!-- end of card -->
                            </div>
                            <!-- end of col -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    
                                    </div>
                                    <!-- end of card-body -->
                                </div>
                            </div>
                        
                        </div>
                        <!-- end of main row div -->
                    HTML;
                }
            ?>
        
        </div>
    </div>

</main>