<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Products
	</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
	<style type="text/css">
		.sidebar{
			height: 90vh;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Navbar</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Link</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Dropdown
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	          </ul>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link disabled">Disabled</a>
	        </li>
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="sidebar col-sm-3 d-sm-block d-none text-bg-dark">
				<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
	  				<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" href="#">Link</a>
				    </li>
				    <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					              Dropdown
					        </a>
						<ul class="dropdown-menu">
					    	<li><a class="dropdown-item" href="#">Action</a></li>
					        <li><a class="dropdown-item" href="#">Another action</a></li>
					        <li>
					            <hr class="dropdown-divider">
					        </li>
					        <li><a class="dropdown-item" href="#">Something else here</a></li>
					    </ul>
				    </li>
				</ul>

			</div>
			<div class="col">
				<section>
					<div class="row">
						<div class="col">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</p>
							
						</div>
					</div>
				</section>
				
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>