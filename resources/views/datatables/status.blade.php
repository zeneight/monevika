@if($sql->status==1)
<i class="label label-xs label-success" title="status">
	Online
</i>
@elseif($sql->status===0)
<i class="label label-xs label-danger" title="status">
	Down
</i>
@elseif($sql->status==null)
<i class="label label-xs label-default" title="status">
	Belum Dicek
</i>	
@endif