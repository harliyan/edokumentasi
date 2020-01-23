<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="col">
         <h2 style="margin-top:0px" class="mt-4">Coba <?php echo $button ?></h2>
         <form action="<?php echo $action; ?>" method="post">
            <div class="form-group">
                <label for="varchar">Barang <?php echo form_error('barang') ?></label>
                <input type="text" class="form-control" name="barang" id="barang" placeholder="Barang" value="<?php echo $barang; ?>" />
            </div>
            <div class="container mb-4">
            <div class="row">
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
            <button type="submit" class="btn btn-primary mr-2"><?php echo $button ?></button> 
            <a href="<?php echo site_url('coba') ?>" class="btn btn-danger">Cancel</a>
            </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
