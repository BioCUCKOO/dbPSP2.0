<?php require("common/head.php"); ?>
<style>
.exam{
	background-color: #438496;border: 0px;font-family: Verdana,Arial,sans-serif;color: #fff;height:21px;
}
.clear{
	background-color: #438496;border: 0px;font-family: Verdana,Arial,sans-serif;color: #fff;height:21px;
}
.sub{
	background-color: #438496;border: 0px;font-family: Verdana,Arial,sans-serif;color: #fff;height:21px;
}
select,input,textarea{
    border-radius: 0px;
    border-color: rgb(0,143,149);
	border-width: 1px;
    border-style: solid;
}
.add{
    background-color:  #438496;
	color:#fff;
}
#hr1{
	text-align: center;
	width: 95%;
	height: 3px;
	border: none;
	border-top: 1px solid #820336;
	border-bottom: 1px dashed #820336;
}
.story p{font-weight:bold;font-size:18px;}
</style>
<script>
	var num = 1;
	function addDiv()
	{
		var thenew= document.createElement('div');
		thenew.id = "div" + num;
		//thenew.style.width = "640px";
		thenew.style.border="0px solid black";
		thenew.style.paddingTop = "10px";
		thenew.style.paddingBottom = "10px";
		//
		var newSelectOption = document.createElement("select");
		newSelectOption.id = "tagOption" + num;
		newSelectOption.name = "tagOption" + num;
		newSelectOption.style.marginRight= "15px";
		newSelectOption.options.add(new Option("AND ","and")); 
		newSelectOption.options.add(new Option("OR ","or"));
		newSelectOption.options.add(new Option("NOT ","and not")); 
		thenew.appendChild(newSelectOption);
		//
		var newSelect = document.createElement("select");
		newSelect.id = "tag" + num;
		newSelect.name = "tag" + num;
		newSelect.style.marginRight="14px";
		newSelect.options.add(new Option("Any Field","Any"));
		newSelect.options.add(new Option("dbPSP ID","id"));
		newSelect.options.add(new Option("UniProt Accession","UniProtAccession"));
		newSelect.options.add(new Option("Protein Name","ProteinName"));
		newSelect.options.add(new Option("Protein Alias","ProteinAltNames"));
		newSelect.options.add(new Option("Gene Name","GeneName"));
		newSelect.options.add(new Option("Gene Alias","GeneAltNames"));
		newSelect.options.add(new Option("Organism","Species"));
		thenew.appendChild(newSelect);
		//
		var newInput = document.createElement("input");
		newInput.id = "input" + num;
		newInput.name = "input" + num;
		newInput.type = "text";
		newInput.style.width = "300px";
		newInput.style.marginRight= "10px";
		thenew.appendChild(newInput);
		//
		var newAdd = document.createElement("input");
		newAdd.id = "add" + num;
		newAdd.class = "add";
		newAdd.name = "add" + num;
		newAdd.type = "button";
		newAdd.style.marginRight= "10px";
		newAdd.value = " + ";
		if(newAdd.attachEvent){
			newAdd.attachEvent( "onclick", addDiv);
		}else{
			newAdd.addEventListener( 'click',addDiv);
		}
		thenew.appendChild(newAdd);
		//
		var newDel = document.createElement("input");
		newDel.id = "del" + num;
		newDel.name = "del" + num;
		newDel.class = "del";
		newDel.type = "button";
		newDel.value = " - ";
		if(newDel.attachEvent){
			newDel.attachEvent( "onclick", delDiv);
		}else{
			newDel.addEventListener( 'click',delDiv);
		}
		thenew.appendChild(newDel);
		
		//
		document.getElementById('bbbb').appendChild(thenew);
		num = num + 1;
		document.getElementById('num').value=num;
	}
	function delDiv()
	{
		//document.getElementById('bbbb').removeChild(document.getElementById('bbbb').childNodes[1]);
		var node = document.getElementById('div' + (num-1));
		document.getElementById('bbbb').removeChild(node);
		num  = num -1;
	}
	function resetNum(){
		document.getElementById('num').value  = 1;
		return true;
	}
</script>

