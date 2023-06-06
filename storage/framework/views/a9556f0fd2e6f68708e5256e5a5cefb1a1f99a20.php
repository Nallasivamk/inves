<?php if($message = Session::get('success')): ?>
<script>
$(document).ready(function(){
	js_notification('success','<?php echo $message; ?>');
})
</script>
<?php endif; ?>
  
<?php if($message = Session::get('error')): ?>
<script>
$(document).ready(function(){
	js_notification('success','<?php echo $message; ?>');
})
</script>
<?php endif; ?>
   
<?php /**PATH /media/joshith/Workspace/Trivizion/Outsourcing/invesment/resources/views/site/layouts/flashMessage.blade.php ENDPATH**/ ?>