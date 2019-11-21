<?php
$projectID = 1;


if(isset($_POST['sponsor_project'])){
    echo "this is good";
    unset($_POST['sponsor_project']);
}

?>

 <form role ="form" class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <div class ="modal-body">
         <div class="row">
             <div class="col-md-12 marginTop">
                 <p class="form-group marginmiddle">
                     <span class="glyphicon glyphicon-usd"></span>
                     <input class="form-control" type="number" placeholder="Amount" step="1" min="10"/>
             </div>
         </div>
     </div>
     <div class ="modal-footer">
         <input type="submit" name="sponsor_project" value="Sponsor Project" class="btn btn-success">
     </div>
 </form>