<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Poli &#38; Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="sb-nav-fixed">

    <!--  Navbar    -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <h4 class="ps-3 pe-3 text-white"><i class="bi bi-vr"></i> Poli &#38; Dokter</h4>
    </nav>

    <!--  </Akhir navbar  -->

    <!-- Main content -->
    <div id="Maincontent">
        <main>
            <div class="container">
                <div class="row mt-5">
                    <div class="col mt-5">

                        <!-- Form -->
                        <form id="form_id" action="list_pasien.php" method="post">
                            <div class="card mb-4 border-success">
                                <div class="card-body bg-success text-white">Pemilihan Poli &#38; Dokter</div>
                                <div class="card-footer align-items-center justify-content-between bg-white">

                                    <!--  Pilih poli  -->
                                    <div class="mb-3">
                                        <label for="no_poli" class="form-label ms-3 mt-2 text-uppercase fs-5">Nama Poliklinik :</label>

                                        <!--  Kita perlu mengisi value 1, 2, 3 pada option untuk no poli-->
                                        <select class="form-control w-75 float-end me-5 mt-2" name="no_poli" id="no_poli">
                                            <option value="">--Pilih Poli--</option>
                                            <option value="1">poli kandungan</option>
                                            <option value="2">poli umum</option>
                                            <option value="3">poli gigi</option>
                                        </select>
                                    </div>
                                    <!-- </Akhir pilih poli -->

                                    <!--  Pilih pilih dokter  -->
                                    <div class="mb-3 mt-5">
                                        <label for="nm_dokter" class="form-label ms-3 mt-2 text-uppercase fs-5">Nama Dokter :</label>
                                        <select name="nm_dokter" class="form-control w-75 float-end me-5 mt-2" id="dokter" required>
                                            <option value="">--Pilih Dokter--</option>

                                            <!-- Hasil nama dokter akan di tampilkan di sini menggunakan AJAX -->
                                        </select>
                                    </div>
                                    <!-- </Akhir pilih dokter -->

                                </div>

                                <!--  Button load  -->
                                <div style="text-align: right;">
                                    <button type="submit" class="btn btn-warning mt-3 mb-3 me-5 fw-bold text-white">LOAD</button>
                                </div>
                                <!-- </Akhir button load -->

                            </div>
                        </form>
                        <!-- </Akhir form -->

                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- </Akhir main content -->

    <!--  Jquery bs 5   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- jquery 3.6.3   -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Script jquery   -->
    <script>
        // ketika dokumen sudah di load
        $(document).ready(function() {

            // dan ketika pemilihan poli tertentu
            $("#no_poli").change(function() {

                // ambil no poli
                let no_poli = $(this).val();

                // lakukan AJAX
                $.ajax({

                    // GET data
                    type: "GET",

                    // pada file ambil_dokter.php
                    url: "ambil_dokter.php",

                    // data yang di ambil
                    data: {
                        no_poli: no_poli,
                    },

                    // ketika sukses
                    success: function(result) {

                        // tampilkan ke select name nm_dokter
                        $("select[name='nm_dokter']").html(result);
                    }
                });
            });
        });
    </script>
</body>

</html>