<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Data</h1>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pertanyaan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-databagian-tab" data-bs-toggle="tab" data-bs-target="#nav-databagian" type="button" role="tab" aria-controls="nav-databagian" aria-selected="true">Data Bagian</button>
                            <button class="nav-link" id="nav-datapertanyaan-tab" data-bs-toggle="tab" data-bs-target="#nav-datapertanyaan" type="button" role="tab" aria-controls="nav-datapertanyaan" aria-selected="false">Data Pertanyaan</button>
                            <button class="nav-link" id="nav-subpertanyaan-tab" data-bs-toggle="tab" data-bs-target="#nav-subpertanyaan" type="button" role="tab" aria-controls="subpertanyaan" aria-selected="false">Data Sub Pertanyaan</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-databagian" role="tabpanel" aria-labelledby="nav-databagian-tab">
                            <form action="" class="mb-3 mt-3" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Bagian</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="namabagian">
                                </div>
                                <button class="btn btn-primary" id="btnTambahBagian">+ Tambah Data</button>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataBagian" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Bagian</th>
                                            <th>Nama Bagian</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Bagian</th>
                                            <th>Nama Bagian</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        require_once 'php/koneksi.php';
                                        $sqlgetbagian = "SELECT * FROM table_bagian";
                                        $result = $conn->query($sqlgetbagian);

                                        if ($result->num_rows > 0) {
                                            $nomor = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>
                                                            <td>$nomor</td>
                                                            <td>" . $row['id_bagian'] . "</td>
                                                            <td>" . $row['nama_bagian'] . "</td>
                                                        </tr>";
                                                $nomor++;
                                            }
                                        }

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-datapertanyaan" role="tabpanel" aria-labelledby="nav-datapertanyaan-tab">
                            <form action="" class="mb-3 mt-3" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Bagian</label>
                                    <select class="form-control" name="namabagian" id="namabagian">
                                        <option value="" selected disabled>Pilih Bagian...</option>
                                        <?php
                                        $sqlgetselect = "SELECT * FROM table_bagian";
                                        $result = $conn->query($sqlgetselect);

                                        if ($result->num_rows > 0) {
                                            $nomor = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['nama_bagian'] . "' >" . $row['nama_bagian'] . "</option>";
                                                $nomor++;
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pertanyaan</label>
                                    <textarea type="text" class="form-control" id="pertanyaan" name="pertanyaan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Indikator</label>
                                    <textarea type="text" class="form-control" id="indikator" name="indikator"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tipe Pilihan</label>
                                    <select class="form-control" name="tipepilihan" id="tipepilihan">
                                        <option value="" selected disabled>Pilih Opsi Pilihan...</option>
                                        <option value="Radio Button">Radio Button</option>
                                        <option value="Checklist">Checklist</option>
                                        <option value="Input Type">Input Type</option>
                                        <option value="">Tidak Ada</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" id="btnTambahPertanyaan">+ Tambah Data</button>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataPertanyaan" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Bagian</th>
                                            <th>Nama Bagian</th>
                                            <th>Pertanyaan</th>
                                            <th>Indikator</th>
                                            <th>Tipe Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Bagian</th>
                                            <th>Nama Bagian</th>
                                            <th>Pertanyaan</th>
                                            <th>Indikator</th>
                                            <th>Tipe Pilihan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php

                                        $sqlgetpertanyaan = "SELECT * FROM table_pertanyaan";
                                        $result = $conn->query($sqlgetpertanyaan);

                                        if ($result->num_rows > 0) {
                                            $nomor = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>
                                                            <td>$nomor</td>
                                                            <td>" . $row['id_pertanyaan'] . "</td>
                                                            <td>" . $row['id_bagian'] . "</td>
                                                            <td>" . $row['pertanyaan'] . "</td>
                                                            <td>" . $row['indikator'] . "</td>
                                                            <td>" . $row['tipe_pilihan'] . "</td>
                                                        </tr>";
                                                $nomor++;
                                            }
                                        }

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-subpertanyaan" role="tabpanel" aria-labelledby="nav-subpertanyaan-tab">
                            <form action="" class="mb-3 mt-3" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Pertanyaan</label>
                                    <select class="form-control" name="namabagian" id="namabagian2">
                                        <option value="" selected disabled>Pilih Kode Bagian...</option>
                                        <?php
                                        $sqlgetsub = "SELECT * FROM table_bagian";
                                        $result = $conn->query($sqlgetsub);

                                        if ($result->num_rows > 0) {
                                            $nomor = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['id_bagian'] . "' >" . $row['id_bagian'] . "</option>";
                                                $nomor++;
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sub Pertanyaan</label>
                                    <textarea type="text" class="form-control" id="subpertanyaan" name="subpertanyaan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Indikator</label>
                                    <textarea type="text" class="form-control" id="indikator2" name="indikator"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tipe Pilihan</label>
                                    <select class="form-control" name="tipepilihan" id="tipepilihan2">
                                        <option value="" selected disabled>Pilih Opsi Pilihan...</option>
                                        <option value="Radio Button">Radio Button</option>
                                        <option value="Checklist">Checklist</option>
                                        <option value="Input Type">Input Type</option>
                                        <option value="">Tidak Ada</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" id="btnTambahSubPertanyaan">+ Tambah Data</button>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataPertanyaan" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Bagian</th>
                                            <th>Sub Pertanyaan</th>
                                            <th>Indikator</th>
                                            <th>Tipe Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Pertanyaan</th>
                                            <th>Sub Pertanyaan</th>
                                            <th>Indikator</th>
                                            <th>Tipe Pilihan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php

                                        $sqlgetpertanyaan = "SELECT * FROM table_kuisioner";
                                        $result = $conn->query($sqlgetpertanyaan);

                                        if ($result->num_rows > 0) {
                                            $nomor = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>
                                                            <td>$nomor</td>
                                                            <td>" . $row['id_bagian'] . "</td>
                                                            <td>" . $row['sub_pertanyaan'] . "</td>
                                                            <td>" . $row['indikator'] . "</td>
                                                            <td>" . $row['tipe'] . "</td>
                                                        </tr>";
                                                $nomor++;
                                            }
                                        }

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->