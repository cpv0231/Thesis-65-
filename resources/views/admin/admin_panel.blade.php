<form action="{{url('admin_panel/activate')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="is_enable" value="1">
	<button>Activate website</button>
</form>

<form action="{{url('admin_panel/deactivate')}}" method="post">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="is_disable" value="0">
	<button>Deactivate website</button>
</form>

<a href="{{url('users/signout')}}">Signout</a>