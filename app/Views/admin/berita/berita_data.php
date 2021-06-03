<table class="table table-bordered" id="dataBerita" width="100%" cellspacing="0">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul Berita</th>
            <th scope="col">Isi</th>
            <th scope="col">Bidang</th>
            <th scope="col">Tanggal</th>
            <th style="width: 20%" scope="col">Gambar</th>
            <th scope="col">Ket</th>
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
                        <?= word_limiter ($berita['news_title'], 5) ?>
                    </td>
                    <td>
                        <?= word_limiter ($berita['news_desc'], 10) ?>
                    </td>
                    <td>
                        <?=  $berita['news_bidang'];?>
                    </td>
                    <td>
                        <?=  $berita['created_at'];?>
                    </td>
                    <td>
                    <img style="width:50%; height:auto" src="<?= $berita['news_image'] ?>" alt="image">
                    </td>

                <td>

                    <button type="button" class="btn btn-success btn-sm" onClick="edit('<?= $berita['id'] ?>')"> <i class="far fa-edit"></i> </button>

                    <button type="button" class="btn btn-danger btn-sm" onClick="hapus('<?= $berita['id'] ?>')"> <i class="far fa-trash-alt"></i> </button>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function () {
        $('#dataBerita').DataTable();
    });
</script>