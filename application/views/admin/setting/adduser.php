<?php $this->load->view('admin/lib/header'); ?>
<?php $this->load->view('admin/lib/topbar'); ?>
<?php $this->load->view('admin/lib/menubar'); ?>

<!-- body home start -->

<div class="flex-fill d-flex flex-column justify-content-center">
    <div class="container-tight py-6">
        <?php if (!empty($this->session->flashdata('message'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (!empty($this->session->flashdata('message_error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('message_error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php echo form_open_multipart('', 'class = "card"'); ?>
        <div class="card-body">
            <h2 class="mb-2 text-center">Buat Akun Baru</h2>
            <div class="mb-2">
                <label class="form-label required">Nama Depan</label>
                <input type="text" class="form-control" name="nama_depan" required placeholder="Enter name">
            </div>
            <div class="mb-2">
                <label class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" name="nama_belakang" placeholder="Enter name">
            </div>
            <div class="mb-2">
                <label class="form-label">No Telpon</label>
                <input type="text" class="form-control" name="hp" placeholder="08xx xxxx xxxx">
            </div>
            <div class="mb-2">
                <label class="form-label required">Username</label>
                <input type="text" class="form-control" name="username" required placeholder="Enter username">
            </div>
            <div class="mb-2">
                <div class="form-label">
                    Foto
                </div>
                <div class="form-file">
                    <input type="file" class="form-file-input" name="foto" id="customFile" />
                    <label class="form-file-label" for="customFile">
                        <span class="form-file-text">Pilih Foto...</span>
                        <span class="form-file-button">Jelajahi</span>
                    </label>
                </div>
            </div>
            <div class="form-group mb-2">
                <label class="form-label required">Akun Sebagai</label>
                <div>
                    <select class="form-select" name="level">
                        <option value="admin">Administrator</option>
                        <option value="sales">Sales</option>
                    </select>
                </div>
            </div>
            <div class="mb-2">
                <label class="form-label required">Password</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" name="password" required placeholder="Password">
                </div>
            </div>
            <div class="form-footer">
                <button type="submit" name="buat_akun" value="1" class="btn btn-primary btn-block">Create new account</button>
            </div>
        </div>
        </form>

    </div>
</div>
<?php $this->load->view('admin/lib/footer'); ?>
<?php $this->load->view('admin/lib/libjs'); ?>

</body>

</html>