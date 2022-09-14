
<link  href="<?= $data['rootUrl'] ?>global/css/switcher.css" type="text/css" rel="stylesheet"/>
<script src="<?= $data['rootUrl']; ?>global/js/jquery.switcher.js"></script>
<?php foreach($data["list"] as $item){ ?>

<div class="col-md-4" style='margin-top: 25px;'>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">
            <?php echo $item["numero"] ?>. <?php echo $item["nombre"] ?>
          </h3>

          <div class="box-tools pull-right">
            
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
    
          <div class="table-responsive mailbox-messages">

            <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th ></th>
                    <th style='text-align:center' >Yes</th>
                    <th style='text-align:center' >No</th>
                 
                </tr>   
                </thead>
              <tbody>
                <?php foreach($item["tareas"] as $task ){  ?>
                    <tr>
                        <td><?= $task["numero"] ?>.<?= $task["nombre"] ?></td>
                        <td><input class='task' checked="true" name='task<?php echo $task["id"] ?>' type="radio"></td>
                        <td><input value='N' class='task' data-acept='N' name='task<?php echo $task["id"] ?>' type="radio"></td>
                    </tr>
              <?php } ?>
              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">

            <!-- /.btn-group -->
            
        </div>
      </div>
      <!-- /. box -->
</div>
<?php } ?>
<script>
$.switcher('input[type=radio]');
</script>
