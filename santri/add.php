<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="h3 col-8">Tambah Santri</div>
                <div class="col-4">
                    <a href="?m=santri&&=add" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=santri&s=save" method="post">
                    <div class="mb-3">
                        <input type="text" name="nis" class="form-control" placeholder="No Induk Santri" required
                            autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Santri" required
                            autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin:</label>&nbsp;
                        <input type="radio" name="gender" value="laki-laki" required>laki-laki &nbsp;
                        <input type="radio" name="gender" value="perempuan" required>perempuan
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pob" class="form-control" placeholder="Tempat lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="dob" class="form-control" placeholder="Tanggal Lahir" required>
                    </div>
                    <div>
                        <select name="major_id" class="form-control" required>
                            <option value="">- Pilih Jurusan -</option>
                            <?php
                            include_once('config.php');
                            $sql = "SELECT id, name FROM majors";
                            $quary = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_array($quary)) {
                                ?>
                                <option value="<?= $r['id'] ?>"><?= $r['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-warning">&nbsp;
                        <input type="submit" name="save" value="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>