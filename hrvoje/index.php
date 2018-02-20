<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
    .demo-content{
        padding: 15px;
        font-size: 18px;
        min-height: 300px;
        background: #dbdfe5;
        margin-bottom: 10px;
    }
    .demo-content.bg-alt{
        background: #abb1b8;
    }
    p{
        padding: 50px;
        font-size: 32px;
        font-weight: bold;
        text-align: center;
        background: #dbdfe5;
    }
	    .main-content{
		min-height: 330px;
        background: #dbdfe5;
    }
    .sidebar-content{
        min-height: 150px;
        margin-bottom: 30px;
        background: #b4bac0;
    }
	#naslov{
		color: red;
		
	
	}
	
    }
</style>
</head>
<body>

	<?php 
	
  
	

	
	class segrt {
		public $ime;
		public $prezime;
		function __construct($ime,$prezime) {
			$this->ime = $ime;
			$this->prezime = $prezime;
		}
		function imePrez(){
			
			return $this->ime.' '.$this->prezime;
		}
		
	}
    $naslov = 'anonimus';
	if(isset($_GET['ime']) && isset($_GET['prezime'])){
        $objekt = new segrt ($_GET['ime'], $_GET['prezime']);
        $naslov = $objekt->imePrez();
        echo '<pre>';
        var_dump($objekt);
        echo '</pre>';
    }



//ovaj dio koda je novi koji ces vidjet sad u diff file
	
	
	
	?>
	    <h1 id = "naslov" align="center"><?php echo 'Hello '. $naslov;   ?> </h1>


	<div class="container-fluid" style="color:#0FC0FF">
       <h1>Bootstrap Page <small><abbr title="blebetanje">bla bla.<small></abbr></h1>
      
    </div>
	<div class="container">
	   <div class="row">
	      <div class="col-sm-6"><h3 class="display-4" align="center">col1</h3></div>
		  <div class="col-sm-6"><h3 align="center">col2</h3></div>
		</div>  
    </div>
	
	<div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-2">
                <div class="demo-content">.col-sm-3 .col-md-2</div>
            </div>
            <div class="col-sm-9 col-md-8">
                <div class="demo-content bg-alt">.col-sm-9 .col-md-8</div>
            </div>
            <div class="col-sm-12 col-md-2">
                <div class="demo-content">.col-sm-12 .col-md-2</div>
            </div>
        </div>
    </div>
	
	<div class="container">
        <div class="row">
            <div class="col-md-3"><p>Box 1</p></div>
            <div class="col-md-3"><p>Box 2</p></div>
            <div class="col-md-3"><p>Box 3</p></div>
            <div class="col-md-3"><p>Box 4</p></div>
            <div class="col-md-4"><p>Box 5</p></div>
            <div class="col-md-4"><p>Box 6</p></div>
            <div class="col-md-4"><p>Box 7</p></div>
            <div class="col-md-4"><p>Box 8</p></div>
            <div class="col-md-4"><p>Box 9</p></div>
            <div class="col-md-4"><p>Box 10</p></div>
            <div class="col-md-4"><p>Box 11</p></div>
            <div class="col-md-4"><p>Box 12</p></div>
        </div>
    </div>
	
	<div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div class="main-content"></div>
            </div>
            <div class="col-xs-4">
                <!--Nested rows within a column-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="sidebar-content"></div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-xs-12">
                        <div class="sidebar-content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	


</body>
</html>        