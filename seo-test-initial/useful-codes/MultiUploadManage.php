
<form method="post" action="post.php">
<div class="form-group increment">
                 
    <input type="file" name="slider[]" class="form-control"  required />
                  
</div>

<div class="clone hide">
  <div class="control-group input-group" style="margin-top:10px">
      <input type="file" name="slider[]" class="form-control">
      <div class="input-group-btn"> 
      <button class="btn btn-danger" id="delete-slider" type="button"><i class="glyphicon glyphicon-remove"></i> حذف</button>
      </div>
  </div>
</div>
<div class="input-group-btn"> 
      <button class="btn btn-success" id="add-slider" type="button"><i class="glyphicon glyphicon-plus"></i>اسلایدر اضافه</button>
</div>

</form>



<script>
 $("#add-slider").click(function(){ 
      var html = $(".clone").html();
      $(".increment").after(html);
  });
$("body").on("click","#delete-slider",function(){ 
      $(this).parents(".control-group").remove();
  });
</script>
