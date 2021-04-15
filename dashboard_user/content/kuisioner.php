<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Keluarga</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-lg col-xs">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Kuisioner</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="bagiana-tab" data-bs-toggle="tab" data-bs-target="#bagiana" type="button" role="tab" aria-controls="bagiana" aria-selected="true">BAGIAN A</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagianb-tab" data-bs-toggle="tab" data-bs-target="#bagianb" type="button" role="tab" aria-controls="bagianb" aria-selected="false">BAGIAN B</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagianc-tab" data-bs-toggle="tab" data-bs-target="#bagianc" type="button" role="tab" aria-controls="bagianc" aria-selected="false">BAGIAN C</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagiand-tab" data-bs-toggle="tab" data-bs-target="#bagiand" type="button" role="tab" aria-controls="bagiand" aria-selected="true">BAGIAN D</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagiane-tab" data-bs-toggle="tab" data-bs-target="#bagiane" type="button" role="tab" aria-controls="bagiane" aria-selected="false">BAGIAN E</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagianf-tab" data-bs-toggle="tab" data-bs-target="#bagianf" type="button" role="tab" aria-controls="bagianf" aria-selected="false">BAGIAN F</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagiang-tab" data-bs-toggle="tab" data-bs-target="#bagiang" type="button" role="tab" aria-controls="bagiang" aria-selected="true">BAGIAN G</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagianh-tab" data-bs-toggle="tab" data-bs-target="#bagianh" type="button" role="tab" aria-controls="bagianh" aria-selected="false">BAGIAN H</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bagiani-tab" data-bs-toggle="tab" data-bs-target="#bagiani" type="button" role="tab" aria-controls="bagiani" aria-selected="false">BAGIAN I</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="bagiana" role="tabpanel" aria-labelledby="bagiana-tab">
                            <?php require_once 'tab/bagiana.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagianb" role="tabpanel" aria-labelledby="bagianb-tab">
                            <?php require_once 'tab/bagianb.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagianc" role="tabpanel" aria-labelledby="bagianc-tab">
                            <?php require_once 'tab/bagianc.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagiand" role="tabpanel" aria-labelledby="bagiand-tab">
                            <?php require_once 'tab/bagiand.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagiane" role="tabpanel" aria-labelledby="bagiane-tab">
                            <?php require_once 'tab/bagiane.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagianf" role="tabpanel" aria-labelledby="bagianf-tab">
                            <?php require_once 'tab/bagianf.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagiang" role="tabpanel" aria-labelledby="bagiang-tab">
                            <?php require_once 'tab/bagiang.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagianh" role="tabpanel" aria-labelledby="bagianh-tab">
                            <?php require_once 'tab/bagianh.php' ?>
                        </div>
                        <div class="tab-pane fade" id="bagiani" role="tabpanel" aria-labelledby="bagiani-tab">
                            <?php require_once 'tab/bagiani.php' ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>