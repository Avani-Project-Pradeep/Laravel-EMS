@include('layouts.manage_layout')



<div class="w3-main" style="margin-left:300px; margin-right:400px;  margin-top:80px;">
<form method="post" action="searchresults">
    @csrf
    <div class="input-group">
  <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search"  name="search" required
    aria-describedby="search-addon" />


      <input type="submit" class="btn btn-outline-primary" value="Search">
</div>
</form>
<br><br>
@if ($message = Session::get('fail'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


</div>
