<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="css/socialdev.css" />
        
        <script src="js/socialdev.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
        <script type="text/javascript">
			slide(); // slide cycle
			responsive(); // all responsive layout
		</script>
        <style>
		body {
			/*background:#3498db;*/
			margin-top: 20px;
			font-family: 'Lato', sans-serif;
		}

		.col1, .col2, .col3, .col4, .col5, .col6, .col7, .col8, .col9, .col10, .col11, .col12 {
			background: #16a085;
			color: #2c3e50;
			margin-bottom: 5px;
			text-align: center;
			padding: 15px 0;
			border-radius:5px;
		}
		.col1:hover, .col2:hover, .col3:hover, .col4:hover, .col5:hover, .col6:hover, .col7:hover, .col8:hover, .col9:hover, .col10:hover, .col11:hover, .col12:hover {
			background: #1abc9c;
			color: #2c3e50;
			margin-bottom: 5px;
			text-align: center;
			padding: 15px 0;
			border-radius:5px;
		}
		h1, h2, h3, h4, h5, h6 { color:#2c3e50; }

		@media all and (max-width: 768px) {
			.row {
				margin: 0 0 100px;
			}
		}
	</style>
    
    </head>
    <body>

        <div class="root">
        
		        
        	<div class="row">

		        <div class="menubar">
					<div class="responsive-menu">
					Menu<a href="javascript:void(0);">
					<span class="menuicon">
						<span class="iconbar"></span>
						<span class="iconbar"></span>
						<span class="iconbar"></span>
					</span></a>
					</div>

					<ul class="menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
					</ul>

				</div>


        
        
        
			


            </div>



		
			<div class="row">

	
				<div class="col12" style="background:none;">

					
						<img src="img/img-responsive.jpg" />

				</div>
				<div class="col4" style="background:none;">

					<button class="btn btn-green"> btn-green </button>
					<button class="btn btn-blue"> btn-blue </button>
					<button class="btn btn-yellow"> btn-yellow </button>
					<button class="btn btn-red"> btn-red </button>
					<button class="btn"> btn </button>

				</div>

				<div class="col4" style="background:none;">

					<button class="btn btn-green"> btn-green </button>
					<button class="btn btn-blue"> btn-blue </button>
					<button class="btn btn-yellow"> btn-yellow </button>
					<button class="btn btn-red"> btn-red </button>
					<button class="btn"> btn </button>

				</div>

				<div class="col4 last" style="background:none;">

					<button class="btn btn-green"> btn-green </button>
					<button class="btn btn-blue"> btn-blue </button>
					<button class="btn btn-yellow"> btn-yellow </button>
					<button class="btn btn-red"> btn-red </button>
					<button class="btn"> btn </button>

				</div>


			</div>

				<div class="row">

					<div class="col3 sales">
						<img src="img/tw.png" width="120" />
						<div class="description">
							<h2>Web Oriented</h2>
							100% convertable to HTML/CSS layout.
						</div>
						<button class="btn btn-green"> Saiba mais </button>
					</div>

					<div class="col3 sales">
						<img src="img/tw.png" width="120" />
						<div class="description">
							<h2>Web Oriented</h2>
							100% convertable to HTML/CSS layout.
						</div>
						<button class="btn btn-green"> Saiba mais </button>
					</div>

					<div class="col3 sales">
						<img src="img/tw.png" width="120" />
						<div class="description">
							<h2>Web Oriented</h2>
							100% convertable to HTML/CSS layout.
						</div>
						<button class="btn btn-green"> Saiba mais </button>
					</div>

					<div class="col3 last sales ">
						<img src="img/tw.png" width="120" />
						<div class="description">
							<h2>Web Oriented</h2>
							100% convertable to HTML/CSS layout.
						</div>
						<button class="btn btn-green"> Saiba mais </button>
					</div>

				</row>

		</div>
       
    </body>
</html>