<body>
	<div id="container">
		<div id="header">
			<?php require("common/header.php"); ?>
		</div>
		<style>
			p font{color:#963C64; font-weight:bold;}
		</style>
		<div id="Main">
			<?php require("../side-sy.php"); ?>
			<?php require("common/IPcount.php"); ?>
			<div id="content" class="story">
				<div id="search">
					<br />
					<h3 class="section section1">&#8251; Search Service</h3>
					<hr id='hr1'  align='center' width='95%' size='1'/>

					<div id="substrate">
						<h3 class="section"><img class="annoimg" src="images/right1.png" width="15px" height="15px" > Substrate Search <a href="Userguide.php#subsrch" target="_blank"><img src="images/help.png" width="17" height="17" border="0"/></a></h3>
						<p><span class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;</span>Please search the <font>dbPSP</font> database with one or multiple keywords to find the related information:&nbsp;<span class="STYLE2">&nbsp;</span></p>
						<form action="Result.php?type=simple&page=1" method="post" name="Simple_Search_Form" id="Simple_Search_Form">
							<div style="margin-left:auto; margin-right:auto; width:680px; border:2px dashed rgba(67,132,150,0.7); height:90px;background-color:rgba(255, 255, 255, 0.6);">
								<br/>&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="Tag" style="width:25%">
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
										<input type="button" value="Example" name="Example" class="exam" onClick="document.Simple_Search_Form.Tag.value='UniProtAccession';document.Simple_Search_Form.Simple_Search_Input.value='P80244'"/>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="reset" value="Clear Form" class="clear" name="Clear" />
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="submit" name="Submit1" value="Submit" class="sub"onClick="return check_submit();"/>
									</p>
							</div>
						</form>
					</div>
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
					<div id="peptide">
						<h3 class="section"><img class="annoimg" src="images/right1.png" width="15px" height="15px" >  Peptide Search <a href="Userguide.php#pepsrch" target="_blank"><img src="images/help.png" width="17" height="17" border="0"/></a></h3>
						<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please input a <font>Phospho-peptide (
						with a character '<em>p</em>' in front of <em>p</em>-site)</font> sequence:</font></p>
						<form action="Result.php?type=Peptide" method="post" name="Peptide_Form" id="Peptide_Form">
							<div style="margin-left:auto; margin-right:auto; width:680px; border:2px dashed rgba(67,132,150,0.7);background-color:rgba(255, 255, 255, 0.6);">
								<div style="margin-top:15px;margin-bottom:10px;margin-left:20px;">
									
									<strong><font color="#676C7F">Phospho-peptide:&nbsp;</font></strong>
									<input name="Peptide_Input" type="text" id="Peptide_Search_Input" value="" style="width:50%" />
								</div>
								<div style="margin-top:10px;margin-bottom:15px;margin-left:50px;">
									<input name="button" type="button" class="exam" onClick="window.document.Peptide_Form.Peptide_Input.value='TGQPLEVIERDTDpRDNFK';" value="Example"/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input name="Clear" type="reset" id="Clear" class="clear" value="Clear Form"/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="submit" name="Submit3" value="Submit" class="sub" onClick="return check_peptide_submit();"/>
								</div>
							</div>
						</form>
					</div>
					<script type="text/javascript">
						function check_peptide_submit(){
							if(window.document.Peptide_Form.Peptide_Input.value == ""){
								alert("Please input a phospho-peptide for search, thanks!");
								return false;
							}else if(window.document.Peptide_Form.Peptide_Input.value.search(/p/)==-1){
								alert("The p-site marked by a followed character 'p', thanks!");
								return false;
							}else{
								return true;
							}
						}
					</script>
					<div id="advanced">
						<h3 class="section"><img class="annoimg" src="images/right1.png" width="15px" height="15px" >  Advanced Search <a href="Userguide.php#advsrch" target="_blank"><img src="images/help.png" width="17" height="17" border="0"/></a></h3>
						<form action="Result.php?type=advance" method="post" name="Advance_Search_Form" id="Advance_Search_Form">
							<div style="margin-left:auto; margin-right:auto; width:680px; border:2px dashed rgba(67,132,150,0.7);background-color:rgba(255, 255, 255, 0.6);">
								<div class="panel1" style="margin-left:auto; margin-right:auto; width:640px">
									<br />
									<div id="lizi0" style="width:640px;text-align:center;">
										<div style="border:0px solid black;text-align:left;">	
											<select name="forPosition" id="forPosition" style="visibility:hidden;margin-right:10px">
												<option value="and">AND </option>
												<option value="or">OR </option>
												<option value="and not">NOT </option>
											</select>
											<select name="tag" id="tag" style="margin-right:10px">
												<option value="Any">Any Field</option>
												<option value="id">dbPSP ID</option>
												<option value="UniProtAccession">UniProt Accession</option>
												<option value="ProteinName">Protein Name</option>
												<option value="ProteinAltNames">Protein Alias</option>
												<option value="GeneName">Gene Name</option>
												<option value="GeneAltNames">Gene Alias</option>
												<option value="Species">Organism</option>
											</select>
											<input name="input" type="text" id="input" value="" style="width:300px" />
										</div>
									</div>
									<div id="lizi" style="padding-top:20px;padding-bottom:10px;width:640px;border:0px solid black;">
										<div style="border:0px solid black;">
											<select name="tagOption0" id="tagOption0" style="margin-right:10px">
												<option value="and">AND</option>
												<option value="or">OR </option>
												<option value="and not">NOT </option>
											</select>
											<select name="tag0" id="tag0" style="margin-right:10px">
												<option value="Any">Any Field</option>
												<option value="id">dbPSP ID</option>
												<option value="UniProtAccession">UniProt Accession</option>
												<option value="ProteinName">Protein Name</option>
												<option value="ProteinAltNames">Protein Alias</option>
												<option value="GeneName">Gene Name</option>
												<option value="GeneAltNames">Gene Alias</option>
												<option value="Species">Organism</option>
											</select>
											<input name="input0" type="text" id="input0" value="" style="width:300px;margin-right:10px" /><input name="add0" class="add" type="button" id="add0" onclick='addDiv()' value=" + " />
										</div>
									</div>
									<div id="bbbb" style="background-color:white;width:640px;border:0px solid red;"> </div>
									<div align="left" style="margin-bottom:20px;margin-top:10px">
										<input name="num" type="text" id="num" value="1" style="width:20px;display:none"/>
										<input name="button2" type="button" class="exam" onClick="window.document.Advance_Search_Form.tag.value='Species';window.document.Advance_Search_Form.input.value='Bacillus subtilis (strain 168)';window.document.Advance_Search_Form.tag0.value='ProteinName';window.document.Advance_Search_Form.input0.value='ATP-dependent Clp protease proteolytic subunit';" value="Example" />
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input name="Clear2" type="reset" id="Clear2" class="clear"  value="Clear Form" />
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="submit" name="Submit2" value="Submit" class="sub" onClick="return check_advanced_submit();"/>
									</div>
								</div>
							</div>
						</form>
					</div>
					<script type="text/javascript">
						function check_advanced_submit(){
							if(window.document.Advance_Search_Form.input.value == "" || window.document.Advance_Search_Form.input0.value == "")
							{
								alert("Please input keyword(s) for search, thanks!");
								return false;
							}else{
								return true;//window.document.Simple_Search_Form.submit();
							}
						}
					</script>
					<div id="batch">
						<h3 class="section"><img class="annoimg" src="images/right1.png" width="15px" height="15px" >  Batch Search <a href="Userguide.php#bacsrch" target="_blank"><img src="images/help.png" width="17" height="17" border="0"/></a></h3>
						<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please input <font>Multiple</font> keywords <font>line-by-line</font> to retrieve a list of hits:</font></p>
						<form action="Result.php?type=batch" method="post" name="Batch_Search_Form" id="Batch_Search_Form">
							<div style="margin-left:auto; margin-right:auto; width:680px; border:2px dashed rgba(67,132,150,0.7);background-color:rgba(255, 255, 255, 0.6);">
								<div style="margin-top:10px;margin-left:50px">
									<select name="Tag" style="width:150px">
										<option value="Any">Any Field</option>
										<option value="id">dbPSP ID</option>
										<option value="UniProtAccession">UniProt Accession</option>
										<option value="ProteinName">Protein Name</option>
										<option value="ProteinAltNames">Protein Alias</option>
										<option value="GeneName">Gene Name</option>
										<option value="GeneAltNames">Gene Alias</option>
										<option value="organism">Organism</option>
									</select>
								</div>
								<div>
									<textarea name="Batch_Search_Input" id="Batch_Search_Input" style="height:60px;width:500px;margin-top:10px;margin-left:50px;overflow-y:visible "></textarea>
								</div>
								<div style="margin-top:10px;margin-bottom:10px;margin-left:50px;">
									<input type="button" value="Example" name="Example" class="exam" onClick="document.Batch_Search_Form.Tag.value='UniProtAccession';document.Batch_Search_Form.Batch_Search_Input.value='P80244\nP13714\nP08874'"/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="reset" value="Clear Form" class="clear" name="Clear" />
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="submit" name="Submit2" value="Submit" class="sub" onClick="return check_batch_submit();"/>
								</div>
							</div>
						</form>
					</div>
					<script type="text/javascript">
						function check_batch_submit(){
							if(window.document.Batch_Search_Form.Batch_Search_Input.value == ""){
								alert("Please input keyword(s) for search, thanks!");
								return false;
							}else{
								return true;//window.document.Simple_Search_Form.submit();
							}
						}
					</script>
					<div id="blast">
						<h3 class="section"><img class="annoimg" src="images/right1.png" width="15px" height="15px" >  BLAST Search <a href="Userguide.php#blssrch" target="_blank"><img src="images/help.png" width="17" height="17" border="0"/></a></h3>
						<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please input a <font>Protein</font> sequence in <font>FASTA</font> format:</p>
						<form action="Result.php?type=blast" method="post" name="Blast_Form" id="Blast_Form">
							<div style="margin-left:auto; margin-right:auto; width:680px; border:2px dashed rgba(67,132,150,0.7);background-color:rgba(255, 255, 255, 0.6);">
								<div>
									<textarea name="Blast_Input" id="Blast_Input"  style="height:110px;width:500px;margin-top:10px;margin-left:50px;overflow-y:visible "></textarea>
								</div>
								<div style="margin-top:10px;margin-bottom:10px;margin-left:50px;">
									<strong> <font color="#676C7F">&nbsp;&nbsp;&nbsp;&nbsp; E-value:&nbsp;</font></strong>
									<select name="E_value" id="E_value">
										<option value="0.00001">0.00001</option>
										<option value="0.0001">0.0001</option>
										<option value="0.001">0.001</option>
										<option value="0.01" selected>0.01</option>
										<option value="0.1">0.1</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="10">10</option>
										<option value="100">100</option>
										<option value="1000">1000</option>
									</select><font color="#676C7F">
									&nbsp;&nbsp;&nbsp;&nbsp;(This search will take a long time, please wait patiently.)</font>
								</div>
								<div style="margin-top:10px;margin-bottom:10px;margin-left:50px;">
									<input name="button" type="button" class="exam" onClick="window.document.Blast_Form.Blast_Input.value='>P80244|clpP|Bacillus subtilis (strain 168)\nMNLIPTVIEQTNRGERAYDIYSRLLKDRIIMLGSAIDDNVANSIVSQLLFLAAEDPEKEISLYINSPGGSITAGMAIYDTMQFIKPKVSTICIGMAASMGAFLLAAGEKGKRYALPNSEVMIHQPLGGAQGQATEIEIAAKRILLLRDKLNKVLAERTGQPLEVIERDTDRDNFKSAEEALEYGLIDKILTHTEDKK';" value="Example"/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input name="Blast_Clear" type="reset" id="Blast_Clear" class="clear" value="Clear Form"/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="submit" name="Submit3" value="Submit" class="sub" onClick="return check_blast_submit();"/>
								</div>
							</div>
						</form>
					</div>
					<script type="text/javascript">
						function check_blast_submit(){
							if(window.document.Blast_Form.Blast_Input.value == "")
							{
								alert("Please input a FASTA sequence for blast search, thanks!");
								return false;
							}else{
								return true;
							}
						}
					</script>
					
					<br/><br/>
				</div>
			</div>
		</div>
		<br class="clearfloat" />
		<?php require("common/foot.php"); ?>