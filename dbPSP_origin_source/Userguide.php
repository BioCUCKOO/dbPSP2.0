
		
		
		
<?php require("common/head.php"); ?>
<style>
#hr1{
	text-align: center;
	width: 95%;
	height: 3px;
	border: none;
	border-top: 1px solid #820336;
	border-bottom: 1px dashed #820336;
}
p font{color:#963C64; font-weight:bold; }
p.para{font-family:Arial,sans-serif,"Open Sans";font-size:18px;line-height:22px;}
p#browse, p#search{font-family:Arial,"Open Sans",sans-serif;font-size:22px;}
.srch{list-style:square;font-size:18px;padding-top:4px;padding-bottom:14px;color:rgba(103, 108, 127, 1);line-height:20px;font-family:Arial,sans-serif,"Open Sans";}
.exam{width:950px;margin-top:10px;margin-bottom:10px;padding-top:4px;padding-bottom:4px;padding-left:8px;background-color: rgba(0, 143, 149, 0.2);border-radius: 4px;font-size:16px;font-weight:bold;}

#utab{width:1050px;border:2px dashed rgba(202, 135, 153, 0.4);border-radius: 7px;margin-left:30px;background-color: rgba(255, 255, 255, 0.6)}
#second{border-top:2px dashed rgba(202, 135, 153, 0.4);padding-left:20px;padding-right:10px;}
#first{padding-bottom:50px;padding-left:20px;padding-right:10px;}

#acc{font-family:Arial,"Open Sans",sans-serif;line-height:20px;color:#0c7f16;}
#rej{font-family:Arial,"Open Sans",sans-serif;line-height:20px;color:#8B0000;}
.fmt{padding-top:10px;}
#reject p{margin-top:-115px;font-size:16px;line-height:20px;}
#reject{padding-left:75px;border-left:rgba(103, 108, 127, 1) dotted 2px;}
#accept{padding-left:70px;padding-right:75px;}
.fmt2{margin-top:-9px;}
</style>
<body>
	<div id="container">
		<div id="header">
			<?php require("common/header.php"); ?>
		</div>
		<div id="Main">
			<?php require("../side-sy.php"); ?>
			<?php require("common/IPcount.php"); ?>
			<div id="content" class="story">
				<div id="usage">
				<br/>
					<h3 class="section1">&#8251; Visualize dbPSP Data </h3>
					<hr id='hr1'  align='center' width='95%' size='1'/>
					<font size="4"><br>
					
							<p class="para">The dbPSP user interface allows easy access to dbPSP data in a graphical way. The data can be either <strong>browsed</strong> or <strong>searched</strong>. </p>
						<table id="utab">
							<tr>
								<td id="first">
									<p id="browse"><strong>The <a  href="Browse.php" target="_blank">Browse</a> page</strong></p>
									<p class="para"><strong>Browse by phyla</strong>: You can select one of these phyla to unfold all organisms in this phylum and browse all proteins with <em>p</em>-sites of corresponding organism.</p><br/>
									<img src='images/user/pic1.png' width='1000px' />
									<br/><br/><br/>
									<p class="para"><strong>Browse by residue types</strong>: You can select one of 7 residue types to browse all proteins with specific phosphorylation residue type.</p><br/>
									<div text-align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/user/pic2.png' width='800px'  /></div>
								</td>
							</tr>
							<tr>
								<td id="second">
									<p id="search"><strong>The <a href="Search.php" target="_blank">Search</a> page</strong></p>
									<p class="para">Five search options are provided, including Substrate Search, Peptide Search, Advanced Search, Batch Search and BLAST search:</p>
									<ul>
										<li class="srch" id='subsrch'><strong>Substrate Search:</strong> Input one or multiple keywords (separated by space character) to search the dbPSP database. The search fields including dbPSP ID, UniProt Accession, Protein Name, Protein Alias, Gene Name, Gene Alias and Species. <br/><div class='exam'>Example: Click on the "Example" button to search "P13714" in UniProt Accession field. By clicking on the "Submit" button, the related proteins will be shown. </div></li>
										<li class="srch" id='pepsrch'><strong>Peptide Search:</strong> Input one phosphorylation peptide (with a character 'p' in front of p-site) to search the dbPSP database.<br/><div class='exam'>Example: Click on the "Example" button to search "LVEKNDApYKQEELDQ" in Any species. By clicking on the "Submit" button, the related phosphorylation peptide will be shown. </div></li>
										<li class="srch" id='advsrch'><strong>Advanced Search:</strong> Input two or more terms to find the information more specifically. The querying fields can be empty if less terms are needed. The three terms could be connected by the following operators:<br/>
										<em><strong>AND</strong></em> : the term following this operator has to be included in the specified field(s).<br/>
										<em><strong>OR</strong></em> : either the preceding or the following term to this operator should occur in the specified field(s).<br/>
										<em><strong>NOT</strong></em> : If selected, the term following this operator must be not contained in the specified field(s).<br/><div class='exam'>Example: Click on the "Example" button to load an instance, which could search phosphoprotein "L-lactate dehydrogenase" in <em>Bacillus subtilis</em> (<em>strain 168</em>). </div></li>
										<li class="srch" id='bacsrch'><strong>Batch Search:</strong> Input keyword list, for example, a list of UniProt IDs to search the database. The list should be inputed as one keyword one line.<br/><div class='exam'>Example: Click on the "Example" button to load three proteins UniProt accessions including P13714, P10727 and P07515. By clicking on the "Submit" button, you can find corresponding items.</div></li>
										<li class="srch" id='blssrch'><strong>BLAST Search:</strong> Find the specific protein and/or related homologues by sequence alignment. This search-option will help you to find the querying protein accurately and fast. Only one protein sequence in FASTA format is allowed per time. The E-value threshold could be user-defined. The default parameters of E-value is 0.01.<br/><div class='exam'><table><tr>
										<td id="accept"><span id="acc">Accepted Format</span><br/><div class="fmt">>P09152<br/>MSKFLDRFRYFKQKGETFADGHGQLLNT...<br/><br/><br/>>PP02996<br/>MSKFLDRFRYFKQKGETFADGHGQLLNT...<br/><br/><br/>>some custom header<br/>MSKFLDRFRYFKQKGETFADGHGQLLNT...</div></td>
										<td id="reject"><p><span id="rej">Rejected Formats</span><div class="fmt2">(no header, sequence only)<br/>MSKFLDRFRYFKQKGETFADGHGQLLNT...<br/><br/><br/>><br/>MSKFLDRFRYFKQKGETFADGHGQLLNT...</div></p></td></tr></table></div></li>
										
									</ul>
								</td>
							
							
							
							

							
							</tr>
						</table>		
							
							
							
							
						
					</font>
				</div>
			</div>
		</div>
		<br class="clearfloat" />
		<?php require("common/foot.php"); ?>