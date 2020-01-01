
		
		
		
<?php require("common/head.php"); ?>
<style>
 a:link,a:visited{color:rgba(0, 143, 149, 1);border-bottom:#996699 dotted 0px;}
 a:hover,a:active{color:#996699;border-bottom:#996699 dotted 1px;}
#hr1{
	text-align: center;
	width: 95%;
	height: 3px;
	border: none;
	border-top: 1px solid #820336;
	border-bottom: 1px dashed #820336;
}
p font{color:#963C64; font-weight:bold; }
p.para{font-family:Arial,sans-serif,"Open Sans";font-size:40px;line-height:22px;}
p#browse, p#search{font-family:Arial,"Open Sans",sans-serif;font-size:22px;}
p.see{font-family:Arial,sans-serif,"Open Sans";font-size:18px;margin-left:20px;color:#963c64;font-weight:bold;}

#utab{width:1050px;border:2px dashed rgba(202, 135, 153, 0.4);border-radius: 7px;margin-left:30px;background-color: rgba(255, 255, 255, 0.6)}
#third{border-top:2px dashed rgba(202, 135, 153, 0.4);padding-left:20px;padding-right:10px;}
#first{padding-bottom:50px;padding-left:20px;padding-right:10px;}
.bac{background-color: rgba(255, 255, 255, 0.6);border-top:2px solid rgba(0, 143, 149, 1);}
.bac1{background-color: rgba(255, 255, 255, 0.6);border-top:2px solid rgba(0, 143, 149,0.5);}



.stattab{font-size:18px;line-height:30px;width:900px;margin-top:40px;margin-left:50px;border-top:2px solid rgba(0, 143, 149, 1);border-bottom:2px solid rgba(0, 143, 149, 1);}
.stattab1{margin-left:45px;}
.stattab th{font-size:21px;line-height:20px;font-family:Arial,"Open Sans",sans-serif;padding-left:15px;color:#333333;text-align:left;}
.stattab td{padding-left:15px;color:#333333}

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
					<h3 class="section1">&#8251; dbPSP Statistics </h3>
					<hr id='hr1'  align='center' width='95%' size='1'/>
					<font size="4"><br>
					
							
						<table id="utab">
							<tr>
								<td id="first">
									<p id="browse"><strong>Phosphorylation Events</strong></p>
									<table class='stattab stattab1' style='border-collapse:collapse;' cellpadding='4'>
										<tr><th>Domain</th><th>Phylum</th><th>Proteins</th><th>p-sites</th><th>pS</th><th>pT</th><th>pY</th><th>pR</th><th>pD</th><th>pH</th><th>pC</th></tr>
										<tr><td class="bac" rowspan="10"><font style='font-family:Arial,"Open Sans",sans-serif;'>Bacteria</font></td><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Proteobacteria</font></td><td>2,609</td><td>5,393</td><td>1,888</td><td>1,079</td><td>1,812</td><td>0</td><td>353</td><td>255</td><td>6</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Actinobacteria</font></td><td>1,866</td><td>4,463</td><td>1,868</td><td>2,362</td><td>212</td><td>0</td><td>7</td><td>14</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Firmicutes</font></td><td>1,534</td><td>3,286</td><td>1,368</td><td>846</td><td>260</td><td>727</td><td>21</td><td>56</td><td>8</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Cyanobacteria</font></td><td>742</td><td>1,865</td><td>984</td><td>710</td><td>143</td><td>0</td><td>9</td><td>19</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Deinococcus-Thermus</font></td><td>119</td><td>263</td><td>110</td><td>84</td><td>33</td><td>0</td><td>15</td><td>21</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Tenericutes</font></td><td>78</td><td>133</td><td>71</td><td>55</td><td>6</td><td>0</td><td>0</td><td>1</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Spirochaetes</font></td><td>34</td><td>62</td><td>37</td><td>10</td><td>10</td><td>0</td><td>4</td><td>1</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Bacteroidetes</font></td><td>1</td><td>16</td><td>14</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Thermotogae</font></td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Chlamydiae</font></td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
										
										<tr><td class="bac1" rowspan="2"><font style='font-family:Arial,"Open Sans",sans-serif;'>Archaea</font></td><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Crenarchaeota</font></td><td>1,338</td><td>2,914</td><td>926</td><td>729</td><td>1,258</td><td>0</td><td>0</td><td>1</td><td>0</td></tr>
										<tr><td><font style='font-style:italic;font-family:Arial,"Open Sans",sans-serif;'>Euryarchaeota</font></td><td>263</td><td>899</td><td>388</td><td>210</td><td>101</td><td>0</td><td>133</td><td>67</td><td>0</td></tr>
										
									</table>
								</td>
							</tr>
							

							
							
							<tr>
								<td id="third">
									<p id="browse"><strong>Integrated Resources</strong></p>
									<table class='stattab' style='border-collapse:collapse;' cellpadding='4' >
										<tr><th>Category</th><th>Number</th></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Total</font></td><td>93</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Public databases containing prokaryotic phosphorylation sites</font></td><td>5</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Taxonomy annotation</font></td><td>7</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Genome annotation</font></td><td>10</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Function annotation</font></td><td>17</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Transcriptional regulation</font></td><td>8</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Sequence and structure information</font></td><td>5</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Family and domain annotation</font></td><td>13</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Interaction</font></td><td>14</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Orthologous information</font></td><td>10</td></tr>
										<tr><td><font style='font-family:Arial,"Open Sans",sans-serif;'>Biological pathway</font></td><td>4</td></tr>
									</table>
									<p class="see">See <a href='Links.php' target='_blank'>Links</a> page for Integration details. </p>
								</td>
							</tr>
						</table>		
						
					</font>
					
					<script type="text/javascript">
					//$(".stattab tr:first").css({'border-bottom':'2px dashed rgba(0, 143, 149, 0.4)'});
					$(".stattab th").css({'border-bottom':'2px solid rgba(0, 143, 149, 1)'});
					$(".stattab tr:nth-child(even)").css({'background-color':'rgba(0, 143, 149, 0.2)'});
					//$(".stattab tr:last").css({'background-color':'white'});
				</script>
				
				</div>
			</div>
		</div>
		<br class="clearfloat" />
		<?php require("common/foot.php"); ?>