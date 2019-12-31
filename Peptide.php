<?php require("common/head.php"); ?>
<body>
	<link rel="stylesheet" href="css/view.css" type="text/css" />
	<div id="container">
		<div id="header">
			<?php require("common/header-view.php"); ?>
		</div>
		<style>
			/*div{border:1px solid black;}*/
			#ViewMain{min-height:520px;}
			#maincontent{/*background-color:#deeff5; */ left:200px; width:1000px; margin-left:200px; float:left;}
			
			.type{color:#963c64;-webkit-margin-after: 0.5em;font-size:25px}
			
			#peptide{height:80px;}
			.Peptidetab{width:970px; font-weight:bold;text-align:left;margin-top:20px;border-radius:3px;margin-left:20px;}
			.Peptidetab th{font-family:"Open Sans",Arial,sans-serif;font-size:21px;font-weight:bold;}
			.Peptidetab td{font-size:20px;font-weight:bold;}
			.Peptidetab a:link,a:visited{color:rgba(0, 143, 149, 1)}
			.Peptidetab a:hover,a:active{color:rgba(153, 102, 153, 1);border-bottom:#996699 dotted 1px}
			.bold{font-weight:bold;}
			.normal{font-weight:bold;text-align:center;}
			
			h1{padding-top:20px;}
			#tit{color:#963c64;font-size:30px;padding:24px 10px 0px 5px;}
			#org{font-size:25px;font-family:"Open Sans",Arial,sans-serif;}
			#hr1{text-align:center;width:125%;height:3px;border:none;border-top:1px solid #820336;border-bottom:1px dashed #820336;}
			.hr2{width:95%;height:3px;border:none;border-top:0px;border-bottom:1px dashed #820336;}
			
			
			
		</style>
		<div id="ViewMain">
			<div>
				<div id="maincontent">
					<?php 
						require("PeptideView.php");
						$page = new Peptide();
						$id = $_GET["pid"];
						//$time1=time();
						$page->BasicPeptide($id);
						//$time=time()-$time1;
						//echo "$time<br/>";
					?>
					
					
					<br/><br/><br/><br/><br/><br/>
				</div>
			</div>
			
		</div>
		<script type="text/javascript">
					$(".Peptidetab tr:first").css({'border':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(even)").css({'border-left':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(even)").css({'border-right':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(even)").css({'border-top':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(even)").css({'border-bottom':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(odd)").css({'border-left':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(odd)").css({'border-right':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(odd)").css({'border-top':'1px dashed rgba(0, 143, 149, 0.4)'});
					$(".Peptidetab tr:nth-child(odd)").css({'border-bottom':'1px dashed rgba(0, 143, 149, 0.4)'});
					
		</script>
		<br class="clearfloat" />
		<?php require("common/foot.php"); ?>