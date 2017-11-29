@if (session()->has('flash_notification.message'))
<div class="container">
    <div class="alert alert-{{ session()->get('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! session()->get('flash_notification.message') !!}
    </div>
</div>
@endif

<script>
	window.setTimeout(function() {
    	$(".alert").fadeTo(500, 0).slideUp(500, function(){
        	$(this).remove(); 
    	});
	}, 4000);
</script>