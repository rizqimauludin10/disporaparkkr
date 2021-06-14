<table class="table table-bordered" id="dataCategory" width="100%" cellspacing="0">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Status</th>
            <th scope="col">Ket</th>
        </tr>
    </thead>

            
    <tbody>
        <?php $no = 0;
        foreach($data_category as $cat) :
            $no++; 
            ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                    <td>
                        <?= word_limiter ($cat['category_name'], 5) ?>
                    </td>
                    <td>
                        <?= word_limiter ($cat['category_desc'], 10) ?>
                    </td>
                    <td>
                        <?= word_limiter ($cat['category_status'], 1) ?>
                    </td>

                <td>

                    <button type="button" class="btn btn-success btn-sm" onClick="edit('<?= $cat['id'] ?>')"> <i class="far fa-edit"></i> </button>

                    <button type="button" class="btn btn-danger btn-sm" onClick="hapus('<?= $cat['id'] ?>')"> <i class="far fa-trash-alt"></i> </button>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function () {
        $('#dataCategory').DataTable();
    });
</script>