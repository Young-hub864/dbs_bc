<?php
 include 'header.php';
?>
    <div class="container">
        <div class="logo">
            <div class="logo_img">
                <img src="images/logo-black.png">
            </div>
        </div>
        <div class="page-inner text-center">
                <h3 style="font-size:40px;margin:0px;font-weight:700;" class="section-title with-border">Asset Directories</h3>
        </div>
    </div>
    <div class="container">
        <div class="table_contents">
        <table style="margin:0 auto;width:50%;" class="table table-striped mg-b-0 text-md-nowrap mt-5">
         <thead class="table-black">
            <tr>
               <th class="table_hd text-white">Asset Name</th>
               <th class="table_hd text-white">Asset Type</th>
               <th class="table_hd text-white">Currency</th>
               <th class="table_hd text-white">Rate</th>
            </tr>
         </thead>
         <tbody>
            <tr>
            <?php
            $Ast_name = isset($_POST['Ast_name']) ? $_POST['Ast_name'] : "";
            $type       = isset($_POST['Asst_type']) ? $_POST['type'] : "";
            $currency      = isset($_POST['currency']) ? $_POST['currency'] : "";
            $rate      = isset($_POST['rate']) ? $_POST['rate'] : "";
            ?>
            </tr>
            <tr >
            <td class="table_dt"><?php echo ($_POST['Ast_name']);?></td>
            <td class="table_dt "><?php echo ($_POST['type']);?></td>
            <td class="table_dt"><?php echo ($_POST['currency']);?></td>
            <td class="table_dt"><?php echo ($_POST['rate']);?></td>
</tr>
        </div>
    </div>