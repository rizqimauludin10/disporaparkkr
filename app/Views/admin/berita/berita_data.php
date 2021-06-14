<table class="table table-bordered" id="dataBerita" width="100%" cellspacing="0">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul Berita</th>
            <th scope="col">Isi</th>
            <th style="width: 10%" scope="col">Bidang</th>
            <th style="width: 10%" scope="col">Tanggal</th>
            <th style="width: 15%" scope="col">Gambar</th>
            <th style="width: 10%" scope="col">Ket</th>
        </tr>
    </thead>

            
    <tbody>
        <?php $no = 0;
        foreach($data_berita as $berita) :
            $no++; 
            ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                    <td>
                        <?= word_limiter ($berita['news_title'], 7) ?>
                    </td>
                    <td>
                        <?= word_limiter ($berita['news_desc'], 10) ?>
                    </td>
                    <td>

                        <?php if($berita['news_bidang'] == 1) {
                            echo ('<span class="badge bg-success text-dark"> <b class="text-light">Kepemudaan</b> </span>');
                        } else if($berita['news_bidang'] == 2) {
                            echo ('<span class="badge bg-success text-dark"> <b class="text-light">Olahraga</b></span>');
                        } else if($berita['news_bidang'] == 3) {
                            echo ('<span class="badge bg-success text-dark"> <b class="text-light">Pariwisata</b></span>');
                        } else if($berita['news_bidang'] == 4) {
                            echo ('<span class="badge bg-success text-dark"><b class="text-light">Ekonomi Kreatif</b></span>');
                        }
                        ?>

                    </td>

                    <td>
                        <?= date("d-m-Y", strtotime($berita['news_tanggal'])) ?>
                        <b><?= $berita['user_name']; ?></b> 
                        
                    </td>
                    <td>
                    <img style="width:50%; height:auto" src="<?= base_url($berita['news_image']); ?>" alt="image">
                    </td>

                <td>

                    <button type="button" class="btn btn-success btn-sm" onClick="edit('<?= $berita['id'] ?>')"> <i class="far fa-eye"></i> </button>

                    <button type="button" class="btn btn-warning btn-sm" onClick="edit('<?= $berita['id'] ?>')"> <i class="far fa-edit"></i> </button>

                    <button type="button" class="btn btn-danger btn-sm" onClick="deleteData('<?= $berita['id'] ?>')"> <i class="far fa-trash-alt"></i> </button>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function () {
        $('#dataBerita').DataTable();
    });



    function deleteData(id) {
        Swal.fire({
            title: 'Hapus',
            text: "Yakin ingin menghapus data pelayanan ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if(result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "<?= site_url('berita/deleteData') ?>",
                    data: {
                        id : id
                    },
                    dataType : "json",
                    success : function(response) {
                        if(response.sukses){
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.sukses
                            });
                            dataBerita();
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
            }
        })
    }
</script>