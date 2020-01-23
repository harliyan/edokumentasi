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
            <h2 style="margin-top:0px" class="mt-4">Coba List</h2>
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-4">
                    <?php echo anchor(site_url('coba/create'),'Create', 'class="btn btn-primary"'); ?>
                </div>
                <div class="col-md-4 text-center">
                    <div style="margin-top: 8px" id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                </div>
                <div class="col-md-3 text-right">
                    <form action="<?php echo site_url('coba/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('coba'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                                ?>
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered" style="margin-bottom: 10px">
                <tr>
                    <th  width="10px">No</th>
                    <th class="text-center">Barang</th>
                    <th class="text-center">Action</th>
                    </tr><?php
                    foreach ($coba_data as $coba)
                    {
                        ?>
                        <tr>
                         <td width="70px"><?php echo ++$start ?></td>
                         <td><?php echo $coba->barang ?></td>
                         <td style="text-align:center" width="250px" >
                            <?php 
                            echo anchor(site_url('coba/read/'.$coba->id),'Read'); 
                            echo ' | '; 
                            echo anchor(site_url('coba/update/'.$coba->id),'Update'); 
                            echo ' | '; 
                            echo anchor(site_url('coba/delete/'.$coba->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <div class="row mb-4">
                <div class="col-md-6">
                    <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                    <?php echo anchor(site_url('coba/excel'), 'Excel', 'class="btn btn-success"'); ?>
                    <?php echo anchor(site_url('coba/word'), 'Word', 'class="btn btn-info"'); ?>
                </div>
                <div class="col-md-6 text-right">
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>
