<!-- model form -->
<h3> Modal form </h3>
<div class="row">
<div class="col-sm-5" style="background: pink">
<div class="panel-body">
<!-- button to generate model form -->
<a href="#myModal" data-toggle="modal" class="btn btn-xs btn-success">
Form in Modal
</a>
<!-- model form settings -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"␣˓→class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</
˓→button>
<h4 class="modal-title">Form Tittle</h4>
</div>
<div class="modal-body">
<!-- actual form -->
<form role="form">
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input class="form-control" id="exampleInputEmail3" placeholder="Enter email
˓→" type="email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input class="form-control" id="exampleInputPassword3" placeholder="Password
˓→" type="password">
</div>
<div class="form-group">
<label for="exampleInputFile">File input</label>
<input id="exampleInputFile3" type="file">
<p class="help-block">Example block-level help text here.</p>
</div>
<div class="checkbox">
<label>
<input type="checkbox"> Check me out
</label>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
<!-- actual form ends -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<hr>