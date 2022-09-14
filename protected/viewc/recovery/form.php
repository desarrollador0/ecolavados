<link href="<?= $patch ?>global/admin/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<section class="content-header">
 
    <ol class="breadcrumb">
        <li><a href="<?= $patch ?>">Home</a></li>
        <li><a href="<?= $patch ?>recovery">Recovery</a></li>        
    </ol>
</section>
<br/>
<div class="box ">
    <form id="form1" class="form" action="<?= $patch; ?>mrequest/saveApprove" method="post" name="form1">
        <div class="box-body">
                <fieldset style="width:97%;">
                
                    <legend>General information</legend>

                    <div class="col-lg-4">
                        <label id="l_year">Year*</label>
                        <div class="input-group margin-bottom-20">
                            <span   class="input-group-addon">
                                <i  class="fa fa-code-fork "></i>
                            </span>
                            <select class='form-control' name="year" id="year">
                                <option value="N">[Select]</option>
                                <?php foreach($data["years"] as $year){?>
                                    <option  value="<?php echo $year ?>"><?php echo $year ?></option>
                                <?php } ?>
                            </select>
                        </div><!-- /.input group -->
                    </div>

                    <div class="col-lg-4">
                        <label id="l_month">Month*</label>
                            <div class="input-group margin-bottom-20">
                                <span   class="input-group-addon">
                                    <i  class="fa fa-code-fork "></i>
                                </span>
                                <select class='form-control' name="month" id="month">
                                    <option value="N">[select]</option>
                                    <option value="01">[January]</option>
                                    <option value="02">[February]</option>
                                    <option value="03">[March]</option>
                                    <option value="04">[April]</option>
                                    <option value="05">[May]</option>
                                    <option value="06">[June]</option>
                                    <option value="07">[July]</option>
                                    <option value="08">[August]</option>
                                    <option value="09">[September]</option>
                                    <option value="10">[October]</option>
                                    <option value="11">[November]</option>
                                    <option value="12">[December]</option>                               
                                </select>
                        </div><!-- /.input group -->
                    </div>
                    <div class="col-md-4 ">
                        <br>
                            <button type="button" id="btn-insert" class="btn  bg-green ">
                                 <i class="fa fa-bar-chart" aria-hidden="true"></i>Surprise me
                            </button>
                            <button type="button" id="btn-delete" class="btn  bg-green ">
                                 <i class="fa fa-bar-chart" aria-hidden="true"></i>Delete all
                            </button>
                        
                    </div>
                    <div class="clearfix"></div><br>
            <div class="col-md-12 response">
            
            </div>
                </fieldset>
            </div>
    </form>
</div>
<script>
$("#btn-insert").click(function(){
    $.post("<?php echo $patch ?>recovery/salidas",{
        year:$("#year").val(),
        month:$("#month").val()
    },function(e){
        $(".response").html(e)
    }) 
})

$("#btn-delete").click(function(){
    $.post("<?php echo $patch ?>recovery/deleteall",{
        year:$("#year").val(),
        month:$("#month").val()
    },function(e){
        $(".response").html(e)
    }) 
})
</script>