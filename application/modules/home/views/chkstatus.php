<center>
<form method="get">
    <div class="container">
        <div class="row">
            <h2>ตรวจสอบสถานะ</h2>
            <div id="custom-search-input">
                <div class="input-group col-md-3">
                    <input name="code" type="text" class="search-query form-control" placeholder="รหัสตรวจสอบ" value="<?php echo @$_GET['code']?>" />
                    <span class="input-group-btn">
                        <input class="btn" type="submit" value="ตรวจสอบ">
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
</center>

<style>
.red{color:red;}
.wrap{border: 4px solid #4CAF50; border-radius: 25px; width:600px; margin:0 auto; padding:50px;}
</style>
<div style="padding-top: 50px;">
    <div class="wrap">
        <div>
            ชื่อ-สกุล / กลุ่ม/องค์กร : 
            <?php if(@$rs->type == 1 || @$rs->type == 2):?>

                <strong><?php echo @$rs->fullname?></strong>

            <?php elseif((@$rs->type == 3 || @$rs->type == 4)):?>

                <strong><?php echo @$rs->g_name?></strong>

            <?php endif;?>
        </div> 
        <!-- <div>สถานะ : <strong><?php echo $rs->status?></strong></div> -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>วันที่</th>
                    <th>สถานะ</th>
                    <th>หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <?php if(@$_GET['code']):?>
                    <?php foreach($rs->status->order_by('status_date','desc')->get() as $row):?>
                        <tr>
                            <td style="width:25% !important;"><?php echo DB2Date($row->status_date) ?></td>
                            <td style="width:25% !important;"><?php echo $row->status?></td>
                            <td style="width:50% !important;"><?php echo empty($row->status_note) ? '-' : $row->status_note ?></td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
</div>

<style>
#custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
    }
 
    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-input button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color:#D9230F;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }
</style>