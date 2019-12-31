<?php require("common/head.php"); ?>
<style type="text/css">

</style>
<body>
	<div id="container">
		<div id="header">
			<?php require("common/header.php"); ?>
		</div>
		<div id="Main">
			<?php require("../side-sy.php"); ?>
			<?php require("common/IPcount.php"); ?>
			<style>
				/*div{border:1px solid black;}*/
				
				td.imgstat{padding-left:0px;}
				#stata td {padding-right:0px;text-align:center;}
				img{vertical-align:middle;}
				ul{margin-block-start:0px;margin-block-end:0px;margin-top:5px;margin-bottom:5px;}
				#feahiden, #chahiden{margin-block-start:0px;margin-block-end:0px;display:none;}
				.versionname1{padding-top:0px;margin-top:25px;}
				.versionname{padding-top:10px;margin-top:0px;}
				
				.version{margin-top:-100px;vertical-align:top;}
				.feature, .change{margin-top:-10px;}
				
				#overview{width:95%; }
				p{text-align:justify; }
				p font{color:#963C64; font-weight:bold; }
				font.asp{color:rgba(0,143,149,1); font-weight:bold; }
				p a:link,p a:visited{font-size:16px;color:rgba(0,143,149,1);border-bottom:#996699 dotted 0px;}
				p a:hover,p a:active{font-size:16px;color:#996699;border-bottom:#996699 dotted 1px}
				
				#class{color:rgba(0,143,149,1)}
				#Example{min-height:300px; width:1050px; }
				#Example a{border:0 none;}
				#Example1{    background-color: #438496;border: 0px;font-family: Verdana,Arial,sans-serif;color: #fff;height:21px;}
				#clear{    background-color: #438496;border: 0px;font-family: Verdana,Arial,sans-serif;color: #fff;height:21px;}
				#sub{    background-color: #438496;border: 0px;font-family: Verdana,Arial,sans-serif;color: #fff;height:21px;}
				#PTMPDB{float:left; border:0px;background-color: ;margin-top:-50px; color: rgba(0,143,149,1);font-weight: bold;}
				#exam a:hover,#exam a:active,#PTMPDB a:hover,#PTMPDB a:active{border-bottom:#996699 dotted 0px;font-size:16px;}
				#exam a:link,#exam a:visited,#PTMPDB a:link,#PTMPDB visited{border-bottom:#996699 dotted 0px;,font-size:16px;}
				#PTMSVG{margin-left:20px;float:left; width:600px; height:60px; border-style:outset;border: 2px solid rgba(202, 135, 153, 0.4);}
				#PTMMSA{margin-left:20px; margin-top:5px;float:left; width:600px; border-style:outset;border: 2px solid rgba(202, 135, 153, 0.4);}
				
				#welcome{margin-left:0px; background-color:rgba(255, 255, 255, 0.6); border-radius: 7px; border: 2px dashed rgba(202, 135, 153, 0.4);width:1130px;}
				#info{width:600px; height:250px;font-family:Arial, Helvetica, sans-serif; padding-right:30px;padding-left:10px;text-align:left;}
				#info p{font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:400;margin-top:-10px; text-align:justify;line-height:22px;}
				#wel{font-family:Arial, Helvetica, sans-serif; font-size:30px; text-align:center; padding-top:10px; height:90px; color: rgba(103, 108, 127, 1);font-weight:bold;}
				#db{color:#963c64; }
				#exam{width:200px; height:200px;padding-left:5px}
				.hr2{margin-left:70px;text-align:center; width:80%;height:3px;border:none;border-top: 0px;border-top: 1px solid #820336;border-bottom: 1px dashed #820336;}
				
				#citing h3{font-family:Arial, Helvetica, sans-serif;}
				#article{width:980px; font-family:Verdana,Arial,sans-serif;font-size:16px;margin-left:80px;margin-top:20px;color:rgba(103, 108, 127, 1);}
				.btn{float:right;line-height:12px; height:24px;background-color:#963c64;text-align:center;border-radius:2.5px;border:1px solid rgba(74,30,50, 1);}
				.btn-pub{width:135px; }
				.btn-nar{width:135px; }
				.btn a:link, a:visited{text-decoration: none;border-bottom: #F5F5F5 dotted 0px;font-size: 14px;font-weight:400;color:#ffffff;}
				.btn a:hover, a:active{text-decoration: none;border-bottom: #F5F5F5 dotted 0px;font-size: 14px;font-weight:400;color:#ffffff;}
				
				#version{width:400px;float:right;}
				.versionname span, .versionname1 span{font-family:Arial, Helvetica, sans-serif;font-size:17px;color:rgba(103, 108, 127, 1);font-weight:bold;}
				.hr3{margin-left:34px;text-align:center; width:90%;height:3px;border:none;border-top: 0px;border-bottom: 1px solid #820336;}
				.feature span,.change span{font-family:Arial, Helvetica, sans-serif;font-size:16px;color:rgba(103, 108, 127, 1);font-weight:400;}
				.vs1 span{font-family:Arial, Helvetica, sans-serif;font-size:15px;color:rgba(103, 108, 127, 1);font-weight:400;}
				
				#tit, #tit1, #tit2{font-family:Arial, Helvetica, sans-serif;font-size:17px;font-weight:bold;}
				.vs{list-style:square;font-size:16px;padding-top:4px;}
				.vs1{list-style:circle;font-size:14px;padding-top:4px;}
				
				.new{ 
    	display: inline-block;
    	font-size: 5px;
    	margin: 0px;
    	background: linear-gradient(left, #f71605, #e0f513); 
        background: -webkit-linear-gradient(left, #f71605, #e0f513);
        background: -o-linear-gradient(right, #f71605, #e0f513);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		animation:scratchy 0.253s linear forwards infinite;
		/* 其它浏览器兼容性前缀 */
	    -webkit-animation:scratchy 0.253s linear forwards infinite;
	    -moz-animation: scratchy 0.253s linear forwards infinite;
	    -ms-animation: scratchy 0.253s linear forwards infinite;
	    -o-animation: scratchy 0.253s linear forwards infinite;
		
    }  
	span.new{font-size:5px;}
   @keyframes  scratchy {
		0% {
			background-position: 0 0;
		}
		25% {
			background-position: 0 0;
		}
		26% {
			background-position: 20px -20px;
		}
		50% {
			background-position: 20px -20px;
		}
		51% {
			background-position: 40px -40px;
		}
		75% {
			background-position: 40px -40px;
		}
		76% {
			background-position: 60px -60px;
		}
		99% {
			background-position: 60px -60px;
		}
		100% {
			background-position: 0 0;
		}
	}
	/* 添加兼容性前缀 */
	@-webkit-keyframes scratchy {
	    0% {
			background-position: 0 0;
		}
		25% {
			background-position: 0 0;
		}
		26% {
			background-position: 20px -20px;
		}
		50% {
			background-position: 20px -20px;
		}
		51% {
			background-position: 40px -40px;
		}
		75% {
			background-position: 40px -40px;
		}
		76% {
			background-position: 60px -60px;
		}
		99% {
			background-position: 60px -60px;
		}
		100% {
			background-position: 0 0;
		}
	}
	@-moz-keyframes scratchy {
	    0% {
			background-position: 0 0;
		}
		25% {
			background-position: 0 0;
		}
		26% {
			background-position: 20px -20px;
		}
		50% {
			background-position: 20px -20px;
		}
		51% {
			background-position: 40px -40px;
		}
		75% {
			background-position: 40px -40px;
		}
		76% {
			background-position: 60px -60px;
		}
		99% {
			background-position: 60px -60px;
		}
		100% {
			background-position: 0 0;
		}
	}
	@-ms-keyframes scratchy {
	   0% {
			background-position: 0 0;
		}
		25% {
			background-position: 0 0;
		}
		26% {
			background-position: 20px -20px;
		}
		50% {
			background-position: 20px -20px;
		}
		51% {
			background-position: 40px -40px;
		}
		75% {
			background-position: 40px -40px;
		}
		76% {
			background-position: 60px -60px;
		}
		99% {
			background-position: 60px -60px;
		}
		100% {
			background-position: 0 0;
		}
	}
	@-o-keyframes scratchy {
	   0% {
			background-position: 0 0;
		}
		25% {
			background-position: 0 0;
		}
		26% {
			background-position: 20px -20px;
		}
		50% {
			background-position: 20px -20px;
		}
		51% {
			background-position: 40px -40px;
		}
		75% {
			background-position: 40px -40px;
		}
		76% {
			background-position: 60px -60px;
		}
		99% {
			background-position: 60px -60px;
		}
		100% {
			background-position: 0 0;
		}
	}
			#stata{margin-left:0px;margin-top:0px;}
			
			
			a#examlnk:link,a#examlnk:visited{color:rgba(0, 143, 149, 1);border-bottom:#996699 dotted 0px;font-size:13px;font-weight:bold;}
			a#examlnk:hover,a#examlnk:active{color:#996699;border-bottom:#996699 dotted 1px;font-size:13px;font-weight:bold;}
			td#ver{height:400px; width:400px;}
			
			#article span{line-height:10px;font-size:14px;font-weight:normal;}
			</style>
				<div id="content" class="story">
					<div id="overview">
						<br /><br />
						<table id='welcome'>
							<tr>
								<td colspan="2" id='wel'>Welcome to <span id='db'>dbPSP</span><hr size=1 class='hr2'/></td>
								<td rowspan="2" id='ver'>
									<div id="version">
							<div id='v2'>
								<div class='versionname1'>
									<img src="images/home/old.png" width="13px" height="20px" border="0"/>&nbsp;&nbsp;&nbsp;<span>dbPSP version 2.0 - 06/25/2019<br/><hr class='hr3'/><br/></span>
								</div>
								<div class='feature'>
									<img src="images/home/fea.png" width="15px" height="12px" border="0"/>&nbsp;&nbsp;<span id='tit'>Features<br/>
										<ul>
											<li class="vs"><span>Literature curation</span></li>
											<li class="vs"><span>Public phosphorylation resources</span></li>
											<li class="vs"><span>User-friendly website interface</span></li>
											<li class="vs"><span>Additional annotation resources<span class='new'>&nbsp;&nbsp;NEW</span></span>
												<ul>
													<li class="vs1"><span><strong>Total (88)</strong></span></li>
													<li class="vs1"><span>Taxonomy annotation (7)</span></li>
													<li class="vs1"><span>Genome annotation (10)</span></li>
													<li class="vs1"><span>Function annotation (17)</span></li>
													<li class="vs1"><span>Transcriptional regulation (8)</span></li>
													<li class="vs1"><span>Sequence and structure information (5)</span></li>
													<li class="vs1"><span>Family and domain annotation (13)</span></li>
													<li class="vs1"><span>Interaction (14)</span></li>
													<li class="vs1"><span>Orthologous information (10)</span></li>
													<li class="vs1"><span>Biological pathway (4)</span></li>
												</ul>
											</li>
											<li class="vs"><span>3D structure visualization</span><span class='new'>&nbsp;&nbsp;NEW</span></li>
											<li class="vs"><span>Orthologous multi-alignment</span><span class='new'>&nbsp;&nbsp;NEW</span></li>

							</div>
							<div id='v1'>
								<div class='versionname'>
									<img src="images/home/old.png" width="13px" height="20px" border="0"/>&nbsp;&nbsp;&nbsp;<span>dbPSP version 1.0 - 04/04/2015<br/><hr class='hr3'/><br/></span>
								</div>
								<div class='feature'>
									<img src="images/home/fea.png" width="15px" height="12px" border="0"/>&nbsp;&nbsp;<span id='tit2'>Features<br/>
										<ul>
											<li class="vs"><span>Literature curation</span></li>
											<li class="vs"><span>Public phosphorylation resources</span></li>
											<li class="vs"><span>User-friendly website interface</span></li>
										</ul>
									</span>
								</div>
							</div>
						</div>
								</td>
							</tr>
							
							<tr>
								<td id='exam'>
									<div id='PTMPDB'></div>
									<h4><a id='examlnk' href='View.2.php?id=PP04832' target='_blank'><br/><em>Bacillus subtilis</em> clpP:<br/> ATP-dependent Clp protease proteolytic subunit</a></h4>
									</div>
								</td>
								<td id='info'>
									<p >&nbsp;&nbsp;&nbsp;&nbsp;As one of the most ubiquitous and important protein post-translational modifications (PTMs) with tremendous studies, phosphorylation regulates a wide variety of biological processes,  such as cell cycle and signal transduction (<a href='http://www.ncbi.nlm.nih.gov/pubmed/6280056'>Cohen, 1982</a>; <a href='http://www.ncbi.nlm.nih.gov/pubmed/16908088'>Ptacek and Snyder, 2006</a>; <a href='http://www.ncbi.nlm.nih.gov/pubmed/22889906'>Jin, et al., 2012</a>). Although eukaryotic protein phosphorylation has been extensively studied, only limited information is available for protein phosphorylation in prokaryotes. In contrast with eukaryotic phosphorylation that mainly occurs on serine (<font>S</font>), threonine (<font>T</font>), and tyrosine (<font>Y</font>), prokaryotic phosphorylation also occurs on several other types of amino acids, including arginine (<font>R</font>), histidine (<font>H</font>), cysteine (<font>C</font>) and aspartic acid (<font>D</font>) residues.</p>

									<p >&nbsp;&nbsp;&nbsp;&nbsp;<font>dbPSP 2.0</font> (<font>d</font>ata<font>b</font>ase of <font>P</font>hosphorylation <font>S</font>ites in <font>P</font>rokaryotes) is an updated resource for annotating protein phosphorylation sites (p-sites) in prokaryotes (bacteria and archaea). It contains <font>19,296</font> experimentally identified p-sites in <font>8,586</font> proteins from <font>200</font> prokaryotic organisms. In particular, detailed annotations for all the proteins were integrated from additional <font>88</font> public resources that cover <font>9</font> aspects as follows: (i) <font class='asp'>Taxonomy annotation</font>; (ii) <font class='asp'>Genome annotation</font>; (iii) <font class='asp'>Function annotation</font>; (iv) <font class='asp'>Transcriptional regulation</font>; (v) <font class='asp'>Sequence and structure information</font>; (vi) <font class='asp'>Family and domain annotation</font>; (vii) <font class='asp'>Interaction</font>; (viii)  <font class='asp'>Orthologous information</font> and (ix) <font class='asp'>Biological pathway</font>. We anticipate dbPSP can serve as a useful resource to study the mechanisms of phosphorylation in prokaryotes. dbPSP will be continuously maintained and updated, all data sets and annotations are freely accessed for all users.<br/><br/></p>
								</td>
							</tr>
							
						</table>
				</div>
				  
				
					
					
				<div id="substrate">
					<h3 class="section"><img src="images/home/search.png" width="25px" height="25px" border="0"/>&nbsp;&nbsp;Substrate Search <a href="Userguide.php#subsrch" target="_blank"><img src="images/help.png" width="17" height="17" border="0"/></a></h3>
					<form action="Result.php?type=simple&page=1" method="post" name="Simple_Search_Form" id="Simple_Search_Form">
						<div style="margin-left:250px;background-color:rgba(255, 255, 255, 0.6); margin-right:auto; width:680px; border:2px dashed rgba(67,132,150,0.7); height:90px;">
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;
								<select class="opts" name="Tag" style="width:25%; border-color: rgb(0,143,149);">
									<option value="Any">Any Field</option>
									<option value="id">dbPSP ID</option>
									<option value="UniProtAccession">UniProt Accession</option>
									<option value="ProteinName">Protein Name</option>
									<option value="ProteinAltNames">Protein Alias</option>
									<option value="GeneName">Gene Name</option>
									<option value="GeneAltNames">Gene Alias</option>
									<option value="Species">Organism</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<input name="Simple_Search_Input" type="text" id="Simple_Search_Input" value="" style="width:60%; border:1px solid rgb(0,143,149);" />
								<p>&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="button" value="Example" name="Example" id='Example1' onClick="document.Simple_Search_Form.Tag.value='UniProtAccession';document.Simple_Search_Form.Simple_Search_Input.value='P80244'"/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="reset" value="Clear Form" name="Clear"  id='clear' />
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="submit" name="Submit2" value="Submit"  id='sub' onClick="return check_submit();"/>
								</p>
						</div>	
					</form>
					<script type="text/javascript">
						function check_submit(){
							if(window.document.Simple_Search_Form.Simple_Search_Input.value == ""){
								alert("Please input keyword(s) for search, thanks!");
								return false;
							}else{
								return true;
							}
						}
						
						
					</script>
				</div>

					<br class="clearfloat" />
					
					<div id="statistics">
					<h3 class="section"><img src="images/home/stat.png" width="25px" height="25px" border="0"/>&nbsp;&nbsp;Statistics</h3>
					<table id='stata'>
						<tr>
							<td><img src="images/Stat/statall.3.png" width="1100"  border="0"/></td>
						</tr>
					</table>
				</div>
					
				<div id="citing">
					<h3 class="section"><img src="images/home/tag.png" width="25px" height="25px" border="0"/>&nbsp;&nbsp;Citing dbPSP</h3>
					<div id='article'>
						<span>Shi <em>et al</em>. <font style='font-weight:550;'>dbPSP 2.0: an updated database of protein phosphorylation sites in prokaryotes.</font><br/><br/>Submitted., 2019. </span><br/><br/>
						<span>Pan <em>et al</em>. <font style='font-weight:550;'>dbPSP: a curated database for protein phosphorylation sites in prokaryotes.</font><br/><br/><em>Database (Oxford)</em>, 2015:bav031. </span>
						
						<div class='btn btn-nar'><a class='btn-ct' href='https://academic.oup.com/database/article/doi/10.1093/database/bav031/2433163' target='_blank'>Go to Database</a>&nbsp;<sup><img src="images/home/go.png" width="11px" height="11px" border="0"/></sup></div>
						<div class='btn btn-pub'><a class='btn-ct' href='https://www.ncbi.nlm.nih.gov/pubmed/25841437' target='_blank'>Go to PubMed</a>&nbsp;<sup><img src="images/home/go.png" width="11px" height="11px" border="0"/></sup></div>
					</div>
				</div>
				
			</div>
			<script>
				$("#PTMPDB").html("Example: <br/><br/><a href='View.2.php?id=PP04832' target='_blank'><img src='images/PTMPDB.5.gif' width='200px'  title='clpP'/></a>");
				$(".btn").mouseover(function(){
							$(this).css("background-color","rgba(116,46,78,1)");
						});
						$(".btn").mouseout(function(){
							$(this).css("background-color","#963c64");
						});
						
						
						$(".AnnoDetail").mouseover(function(){
							$("#feahiden").css("display","block");
						});
						$(".AnnoDetail").click(function(){
							$("#feahiden").css("display","none");
						});
						$(".AnnoDetail1").mouseover(function(){
							$("#chahiden").css("display","block");
						});
						$(".AnnoDetail1").click(function(){
							$("#chahiden").css("display","none");
						});
						
						$("#feahiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$("#feahiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						$("#chahiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$("#chahiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						
			</script>
		</div>
		<br class="clearfloat" />
		<script src="js/3Dmol.js"></script>
		<script type="text/javascript" src="js/ui/jquery.js"></script>
		<script type="text/javascript" src="js/ui/jquery-ui.min.js"></script>
		<?php require("common/foot.php"); ?>