<?php require("common/head.php"); ?>
<body>
	<div id="container">
		<div id="header">
			<?php require("common/header.php"); ?>
		</div>
		<style>
			p font{color:#963c64}
			#result table{margin-left:50px;margin-top:20px;border-radius:4px;}
			#result th{ font-family:Arial,"Open Sans",sans-serif;padding:7px;background-color:rgba(0, 143, 149, 0.4);line-height:18px;font-size:18px;font-weight:bold;}
			
			
			#result td{ border:0px dashed rgba(202, 135, 153, 0.4);padding:8px;background-color:rgba(0, 143, 149, 0);line-height:18px;font-size:16px;font-weight:bold;background-color:rgba(255, 255, 255, 0.6)}
			#result a:link,a:visited{color:rgba(0, 143, 149, 1);border-bottom:#996699 dotted 0px;}
			#result a:hover,a:active{color:#996699;border-bottom:#996699 dotted 1px;}
			
			img{vertical-align:middle;}
			p{font-weight:bold;}
			#Name{font-size:22px;color:#963c64;padding:24px 0px 0px 5px}
			#Num{color:#963c64;}
			hr{text-align: center;
				width: 95%;
				height: 3px;
				border: none;
				border-top: 1px solid #820336;
				border-bottom: 1px dashed #820336;}
				
			a.resdw:link{font-size:16px;}
		</style>
		<div id="Main">
			<?php require("../side-sy.php"); ?>
			<?php require("common/IPcount.php"); ?>
			<div id="content" class="story">
				<br/> 
				<div id="result">
					<?php
						require ('Resource.php');
						$search = new Search();
						$type = $_GET["type"];
						if($type == "simple"){
							$page=$_GET['page'];
							if($page >= 2 or empty($_POST["Simple_Search_Input"])){
								if(!isset($_SESSION)){session_start();}
								$search->simpleSearch($_SESSION["simpleSearch"][0], $_SESSION["simpleSearch"][1],$page);
							}else{
								$search->simpleSearch($_POST["Simple_Search_Input"], $_POST["Tag"],$page);
							}
						}else if($type == "advance"){
							$num = $_POST['num'];
							$tag = $_POST['tag'];
							$input = $_POST['input'];
							for($i=0;$i<$num;$i++){
								$nameTagOption = "tagOption".$i;
								$nameTag = "tag".$i;
								$nameInput = "input".$i;
								$nameTagOptions[$i] = $_POST[$nameTagOption];
								$nameTags[$i] = $_POST[$nameTag];
								$nameInputs[$i] = $_POST[$nameInput];
							}
							$search->advanceSearch($num,$tag,$input,$nameTagOptions,$nameTags,$nameInputs);
						}else if($type == "batch"){
							$search->BatchSearch($_POST["Batch_Search_Input"], $_POST["Tag"]);
						}elseif($type=="blast"){
							$search->blastSearch($_POST["Blast_Input"], $_POST["E_value"]);
						}else if($type=="Browse"){
							$page=$_GET['page'];
							if($page >= 2 or empty($_GET["Species"])){
								if(!isset($_SESSION)){session_start();}
								$search->browse($_SESSION["Browse"],$page);
							}else{
								$search->browse($_GET["Species"], $page);
							}
						}else if($type=="Browse1"){
							$page=$_GET['page'];
							if($page >= 2 or empty($_GET["Residue"])){
								if(!isset($_SESSION)){session_start();}
								$search->browse1($_SESSION["Browse1"],$page);
							}else{
								$search->browse1($_GET["Residue"], $page);
							}
						}else if($type=="Peptide"){
							$search->peptideSearch($_POST["Peptide_Input"],"All");
						}
					?>
					<br/>
				</div>
				<script type="text/javascript">
					$("#result tr:first").css({'border':'2px dashed rgba(0, 143, 149, 0.4)'});
					$("#result tr:nth-child(odd)").css({'border-left':'2px dashed rgba(0, 143, 149, 0.4)'});
					$("#result tr:nth-child(odd)").css({'border-right':'2px dashed rgba(0, 143, 149, 0.4)'});
					$("#result tr:nth-child(even)").css({'border-left':'2px dashed rgba(0, 143, 149, 0.4)'});
					$("#result tr:nth-child(even)").css({'border-right':'2px dashed rgba(0, 143, 149, 0.4)'});
					//$("#result tr:last").css({'border-top':'2px dashed rgba(0, 143, 149, 0.4)'});
					$("#result tr:last").css({'border-bottom':'2px dashed rgba(0, 143, 149, 0.4)'});
					$("#result tr:nth-child(even)").css({'background-color':'rgba(0, 143, 149, 0.2)'});
					//$("#result tr:last").css({'background-color':'white'});
				</script>
			</div>
		</div>
		<br class="clearfloat" />
		<script src="js/3Dmol.js"></script>
		<script type="text/javascript" src="js/ui/jquery.js"></script>
		<script type="text/javascript" src="js/ui/jquery-ui.min.js"></script>
		<?php require("common/foot.php"); ?>