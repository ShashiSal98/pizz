<h1 style="margin-top:98px">Welcome back <b><?php echo $_SESSION['adminusername']; ?></b></h1>


<div class="container">
  <div class="row">
  <h3 style="background-color:gray;">Total Summary</h3>
    </div>
</div>


<div class="container px-4">
  <div class="row gx-5">

<div class="row">
<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-info o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-shopping-cart"></i>
</div>
<div class="mr-5"> Total Orders </div>
</div>
<a class="card-footer text-white clearfix small z-1" href="index.php?page=orderManage">
<span class="float-left">View Details</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-warning o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-list"></i>
</div>
<div class="mr-5"> Total Users </div>
</div> 

<a class="card-footer text-white clearfix small z-1" href="index.php?page=userManage">
<span class="float-left">View Details</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>

<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-success o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-comments"></i>
</div>
<div class="mr-5">Total Messages</div>
</div>
<a class="card-footer text-white clearfix small z-1" href="index.php?page=inquiryManage">
<span class="float-left">View Details</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>

<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-danger o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-support"></i>
</div>
<div class="mr-5">Total Items</div>
</div>
<a class="card-footer text-white clearfix small z-1" href="index.php?page=menuManage">
<span class="float-left">View Details</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>
</div>


</div>
</div>

<br>

<div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" type="button">Refresh</button>
</div>
</div>
<br>

</table>
</div>