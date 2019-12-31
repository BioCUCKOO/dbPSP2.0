<html>  
  <?php require("common/head.php"); ?>
<head>  
     
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />  
    <link rel="StyleSheet" href="dtree.css" type="text/css" />  
	<script type="text/javascript" src="js/dtree.js"></script>
</head> 
 
<style>
img{vertical-align:middle;}
#tit a:link, #tit a:visited {font-family:Arial,sans-serif,"Open Sans"; text-decoration: none;border-bottom:#F5F5F5 dotted 0px;font-size:22px;color:rgba(103,108,127,1);border:0px;background-color:rgba(255,255,255,0);}
#tit a:hover,#tit a:active{font-family:Arial,sans-serif,"Open Sans"; text-decoration: none;color:#963C64;border-bottom:#963C64 solid 1px;font-size:22px;}
p font{color:#963C64; font-weight:bold;}
#dtree1,#dtree2,#dtree3,#dtree4,#dtree5,#dtree6,#dtree7,#dtree8,#dtree9,#dtree10,#dtree11,#dtree12{width:95%;;background-color:#efefef; font-family: Arial,sans-serif,"Open Sans";font-weight:bold;font-size:18px;color:black;margin-left:0px;padding-top:3px;padding-bottom:20px;padding-left:0px;font-style:italic;margin-top:10px;margin-bottom:10px;margin-left:40px;width:1050px;border:2px dashed #bebebe;border-radius: 7px;}

a:link.node,a:visited.node {color:rgba(103, 108, 127, 1);
        font-size: 17px;
    font-style: italic;
    border: 0px solid #333;
    border-radius: 0px;
    background-color: rgba(255,255,255,0);}
a:hover.node,a:active.node {color:black;border: 0px solid #333;border-radius: 0px;background-color: rgba(255,255,255,0);}

a#top:link,  a#top:visited{color:rgba(0,143,149,1);border-bottom:#996699 dotted 0px;font-size:16px;border:0px;}
a#top:hover,  a#top:active{border-bottom:#996699 dotted 1px;font-size:16px;background-color:rgba(255,255,255,0);}

#Cys{padding-left:10px;}
#Arg{padding-left:2px;}
#hr1{
	text-align: center;
	width: 95%;
	height: 3px;
	border: none;
	border-top: 1px solid #820336;
	border-bottom: 1px dashed #820336;
}
#hr2 {
    text-align: center;
    width: 95%;
    height: 3px;
    border: none;
    border-top: 0px;
    border-bottom: 1px dashed #820336;
    margin-bottom: 45px;
}

#dtree1 p a:link,a:visited,#dtree3 p a:link,a:visited,#dtree4 p a:link,a:visited,#dtree5 p a:link,a:visited,#dtree6 p a:link,a:visited,#dtree7 p a:link,a:visited,#dtree8 p a:link,a:visited,#dtree9 p a:link,a:visited,#dtree10 p a:link,a:visited,#dtree11 p a:link,a:visited,#dtree12 p a:link,a:visited,#dtree2 p a:link,a:visited{color:black; font-size:17px;font-style:normal;border:2px solid #333;border-radius: 1px;background-color:white;}
#dtree1 p a:hover,a:active,#dtree2 p a:hover,a:active,#dtree3 p a:hover,a:active,#dtree4 p a:hover,a:active,#dtree5 p a:hover,a:active,#dtree6 p a:hover,a:active,#dtree7 p a:hover,a:active,#dtree8 p a:hover,a:active,#dtree9 p a:hover,a:active,#dtree10 p a:hover,a:active,#dtree11 p a:hover,a:active,#dtree12 p a:hover,a:active{color:black;border-bottom:#996699 dotted 1px;font-style:normal;border:2px solid #333;border-radius: 1px;background-color:#e0e0e0;}


hr{text-align: center;
		width: 95%;
		height: 3px;
		border: none;
		border-top: 0px;
		border-bottom: 1px dashed #820336;
		margin-bottom:20px;
		margin-top:20px;
}

#phyla{margin-top:30px;margin-bottom:60px;margin-left:70px;height:530px;border:2px dashed rgba(202, 135, 153, 0.4);background-color:rgba(255, 255, 255, 0.6);border-radius:7px;}
#phyla td{ text-align:center;background-color:; border:0px solid #333;border-radius: 7px;width:240px;height:140px;}
#phyla a:link,a:visited{border-bottom:#996699 dotted 0px;color:#fff;font-size:20px;border: 0px solid #333;border-radius: 0px;background-color: rgba(255,255,255,0);}
#phyla a:hover,a:active{border-bottom:#996699 dotted 0px;color:black;font-size:20px;}

a.phy:hover,a.phy:active{font-size:20px;font-weight:bold;font-style:italic;}
a.phy:link,a.phy:visited{font-size:20px;font-weight:bold;font-style:italic;border:2px solid #333;}

a img{margin-top:5px;}

#dtree9{background-color:rgba(251,206,185,0.6);}
#dtree8{background-color:rgba(194,209,230,0.6);}
#dtree1{background-color:rgba(208,217,138,0.6);}
#dtree7{background-color:rgba(159,150,193,0.5);}

#dtree6{background-color:rgba(108,181,161,0.5);}
#dtree5{background-color:rgba(244,173,167,0.5);}
#dtree4{background-color:rgba(161,180,210,0.5);}
#dtree2{background-color:rgba(141,193,207,0.5);}

#dtree3{background-color:rgba(249,230,125,0.6);}
#dtree10{background-color:rgba(199,225,224,0.6);}
#dtree11{background-color:rgba(173,227,200,0.6);}
#dtree12{background-color:rgba(243,200,191,0.6);}

#phylum1{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(251,206,185);}
#phylum2{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(194,209,230);}
#phylum3{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(208,217,138);}
#phylum4{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(159,150,193);}

#phylum5{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(108,181,161);}
#phylum6{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(244,173,167);}
#phylum7{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(161,180,210);}
#phylum8{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(141,193,207);}

#phylum9{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(249,230,125);}
#phylum10{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(199,225,224);}
#phylum11{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(173,227,200);}
#phylum12{border: 0px solid #333;border-radius:5px;display:inline-block; width:225px;background-color:rgb(243,200,191);}

#residue{margin-left:300px;}
#residue a:link,a:visited{border-bottom:#996699 dotted 0px;border:0px solid #333;}
#residue a:hover,a:active{border-bottom:#996699 dotted 0px;border:0px solid #333;}
#user img{margin-top:0px;}
a#user:link,a#user:visited{border-bottom:#996699 dotted 1px;border:0px solid #333;font-size:17px;}
a#user:hover,a#user:active{border-bottom:#996699 dotted 1px;background-color:rgba(255,255,255,0);font-size:17px;}
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
				<div id="browse">
				<br/>
					<h3 class="section1">&#8251; Browse <a href="Userguide.php#browse" target="_blank" id='user'><img  src="images/help.png" width="17" height="17" border="0"/></a></h3>
					<hr id='hr1'  align='center' width='95%' size='1'/>
					<p style='font-weight:bold; font-size:16px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font>dbPSP</font> contains <font>19,296</font> experimentally identified p-sites in <font>8,586</font> proteins from <font>200</font> prokaryotic organisms. Users can browse the database by phyla or by residue types.</p>
					<p id='tit' style='font-weight:bold; font-size:20px;'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<img src='images/Phyla/phy.png'  height='40px'/>&nbsp;&nbsp;<a class='12' href='#phyla'>Browse by phyla</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/Phyla/res.png'  height='50px'/>&nbsp;<a class='12' href='#residue'>Browse by residue types</a></p>
					<hr id='hr2' />
				
				<table id="phyla">
					<tr>
						<td id='phy1'><a href=#dtree9 title='Proteobacteria'><img src='images/Phyla/ppt/1.png'  height='80px'/></a><br/><a class='phy' href=#dtree9 title='Proteobacteria'><br/><span id='phylum1'>Proteobacteria</span></a></td>
						<td id='phy2'><a href=#dtree8 title='Firmicutes'><img src='images/Phyla/ppt/2.png'  height='80px'/></a><br/><a class='phy' href=#dtree8 title='Firmicutes'><br/><span id='phylum2'>Firmicutes</span></a></td>
						<td id='phy9'><a href=#dtree3 title='Chlamydiae'><img src='images/Phyla/ppt/9.png'  height='80px'/></a><br/><a class='phy' href=#dtree3 title='Chlamydiae'><br/><span id='phylum9'>Chlamydiae</span></a></td>
						<td id='phy4'><a href=#dtree7 title='Euryarchaeota'><img src='images/Phyla/ppt/4.png'  height='80px'/></a><br/><a class='phy' href=#dtree7 title='Euryarchaeota'><br/><span id='phylum4'>Euryarchaeota</span></a></td>
					</tr>
					<tr>
						<td id='phy11'><a href=#dtree11 title='Tenericutes'><img src='images/Phyla/ppt/11.png'  height='80px'/></a><br/><a class='phy' href=#dtree11 title='Tenericutes'><br/><span id='phylum11'>Tenericutes</span></a></td>
						<td id='phy12'><a href=#dtree12 title='Thermotogae'><img src='images/Phyla/ppt/12.png'  height='80px'/></a><br/><a class='phy' href=#dtree12 title='Thermotogae'><br/><span id='phylum12'>Thermotogae</span></a></td>
						<td id='phy7'><a href=#dtree4 title='Crenarchaeota'><img src='images/Phyla/ppt/7.png'  height='80px'/></a><br/><a class='phy' href=#dtree4 title='Crenarchaeota'><br/><span id='phylum7'>Crenarchaeota</span></a></td>
						<td id='phy8'><a href=#dtree2 title='Bacteroidetes'><img src='images/Phyla/ppt/8.png'  height='80px'/></a><br/><a class='phy' href=#dtree2 title='Bacteroidetes'><br/><span id='phylum8'>Bacteroidetes</span></a></td>
					</tr>
					<tr>
						<td id='phy3'><a href=#dtree1 title='Actinobacteria'><img src='images/Phyla/ppt/3.png' height='80px'/></a><br/><a class='phy' href=#dtree1 title='Actinobacteria'><br/><span id='phylum3'>Actinobacteria</span></a></td>
						<td id='phy10'><a href=#dtree10 title='Spirochaetes'><img src='images/Phyla/ppt/10.png'  height='80px'/></a><br/><a class='phy' href=#dtree10 title='Spirochaetes'><br/><span id='phylum10'>Spirochaetes</span></a></td>
						<td id='phy5'><a href=#dtree6 title='Deinococcus-Thermus'><img src='images/Phyla/ppt/5.png'  height='80px'/></a><br/><a class='phy' href=#dtree6 title='Deinococcus-Thermus'><br/><span id='phylum5'>Deinococcus-Thermus</span></a></td>
						<td id='phy6'><a href=#dtree5 title='Cyanobacteria'><img src='images/Phyla/ppt/6.png'  height='80px'/></a><br/><a class='phy' href=#dtree5 title='Cyanobacteria'><br/><span id='phylum6'>Cyanobacteria</span></a></td>
					</tr>
				</table>
				
				<div>  
					<hr/>
				</div>
	

<div id="dtree9" style="">
		<p><a href="javascript: ddddddddd.openAll();">Open all</a> | <a href="javascript: ddddddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		ddddddddd = new dTree('ddddddddd');
        ddddddddd.add(0,-1,'Proteobacteria');  
        //节点打开 
        ddddddddd.add(1,0,'<strong>Proteobacteria</strong>','','','','','',true);
		
        ddddddddd.add('a',1,'Acinetobacter baumannii','Result.php?type=Browse&Species=Acinetobacter baumannii&page=1');  
		ddddddddd.add('a0','a','Acinetobacter baumannii (strain ATCC 17978 / CIP 53.77 / LMG 1025 / NCDC KC755 / 5377)','Result.php?type=Browse&Species=Acinetobacter baumannii (strain ATCC 17978 / CIP 53.77 / LMG 1025 / NCDC KC755 / 5377)&page=1');
		ddddddddd.add('a1','a','Acinetobacter baumannii (strain AYE)','Result.php?type=Browse&Species=Acinetobacter baumannii (strain AYE)&page=1');
		ddddddddd.add('a2','a','Acinetobacter baumannii (strain SDF)','Result.php?type=Browse&Species=Acinetobacter baumannii (strain SDF)&page=1');
		
		ddddddddd.add('b',1,'Actinobacillus pleuropneumoniae','Result.php?type=Browse&Species=Actinobacillus pleuropneumoniae&page=1');  
		ddddddddd.add('b0','b','Actinobacillus pleuropneumoniae serotype 7 (strain AP76)','Result.php?type=Browse&Species=Actinobacillus pleuropneumoniae serotype 7 (strain AP76)&page=1');
		
		
		ddddddddd.add('c',1,'Anaeromyxobacter','Result.php?type=Browse&Species=Anaeromyxobacter&page=1');  
		ddddddddd.add('c0','c','Anaeromyxobacter sp. (strain Fw109-5)','Result.php?type=Browse&Species=Anaeromyxobacter sp. (strain Fw109-5)&page=1');
		
		ddddddddd.add('d',1,'Azoarcus','Result.php?type=Browse&Species=Azoarcus&page=1');  
		ddddddddd.add('d0','d','Azoarcus sp. CIB','Result.php?type=Browse&Species=Azoarcus sp. CIB&page=1');
		
		ddddddddd.add('e',1,'Bordetella','Result.php?type=Browse&Species=Bordetella&page=1');  
		ddddddddd.add('e0','e','Bordetella bronchiseptica (strain ATCC BAA-588 / NCTC 13252 / RB50) (Alcaligenes bronchisepticus)','Result.php?type=Browse&Species=Bordetella bronchiseptica (strain ATCC BAA-588 / NCTC 13252 / RB50) (Alcaligenes bronchisepticus)&page=1');
		ddddddddd.add('e1','e','Bordetella pertussis (strain Tohama I / ATCC BAA-589 / NCTC 13251)','Result.php?type=Browse&Species=Bordetella pertussis (strain Tohama I / ATCC BAA-589 / NCTC 13251)&page=1');
		
		ddddddddd.add('f',1,'Brucella','Result.php?type=Browse&Species=Brucella&page=1');  
		ddddddddd.add('f0','f','Brucella abortus (strain 2308)','Result.php?type=Browse&Species=Brucella abortus (strain 2308)&page=1');
		ddddddddd.add('f1','f','Brucella abortus (strain S19)','Result.php?type=Browse&Species=Brucella abortus (strain S19)&page=1');
		ddddddddd.add('f2','f','Brucella abortus biovar 1 (strain 9-941)','Result.php?type=Browse&Species=Brucella abortus biovar 1 (strain 9-941)&page=1');
		
		ddddddddd.add('g',1,'Campylobacter','Result.php?type=Browse&Species=Campylobacter&page=1');  
		ddddddddd.add('g0','g','Campylobacter jejuni','Result.php?type=Browse&Species=Campylobacter jejuni&page=1');
		ddddddddd.add('g1','g','Campylobacter jejuni subsp. jejuni serotype O:2 (strain ATCC 700819 / NCTC 11168)','Result.php?type=Browse&Species=Campylobacter jejuni subsp. jejuni serotype O:2 (strain ATCC 700819 / NCTC 11168)&page=1');
		ddddddddd.add('g2','g','Helicobacter pylori (strain ATCC 700392 / 26695) (Campylobacter pylori)','Result.php?type=Browse&Species=Helicobacter pylori (strain ATCC 700392 / 26695) (Campylobacter pylori)&page=1');
		
		ddddddddd.add('h',1,'Caulobacter vibrioides','Result.php?type=Browse&Species=Caulobacter vibrioides&page=1');  
		ddddddddd.add('h0','h','Caulobacter vibrioides (strain ATCC 19089 / CB15) (Caulobacter crescentus)','Result.php?type=Browse&Species=Caulobacter vibrioides (strain ATCC 19089 / CB15) (Caulobacter crescentus)&page=1');
		ddddddddd.add('h1','h','Caulobacter vibrioides (strain NA1000 / CB15N) (Caulobacter crescentus)','Result.php?type=Browse&Species=Caulobacter vibrioides (strain NA1000 / CB15N) (Caulobacter crescentus)&page=1');
		
		ddddddddd.add('i',1,'Citrobacter koseri','Result.php?type=Browse&Species=Citrobacter koseri&page=1');  
		ddddddddd.add('i0','i','Citrobacter koseri (strain ATCC BAA-895 / CDC 4225-83 / SGSC4696)','Result.php?type=Browse&Species=Citrobacter koseri (strain ATCC BAA-895 / CDC 4225-83 / SGSC4696)&page=1');
		
		ddddddddd.add('j',1,'Edwardsiella ictaluri','Result.php?type=Browse&Species=Edwardsiella ictaluri&page=1');  
		ddddddddd.add('j0','j','Edwardsiella ictaluri (strain 93-146)','Result.php?type=Browse&Species=Edwardsiella ictaluri (strain 93-146)&page=1');
		
		ddddddddd.add('k',1,'Enterobacter','Result.php?type=Browse&Species=Enterobacter&page=1');  
		ddddddddd.add('k0','k','Enterobacter agglomerans (Erwinia herbicola) (Pantoea agglomerans)','Result.php?type=Browse&Species=Enterobacter agglomerans (Erwinia herbicola) (Pantoea agglomerans)&page=1');
		ddddddddd.add('k1','k','Enterobacter sp. (strain 638)','Result.php?type=Browse&Species=Enterobacter sp. (strain 638)&page=1');
		ddddddddd.add('k2','k','Klebsiella aerogenes (strain ATCC 13048 / DSM 30053 / JCM 1235 / KCTC 2190 / NBRC 13534 / NCIMB 10102 / NCTC 10006) (Enterobacter aerogenes)','Result.php?type=Browse&Species=Klebsiella aerogenes (strain ATCC 13048 / DSM 30053 / JCM 1235 / KCTC 2190 / NBRC 13534 / NCIMB 10102 / NCTC 10006) (Enterobacter aerogenes)&page=1');
		
		ddddddddd.add('l',1,'Escherichia coli','Result.php?type=Browse&Species=Escherichia coli&page=1');  
		ddddddddd.add('l0','l','Escherichia coli','Result.php?type=Browse&Species=Escherichia coli&page=1');
		ddddddddd.add('l1','l','Escherichia coli (strain B / BL21-DE3)','Result.php?type=Browse&Species=Escherichia coli (strain B / BL21-DE3)&page=1');
		ddddddddd.add('l2','l','Escherichia coli (strain K12)','Result.php?type=Browse&Species=Escherichia coli (strain K12)&page=1');
		ddddddddd.add('l3','l','Escherichia coli (strain SMS-3-5 / SECEC)','Result.php?type=Browse&Species=Escherichia coli (strain SMS-3-5 / SECEC)&page=1');
		ddddddddd.add('l4','l','Escherichia coli (strain UTI89 / UPEC)','Result.php?type=Browse&Species=Escherichia coli (strain UTI89 / UPEC)&page=1');
		ddddddddd.add('l5','l','Escherichia coli O1:K1 / APEC','Result.php?type=Browse&Species=Escherichia coli O1:K1 / APEC&page=1');
		ddddddddd.add('l6','l','Escherichia coli O111:H- (strain 11128 / EHEC)','Result.php?type=Browse&Species=Escherichia coli O111:H- (strain 11128 / EHEC)&page=1');
		ddddddddd.add('l7','l','Escherichia coli O127:H6 (strain E2348/69 / EPEC)','Result.php?type=Browse&Species=Escherichia coli O127:H6 (strain E2348/69 / EPEC)&page=1');
		ddddddddd.add('l8','l','Escherichia coli O139:H28 (strain E24377A / ETEC)','Result.php?type=Browse&Species=Escherichia coli O139:H28 (strain E24377A / ETEC)&page=1');
		ddddddddd.add('l9','l','Escherichia coli O157:H7','Result.php?type=Browse&Species=Escherichia coli O157:H7&page=1');
		ddddddddd.add('l10','l','Escherichia coli O45:K1 (strain S88 / ExPEC)','Result.php?type=Browse&Species=Escherichia coli O45:K1 (strain S88 / ExPEC)&page=1');
		ddddddddd.add('l11','l','Escherichia coli O6:H1 (strain CFT073 / ATCC 700928 / UPEC)','Result.php?type=Browse&Species=Escherichia coli O6:H1 (strain CFT073 / ATCC 700928 / UPEC)&page=1');

		ddddddddd.add('m',1,'Escherichia fergusonii','Result.php?type=Browse&Species=Escherichia fergusonii&page=1');  
		ddddddddd.add('m0','m','Escherichia fergusonii (strain ATCC 35469 / DSM 13698 / CDC 0568-73)','Result.php?type=Browse&Species=Escherichia fergusonii (strain ATCC 35469 / DSM 13698 / CDC 0568-73)&page=1');
		
		ddddddddd.add('n',1,'Klebsiella pneumoniae','Result.php?type=Browse&Species=Klebsiella pneumoniae&page=1');  
		ddddddddd.add('n0','n','Klebsiella pneumoniae','Result.php?type=Browse&Species=Klebsiella pneumoniae&page=1');
		ddddddddd.add('n1','n','Klebsiella pneumoniae (strain 342)','Result.php?type=Browse&Species=Klebsiella pneumoniae (strain 342)&page=1');
		ddddddddd.add('n2','n','Klebsiella pneumoniae CG43','Result.php?type=Browse&Species=Klebsiella pneumoniae CG43&page=1');
		ddddddddd.add('n3','n','Klebsiella pneumoniae subsp. pneumoniae','Result.php?type=Browse&Species=Klebsiella pneumoniae subsp. pneumoniae&page=1');
		ddddddddd.add('n4','n','Klebsiella pneumoniae subsp. pneumoniae (strain ATCC 700721 / MGH 78578)','Result.php?type=Browse&Species=Klebsiella pneumoniae subsp. pneumoniae (strain ATCC 700721 / MGH 78578)&page=1');
		ddddddddd.add('n5','n','Klebsiella pneumoniae subsp. pneumoniae (strain HS11286)','Result.php?type=Browse&Species=Klebsiella pneumoniae subsp. pneumoniae (strain HS11286)&page=1');
		ddddddddd.add('n6','n','Klebsiella pneumoniae subsp. pneumoniae NTUH-K2044','Result.php?type=Browse&Species=Klebsiella pneumoniae subsp. pneumoniae NTUH-K2044&page=1');
		ddddddddd.add('n7','n','Klebsiella pneumoniae subsp. rhinoscleromatis ATCC 13884','Result.php?type=Browse&Species=Klebsiella pneumoniae subsp. rhinoscleromatis ATCC 13884&page=1');
		
		ddddddddd.add('o',1,'Leucothrix mucor','Result.php?type=Browse&Species=Leucothrix mucor&page=1');  
		ddddddddd.add('o0','o','Leucothrix mucor','Result.php?type=Browse&Species=Leucothrix mucor&page=1');
		
		ddddddddd.add('p',1,'Malonomonas rubra','Result.php?type=Browse&Species=Malonomonas rubra&page=1');  
		ddddddddd.add('p0','p','Malonomonas rubra','Result.php?type=Browse&Species=Malonomonas rubra&page=1');
		
		ddddddddd.add('q',1,'Myxococcus xanthus','Result.php?type=Browse&Species=Myxococcus xanthus&page=1');  
		ddddddddd.add('q0','q','Myxococcus xanthus','Result.php?type=Browse&Species=Myxococcus xanthus&page=1');
		
		ddddddddd.add('r',1,'Neisseria','Result.php?type=Browse&Species=Neisseria&page=1');  
		ddddddddd.add('r0','r','Neisseria gonorrhoeae','Result.php?type=Browse&Species=Neisseria gonorrhoeae&page=1');
		ddddddddd.add('r1','r','Neisseria meningitidis serogroup B (strain MC58)','Result.php?type=Browse&Species=Neisseria meningitidis serogroup B (strain MC58)&page=1');
		
		ddddddddd.add('s',1,'Oceanospirillum linum','Result.php?type=Browse&Species=Oceanospirillum linum&page=1');  
		ddddddddd.add('s0','s','Oceanospirillum linum','Result.php?type=Browse&Species=Oceanospirillum linum&page=1');
		
		ddddddddd.add('t',1,'Pseudomonas','Result.php?type=Browse&Species=Pseudomonas&page=1');  
		ddddddddd.add('t0','t','Pseudomonas aeruginosa','Result.php?type=Browse&Species=Pseudomonas aeruginosa&page=1');
		ddddddddd.add('t1','t','Pseudomonas aeruginosa (strain ATCC 15692 / DSM 22644 / CIP 104116 / JCM 14847 / LMG 12228 / 1C / PRS 101 / PAO1)','Result.php?type=Browse&Species=Pseudomonas aeruginosa (strain ATCC 15692 / DSM 22644 / CIP 104116 / JCM 14847 / LMG 12228 / 1C / PRS 101 / PAO1)&page=1');
		ddddddddd.add('t2','t','Pseudomonas aeruginosa (strain UCBPP-PA14)','Result.php?type=Browse&Species=Pseudomonas aeruginosa (strain UCBPP-PA14)&page=1');
		ddddddddd.add('t3','t','Pseudomonas fluorescens (strain Pf0-1)','Result.php?type=Browse&Species=Pseudomonas fluorescens (strain Pf0-1)&page=1');
		ddddddddd.add('t4','t','Pseudomonas syringae pv. tomato (strain ATCC BAA-871 / DC3000)','Result.php?type=Browse&Species=Pseudomonas syringae pv. tomato (strain ATCC BAA-871 / DC3000)&page=1');
		ddddddddd.add('t5','t','Pseudomonas taetrolens','Result.php?type=Browse&Species=Pseudomonas taetrolens&page=1');
		ddddddddd.add('t6','t','Comamonas testosteroni (Pseudomonas testosteroni)','Result.php?type=Browse&Species=Comamonas testosteroni (Pseudomonas testosteroni)&page=1');
		
		ddddddddd.add('u',1,'Rhizobium','Result.php?type=Browse&Species=Rhizobium&page=1');  
		ddddddddd.add('u0','u','Rhizobium leguminosarum bv. viciae','Result.php?type=Browse&Species=Rhizobium leguminosarum bv. viciae&page=1');
		ddddddddd.add('u1','u','Rhizobium meliloti (strain 1021) (Ensifer meliloti) (Sinorhizobium meliloti)','Result.php?type=Browse&Species=Rhizobium meliloti (strain 1021) (Ensifer meliloti) (Sinorhizobium meliloti)&page=1');
		ddddddddd.add('u2','u','Rhizobium radiobacter (Agrobacterium tumefaciens) (Agrobacterium radiobacter)','Result.php?type=Browse&Species=Rhizobium radiobacter (Agrobacterium tumefaciens) (Agrobacterium radiobacter)&page=1');
		
		ddddddddd.add('v',1,'Rhodobacter','Result.php?type=Browse&Species=Rhodobacter&page=1');  
		ddddddddd.add('v0','v','Rhodobacter capsulatus (Rhodopseudomonas capsulata)','Result.php?type=Browse&Species=Rhodobacter capsulatus (Rhodopseudomonas capsulata)&page=1');
		ddddddddd.add('v1','v','Rhodobacter sphaeroides (Rhodopseudomonas sphaeroides)','Result.php?type=Browse&Species=Rhodobacter sphaeroides (Rhodopseudomonas sphaeroides)&page=1');
		ddddddddd.add('v2','v','Rhodopseudomonas palustris (strain ATCC BAA-98 / CGA009)','Result.php?type=Browse&Species=Rhodopseudomonas palustris (strain ATCC BAA-98 / CGA009)&page=1');
		
		ddddddddd.add('w',1,'Salmonella','Result.php?type=Browse&Species=Salmonella&page=1');  
		ddddddddd.add('w0','w','Salmonella agona (strain SL483)','Result.php?type=Browse&Species=Salmonella agona (strain SL483)&page=1');
		ddddddddd.add('w1','w','Salmonella choleraesuis (strain SC-B67)','Result.php?type=Browse&Species=Salmonella choleraesuis (strain SC-B67)&page=1');
		ddddddddd.add('w2','w','Salmonella newport (strain SL254)','Result.php?type=Browse&Species=Salmonella newport (strain SL254)&page=1');
		ddddddddd.add('w3','w','Salmonella typhi','Result.php?type=Browse&Species=Salmonella typhi&page=1');
		ddddddddd.add('w4','w','Salmonella typhimurium (strain 14028s / SGSC 2262)','Result.php?type=Browse&Species=Salmonella typhimurium (strain 14028s / SGSC 2262)&page=1');
		ddddddddd.add('w5','w','Salmonella typhimurium (strain LT2 / SGSC1412 / ATCC 700720)','Result.php?type=Browse&Species=Salmonella typhimurium (strain LT2 / SGSC1412 / ATCC 700720)&page=1');
		
		ddddddddd.add('x',1,'Serratia','Result.php?type=Browse&Species=Serratia&page=1');  
		ddddddddd.add('x0','x','Serratia marcescens','Result.php?type=Browse&Species=Serratia marcescens&page=1');
		ddddddddd.add('x1','x','Serratia marcescens subsp. marcescens','Result.php?type=Browse&Species=Serratia marcescens subsp. marcescens&page=1');
		ddddddddd.add('x2','x','Serratia proteamaculans (strain 568)','Result.php?type=Browse&Species=Serratia proteamaculans (strain 568)&page=1');
		ddddddddd.add('x3','x','Serratia sp. (strain ATCC 39006)','Result.php?type=Browse&Species=Serratia sp. (strain ATCC 39006)&page=1');
		
		ddddddddd.add('y',1,'Shewanella oneidensis','Result.php?type=Browse&Species=Shewanella oneidensis&page=1');  
		ddddddddd.add('y0','y','Shewanella oneidensis (strain MR-1)','Result.php?type=Browse&Species=Shewanella oneidensis (strain MR-1)&page=1');
		
		ddddddddd.add('z',1,'Shigella flexneri','Result.php?type=Browse&Species=Shigella flexneri&page=1');  
		ddddddddd.add('z0','z','Shigella flexneri','Result.php?type=Browse&Species=Shigella flexneri&page=1');
		
		ddddddddd.add('aa',1,'Sinorhizobium meliloti','Result.php?type=Browse&Species=Sinorhizobium meliloti&page=1');  
		ddddddddd.add('aa0','aa','Sinorhizobium meliloti (strain BL225C)','Result.php?type=Browse&Species=Sinorhizobium meliloti (strain BL225C)&page=1');
		
		ddddddddd.add('bb',1,'Thauera aromatica','Result.php?type=Browse&Species=Thauera aromatica&page=1');  
		ddddddddd.add('bb0','bb','Thauera aromatica','Result.php?type=Browse&Species=Thauera aromatica&page=1');
		
		ddddddddd.add('cc',1,'Vibrio alginolyticus','Result.php?type=Browse&Species=Vibrio alginolyticus&page=1');  
		ddddddddd.add('cc0','cc','Vibrio alginolyticus','Result.php?type=Browse&Species=Vibrio alginolyticus&page=1');
		ddddddddd.add('cc1','cc','Vibrio alginolyticus 40B','Result.php?type=Browse&Species=Vibrio alginolyticus 40B&page=1');
		ddddddddd.add('cc2','cc','Vibrio antiquarius (strain Ex25)','Result.php?type=Browse&Species=Vibrio antiquarius (strain Ex25)&page=1');
		ddddddddd.add('cc3','cc','Vibrio campbellii (strain ATCC BAA-1116 / BB120)','Result.php?type=Browse&Species=Vibrio campbellii (strain ATCC BAA-1116 / BB120)&page=1');
		ddddddddd.add('cc4','cc','Vibrio cholerae serotype O1 (strain ATCC 39541 / Classical Ogawa 395 / O395)','Result.php?type=Browse&Species=Vibrio cholerae serotype O1 (strain ATCC 39541 / Classical Ogawa 395 / O395)&page=1');
		ddddddddd.add('cc5','cc','Vibrio harveyi (Beneckea harveyi)','Result.php?type=Browse&Species=Vibrio harveyi (Beneckea harveyi)&page=1');
		ddddddddd.add('cc6','cc','Vibrio vulnificus (strain YJ016)','Result.php?type=Browse&Species=Vibrio vulnificus (strain YJ016)&page=1');
		ddddddddd.add('cc7','cc','Aliivibrio fischeri (strain ATCC 700601 / ES114) (Vibrio fischeri)','Result.php?type=Browse&Species=Aliivibrio fischeri (strain ATCC 700601 / ES114) (Vibrio fischeri)&page=1');
		
		ddddddddd.add('dd',1,'Xanthomonas','Result.php?type=Browse&Species=Xanthomonas&page=1');  
		ddddddddd.add('dd0','dd','Xanthomonas axonopodis pv. citri (strain 306)','Result.php?type=Browse&Species=Xanthomonas axonopodis pv. citri (strain 306)&page=1');
		ddddddddd.add('dd1','dd','Xanthomonas campestris pv. campestris (strain ATCC 33913 / DSM 3586 / NCPPB 528 / LMG 568 / P 25)','Result.php?type=Browse&Species=Xanthomonas campestris pv. campestris (strain ATCC 33913 / DSM 3586 / NCPPB 528 / LMG 568 / P 25)&page=1');
		ddddddddd.add('dd2','dd','Xanthomonas campestris pv. campestris (strain B100)','Result.php?type=Browse&Species=Xanthomonas campestris pv. campestris (strain B100)&page=1');
		
		ddddddddd.add('ee',1,'Yersinia','Result.php?type=Browse&Species=Yersinia&page=1');  
		ddddddddd.add('ee0','ee','Yersinia enterocolitica','Result.php?type=Browse&Species=Yersinia enterocolitica&page=1');
		ddddddddd.add('ee1','ee','Yersinia enterocolitica serotype O:8 / biotype 1B (strain NCTC 13174 / 8081)','Result.php?type=Browse&Species=Yersinia enterocolitica serotype O:8 / biotype 1B (strain NCTC 13174 / 8081)&page=1');
		ddddddddd.add('ee2','ee','Yersinia pseudotuberculosis serotype O:1b (strain IP 31758)','Result.php?type=Browse&Species=Yersinia pseudotuberculosis serotype O:1b (strain IP 31758)&page=1');
		
		
        //文件夹节点链接不起作用  
        ddddddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        ddddddddd.config.useCookies=false;  
        //不使用连接线  
        ddddddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        ddddddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        ddddddddd.config.useStatusText=true;  
        ddddddddd.config.inOrder=true;  
        document.write(ddddddddd);  
  
        //-->  
    </script> 
</div>
		<div>  
			<hr/>
		</div> 

<div id="dtree8" style="border:">
		<p><a href="javascript: dddddddd.openAll();">Open all</a> | <a href="javascript: dddddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		dddddddd = new dTree('dddddddd');
        dddddddd.add(0,-1,'Firmicutes');  
        //节点打开 
        dddddddd.add(1,0,'<strong>Firmicutes</strong>','','','','','',true);
		
        dddddddd.add('a',1,'Bacillus','Result.php?type=Browse&Species=Bacillus&page=1');  
		dddddddd.add('a0','a','Aneurinibacillus migulanus (Bacillus migulanus)','Result.php?type=Browse&Species=Aneurinibacillus migulanus (Bacillus migulanus)&page=1');
		dddddddd.add('a1','a','Bacillus anthracis','Result.php?type=Browse&Species=Bacillus anthracis&page=1');
		dddddddd.add('a2','a','Bacillus licheniformis','Result.php?type=Browse&Species=Bacillus licheniformis&page=1');
		dddddddd.add('a3','a','Bacillus megaterium','Result.php?type=Browse&Species=Bacillus megaterium&page=1');
		dddddddd.add('a4','a','Bacillus subtilis (strain 168)','Result.php?type=Browse&Species=Bacillus subtilis (strain 168)&page=1');
		dddddddd.add('a5','a','Bacillus thuringiensis subsp. israelensis','Result.php?type=Browse&Species=Bacillus thuringiensis subsp. israelensis&page=1');
		dddddddd.add('a6','a','Bacillus velezensis (strain DSM 23117 / BGSC 10A6 / FZB42) (Bacillus amyloliquefaciens subsp. plantarum)','Result.php?type=Browse&Species=Bacillus velezensis (strain DSM 23117 / BGSC 10A6 / FZB42) (Bacillus amyloliquefaciens subsp. plantarum)&page=1');
		dddddddd.add('a7','a','Geobacillus stearothermophilus (Bacillus stearothermophilus)','Result.php?type=Browse&Species=Geobacillus stearothermophilus (Bacillus stearothermophilus)&page=1');
		dddddddd.add('a8','a','Lysinibacillus sphaericus (Bacillus sphaericus)','Result.php?type=Browse&Species=Lysinibacillus sphaericus (Bacillus sphaericus)&page=1');
		
		dddddddd.add('b',1,'Brevibacillus parabrevis','Result.php?type=Browse&Species=Brevibacillus parabrevis&page=1');  
		dddddddd.add('b0','b','Brevibacillus parabrevis','Result.php?type=Browse&Species=Brevibacillus parabrevis&page=1');
		
		dddddddd.add('c',1,'Caldanaerobacter subterraneus','Result.php?type=Browse&Species=Caldanaerobacter subterraneus&page=1');  
		dddddddd.add('c0','c','Caldanaerobacter subterraneus subsp. tengcongensis (strain DSM 15242 / JCM 11007 / NBRC 100824 / MB4) (Thermoanaerobacter tengcongensis)','Result.php?type=Browse&Species=Caldanaerobacter subterraneus subsp. tengcongensis (strain DSM 15242 / JCM 11007 / NBRC 100824 / MB4) (Thermoanaerobacter tengcongensis)&page=1');
		
		dddddddd.add('d',1,'Clostridium acetobutylicum','Result.php?type=Browse&Species=Clostridium acetobutylicum&page=1');  
		dddddddd.add('d0','d','Clostridium acetobutylicum (strain ATCC 824 / DSM 792 / JCM 1419 / LMG 5710 / VKM B-1787)','Result.php?type=Browse&Species=Clostridium acetobutylicum (strain ATCC 824 / DSM 792 / JCM 1419 / LMG 5710 / VKM B-1787)&page=1');
		
		dddddddd.add('e',1,'Enterococcus','Result.php?type=Browse&Species=Enterococcus&page=1');  
		dddddddd.add('e0','e','Enterococcus casseliflavus (Enterococcus flavescens)','Result.php?type=Browse&Species=Enterococcus casseliflavus (Enterococcus flavescens)&page=1');
		dddddddd.add('e1','e','Enterococcus faecalis (strain ATCC 700802 / V583)','Result.php?type=Browse&Species=Enterococcus faecalis (strain ATCC 700802 / V583)&page=1');
		
		dddddddd.add('f',1,'Lactobacillus','Result.php?type=Browse&Species=Lactobacillus&page=1');  
		dddddddd.add('f0','f','Lactobacillus casei','Result.php?type=Browse&Species=Lactobacillus casei&page=1');
		dddddddd.add('f1','f','Lactobacillus rhamnosus','Result.php?type=Browse&Species=Lactobacillus rhamnosus&page=1');
		dddddddd.add('f2','f','Lactobacillus rhamnosus DSM 14870','Result.php?type=Browse&Species=Lactobacillus rhamnosus DSM 14870&page=1');
		
		dddddddd.add('g',1,'Lactococcus lactis','Result.php?type=Browse&Species=Lactococcus lactis&page=1');  
		dddddddd.add('g0','g','Lactococcus lactis subsp. cremoris (strain MG1363)','Result.php?type=Browse&Species=Lactococcus lactis subsp. cremoris (strain MG1363)&page=1');
		dddddddd.add('g1','g','Lactococcus lactis subsp. cremoris (strain SK11)','Result.php?type=Browse&Species=Lactococcus lactis subsp. cremoris (strain SK11)&page=1');
		dddddddd.add('g2','g','Lactococcus lactis subsp. lactis (strain IL1403) (Streptococcus lactis)','Result.php?type=Browse&Species=Lactococcus lactis subsp. lactis (strain IL1403) (Streptococcus lactis)&page=1');
		dddddddd.add('g3','g','Lactococcus lactis subsp. lactis (strain KF147)','Result.php?type=Browse&Species=Lactococcus lactis subsp. lactis (strain KF147)&page=1');
		dddddddd.add('g4','g','Lactococcus lactis subsp. lactis (Streptococcus lactis)','Result.php?type=Browse&Species=Lactococcus lactis subsp. lactis (Streptococcus lactis)&page=1');
		
		dddddddd.add('h',1,'Listeria','Result.php?type=Browse&Species=Listeria&page=1');  
		dddddddd.add('h0','h','Listeria innocua serovar 6a (strain ATCC BAA-680 / CLIP 11262)','Result.php?type=Browse&Species=Listeria innocua serovar 6a (strain ATCC BAA-680 / CLIP 11262)&page=1');
		dddddddd.add('h1','h','Listeria monocytogenes','Result.php?type=Browse&Species=Listeria monocytogenes&page=1');
		dddddddd.add('h2','h','Listeria monocytogenes FSL F2-208','Result.php?type=Browse&Species=Listeria monocytogenes FSL F2-208&page=1');
		dddddddd.add('h3','h','Listeria monocytogenes serotype 1/2a (strain 10403S)','Result.php?type=Browse&Species=Listeria monocytogenes serotype 1/2a (strain 10403S)&page=1');
		dddddddd.add('h4','h','Listeria monocytogenes serotype 4a (strain HCC23)','Result.php?type=Browse&Species=Listeria monocytogenes serotype 4a (strain HCC23)&page=1');
		dddddddd.add('h5','h','Listeria monocytogenes serotype 4a (strain M7)','Result.php?type=Browse&Species=Listeria monocytogenes serotype 4a (strain M7)&page=1');
		dddddddd.add('h6','h','Listeria monocytogenes serotype 4b (strain CLIP80459)','Result.php?type=Browse&Species=Listeria monocytogenes serotype 4b (strain CLIP80459)&page=1');
		dddddddd.add('h7','h','Listeria monocytogenes serotype 4b str. LL195','Result.php?type=Browse&Species=Listeria monocytogenes serotype 4b str. LL195&page=1');
		dddddddd.add('h8','h','Listeria monocytogenes serovar 1/2a (strain ATCC BAA-679 / EGD-e)','Result.php?type=Browse&Species=Listeria monocytogenes serovar 1/2a (strain ATCC BAA-679 / EGD-e)&page=1');
		
		dddddddd.add('i',1,'Moorella thermoacetica','Result.php?type=Browse&Species=Moorella thermoacetica&page=1');  
		dddddddd.add('i0','i','Moorella thermoacetica (strain ATCC 39073 / JCM 9320)','Result.php?type=Browse&Species=Moorella thermoacetica (strain ATCC 39073 / JCM 9320)&page=1');
		
		dddddddd.add('j',1,'Oenococcus oeni','Result.php?type=Browse&Species=Oenococcus oeni&page=1');  
		dddddddd.add('j0','j','Oenococcus oeni (strain ATCC BAA-331 / PSU-1)','Result.php?type=Browse&Species=Oenococcus oeni (strain ATCC BAA-331 / PSU-1)&page=1');
		
		dddddddd.add('k',1,'Staphylococcus','Result.php?type=Browse&Species=Staphylococcus&page=1');  
		dddddddd.add('k0','k','Staphylococcus aureus','Result.php?type=Browse&Species=Staphylococcus aureus&page=1');
		dddddddd.add('k1','k','Staphylococcus aureus (strain COL)','Result.php?type=Browse&Species=Staphylococcus aureus (strain COL)&page=1');
		dddddddd.add('k2','k','Staphylococcus aureus (strain Mu3 / ATCC 700698)','Result.php?type=Browse&Species=Staphylococcus aureus (strain Mu3 / ATCC 700698)&page=1');
		dddddddd.add('k3','k','Staphylococcus aureus (strain N315)','Result.php?type=Browse&Species=Staphylococcus aureus (strain N315)&page=1');
		dddddddd.add('k4','k','Staphylococcus aureus (strain NCTC 8325)','Result.php?type=Browse&Species=Staphylococcus aureus (strain NCTC 8325)&page=1');
		dddddddd.add('k5','k','Staphylococcus aureus (strain Newman)','Result.php?type=Browse&Species=Staphylococcus aureus (strain Newman)&page=1');
		dddddddd.add('k6','k','Staphylococcus aureus (strain USA300)','Result.php?type=Browse&Species=Staphylococcus aureus (strain USA300)&page=1');
		dddddddd.add('k7','k','Staphylococcus carnosus','Result.php?type=Browse&Species=Staphylococcus carnosus&page=1');
		dddddddd.add('k8','k','Staphylococcus carnosus (strain TM300)','Result.php?type=Browse&Species=Staphylococcus carnosus (strain TM300)&page=1');
		dddddddd.add('k8','k','Staphylococcus xylosus','Result.php?type=Browse&Species=Staphylococcus xylosus&page=1');
		
		dddddddd.add('l',1,'Streptococcus','Result.php?type=Browse&Species=Streptococcus&page=1');  
		dddddddd.add('l0','l','Streptococcus agalactiae','Result.php?type=Browse&Species=Streptococcus agalactiae&page=1');
		dddddddd.add('l1','l','Streptococcus agalactiae FSL S3-277','Result.php?type=Browse&Species=Streptococcus agalactiae FSL S3-277&page=1');
		dddddddd.add('l2','l','Streptococcus agalactiae serogroup III','Result.php?type=Browse&Species=Streptococcus agalactiae serogroup III&page=1');
		dddddddd.add('l3','l','Streptococcus agalactiae serotype Ia (strain ATCC 27591 / A909 / CDC SS700)','Result.php?type=Browse&Species=Streptococcus agalactiae serotype Ia (strain ATCC 27591 / A909 / CDC SS700)&page=1');
		dddddddd.add('l4','l','Streptococcus agalactiae serotype III (strain NEM316)','Result.php?type=Browse&Species=Streptococcus agalactiae serotype III (strain NEM316)&page=1');
		dddddddd.add('l5','l','Streptococcus agalactiae serotype V (strain ATCC BAA-611 / 2603 V/R)','Result.php?type=Browse&Species=Streptococcus agalactiae serotype V (strain ATCC BAA-611 / 2603 V/R)&page=1');
		dddddddd.add('l6','l','Streptococcus equinus (Streptococcus bovis)','Result.php?type=Browse&Species=Streptococcus equinus (Streptococcus bovis)&page=1');
		dddddddd.add('l7','l','Streptococcus mutans serotype c (strain ATCC 700610 / UA159)','Result.php?type=Browse&Species=Streptococcus mutans serotype c (strain ATCC 700610 / UA159)&page=1');
		dddddddd.add('l8','l','Streptococcus pneumoniae (strain ATCC BAA-255 / R6)','Result.php?type=Browse&Species=Streptococcus pneumoniae (strain ATCC BAA-255 / R6)&page=1');
		dddddddd.add('l9','l','Streptococcus pneumoniae serotype 2 (strain D39 / NCTC 7466)','Result.php?type=Browse&Species=Streptococcus pneumoniae serotype 2 (strain D39 / NCTC 7466)&page=1');
		dddddddd.add('l10','l','Streptococcus pneumoniae serotype 4 (strain ATCC BAA-334 / TIGR4)','Result.php?type=Browse&Species=Streptococcus pneumoniae serotype 4 (strain ATCC BAA-334 / TIGR4)&page=1');
		dddddddd.add('l11','l','Streptococcus pyogenes','Result.php?type=Browse&Species=Streptococcus pyogenes&page=1');
		dddddddd.add('l12','l','Streptococcus salivarius','Result.php?type=Browse&Species=Streptococcus salivarius&page=1');
		dddddddd.add('l13','l','Streptococcus suis','Result.php?type=Browse&Species=Streptococcus suis&page=1');
		dddddddd.add('l14','l','Streptococcus suis (strain 05ZYH33)','Result.php?type=Browse&Species=Streptococcus suis (strain 05ZYH33)&page=1');
		dddddddd.add('l15','l','Streptococcus suis (strain 98HAH33)','Result.php?type=Browse&Species=Streptococcus suis (strain 98HAH33)&page=1');
		dddddddd.add('l16','l','Streptococcus suis 6407','Result.php?type=Browse&Species=Streptococcus suis 6407&page=1');
		dddddddd.add('l17','l','Streptococcus suis T15','Result.php?type=Browse&Species=Streptococcus suis T15&page=1');
		
          
        //文件夹节点链接不起作用  
        dddddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        dddddddd.config.useCookies=false;  
        //不使用连接线  
        dddddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        dddddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        dddddddd.config.useStatusText=true;  
        dddddddd.config.inOrder=true;  
        document.write(dddddddd);  
  
        //-->  
    </script> 
</div>
		<div>  
			<hr/>
		</div>		
  
<div id="dtree1" style="border:"> 
<p><a href="javascript: d.openAll();">Open all</a> | <a href="javascript: d.closeAll();">Close all</a></p> 
    <script type="text/javascript">  
        <!--  
  
        d = new dTree('d');  
        d.add(0,-1,'Actinobacteria');  
        //节点打开 
        d.add(1,0,'<strong>Actinobacteria</strong>','','','','','',true);
		
        d.add('a',1,'Amycolatopsis mediterranei','Result.php?type=Browse&Species=Amycolatopsis mediterranei&page=1');  
		d.add('a0','a','Amycolatopsis mediterranei (Nocardia mediterranei)','Result.php?type=Browse&Species=Amycolatopsis mediterranei (Nocardia mediterranei)&page=1');
		
		d.add('b',1,'Corynebacterium glutamicum','Result.php?type=Browse&Species=Corynebacterium glutamicum&page=1');  
		d.add('b0','b','Corynebacterium glutamicum (Brevibacterium saccharolyticum)','Result.php?type=Browse&Species=Corynebacterium glutamicum (Brevibacterium saccharolyticum)&page=1');
		d.add('b1','b','Corynebacterium glutamicum (strain ATCC 13032 / DSM 20300 / JCM 1318 / LMG 3730 / NCIMB 10025)','Result.php?type=Browse&Species=Corynebacterium glutamicum (strain ATCC 13032 / DSM 20300 / JCM 1318 / LMG 3730 / NCIMB 10025)&page=1');
		d.add('b2','b','Corynebacterium glutamicum ATCC 14067','Result.php?type=Browse&Species=Corynebacterium glutamicum ATCC 14067&page=1');
		
		d.add('c','1','Mycobacterium bovis','Result.php?type=Browse&Species=Mycobacterium bovis&page=1');
		d.add('c0','c','Mycobacterium bovis (strain ATCC BAA-935 / AF2122/97)','Result.php?type=Browse&Species=Mycobacterium bovis (strain ATCC BAA-935 / AF2122/97)&page=1');
		d.add('c1','c','Mycobacterium bovis (strain BCG / Pasteur 1173P2)','Result.php?type=Browse&Species=Mycobacterium bovis (strain BCG / Pasteur 1173P2)&page=1');

		d.add('d','1','Mycobacterium leprae','Result.php?type=Browse&Species=Mycobacterium leprae&page=1');
		d.add('d0','d','Mycobacterium leprae (strain TN)','Result.php?type=Browse&Species=Mycobacterium leprae (strain TN)&page=1');

		d.add('e','1','Mycobacterium smegmatis','Result.php?type=Browse&Species=Mycobacterium smegmatis&page=1');
		d.add('e0','e','Mycobacterium smegmatis (strain ATCC 700084 / mc(2)155)','Result.php?type=Browse&Species=Mycobacterium smegmatis (strain ATCC 700084 / mc(2)155)&page=1');
		
		d.add('f','1','Mycobacterium tuberculosis','Result.php?type=Browse&Species=Mycobacterium tuberculosis&page=1');
		d.add('f0','f','Mycobacterium tuberculosis (strain ATCC 25177 / H37Ra)','Result.php?type=Browse&Species=Mycobacterium tuberculosis (strain ATCC 25177 / H37Ra)&page=1');
		d.add('f1','f','Mycobacterium tuberculosis (strain ATCC 25618 / H37Rv)','Result.php?type=Browse&Species=Mycobacterium tuberculosis (strain ATCC 25618 / H37Rv)&page=1');
		d.add('f2','f','Mycobacterium tuberculosis (strain CDC 1551 / Oshkosh)','Result.php?type=Browse&Species=Mycobacterium tuberculosis (strain CDC 1551 / Oshkosh)&page=1');
		
		d.add('g','1','Mycobacterium ulcerans','Result.php?type=Browse&Species=Mycobacterium ulcerans&page=1');
		d.add('g0','g','Mycobacterium ulcerans (strain Agy99)','Result.php?type=Browse&Species=Mycobacterium ulcerans (strain Agy99)&page=1');

		d.add('h','1','Nocardia iowensis','Result.php?type=Browse&Species=Nocardia iowensis&page=1');
		d.add('h0','h','Nocardia iowensis','Result.php?type=Browse&Species=Nocardia iowensis&page=1');

		d.add('i','1','Saccharopolyspora erythraea','Result.php?type=Browse&Species=Saccharopolyspora erythraea&page=1');
		d.add('i0','i','Saccharopolyspora erythraea (strain ATCC 11635 / DSM 40517 / JCM 4748 / NBRC 13426 / NCIMB 8594 / NRRL 2338)','Result.php?type=Browse&Species=Saccharopolyspora erythraea (strain ATCC 11635 / DSM 40517 / JCM 4748 / NBRC 13426 / NCIMB 8594 / NRRL 2338)&page=1');

		d.add('j','1','Streptomyces coelicolor','Result.php?type=Browse&Species=Streptomyces coelicolor&page=1');
		d.add('j0','j','Streptomyces coelicolor','Result.php?type=Browse&Species=Streptomyces coelicolor&page=1');
		d.add('j1','j','Streptomyces coelicolor (strain ATCC BAA-471 / A3(2) / M145)','Result.php?type=Browse&Species=Streptomyces coelicolor (strain ATCC BAA-471 / A3(2) / M145)&page=1');

		d.add('k','1','Streptomyces reticuli','Result.php?type=Browse&Species=Streptomyces reticuli&page=1');
		d.add('k0','k','Streptomyces reticuli','Result.php?type=Browse&Species=Streptomyces reticuli&page=1');

		d.add('l','1','Streptomyces venezuelae','Result.php?type=Browse&Species=Streptomyces venezuelae&page=1');
		d.add('l0','l','Streptomyces venezuelae','Result.php?type=Browse&Species=Streptomyces venezuelae&page=1');

 
        //节点关闭  
        //d.add(9,0,'My Pictures','example01.html','Pictures I\'ve taken over the years','','','img/imgfolder.gif',false);  
        //console.error("tree=",d.toString());  
          
        //文件夹节点链接不起作用  
        d.config.folderLinks=false;  
        //不使用cookies记录状态  
        d.config.useCookies=false;  
        //不使用连接线  
        d.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        d.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        d.config.useStatusText=true;  
        d.config.inOrder=true;  
        document.write(d);  
		</script>
</div>
		
		<div>  
			<hr/>
		</div>
		
<div id="dtree7" style="border:">
		<p><a href="javascript: ddddddd.openAll();">Open all</a> | <a href="javascript: ddddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		ddddddd = new dTree('ddddddd');
        ddddddd.add(0,-1,'Euryarchaeota');  
        //节点打开 
        ddddddd.add(1,0,'<strong>Euryarchaeota</strong>','','','','','',true);
		
        ddddddd.add('a',1,'Archaeoglobus fulgidus','Result.php?type=Browse&Species=Archaeoglobus fulgidus&page=1');  
		ddddddd.add('a0','a','Archaeoglobus fulgidus (strain ATCC 49558 / VC-16 / DSM 4304 / JCM 9628 / NBRC 100126)','Result.php?type=Browse&Species=Archaeoglobus fulgidus (strain ATCC 49558 / VC-16 / DSM 4304 / JCM 9628 / NBRC 100126)&page=1');
		
		ddddddd.add('b',1,'Halobacterium salinarum','Result.php?type=Browse&Species=Halobacterium salinarum&page=1');  
		ddddddd.add('b0','b','Halobacterium salinarum (strain ATCC 29341 / DSM 671 / R1)','Result.php?type=Browse&Species=Halobacterium salinarum (strain ATCC 29341 / DSM 671 / R1)&page=1');
		ddddddd.add('b1','b','Haloferax volcanii (strain ATCC 29605 / DSM 3757 / JCM 8879 / NBRC 14742 / NCIMB 2012 / VKM B-1768 / DS2) (Halobacterium volcanii)','Result.php?type=Browse&Species=Haloferax volcanii (strain ATCC 29605 / DSM 3757 / JCM 8879 / NBRC 14742 / NCIMB 2012 / VKM B-1768 / DS2) (Halobacterium volcanii)&page=1');
		
		
		ddddddd.add('c',1,'Methanohalophilus','Result.php?type=Browse&Species=Methanohalophilus&page=1');  
		ddddddd.add('c0','c','Methanohalophilus mahii (strain ATCC 35705 / DSM 5219 / SLP)','Result.php?type=Browse&Species=Methanohalophilus mahii (strain ATCC 35705 / DSM 5219 / SLP)&page=1');
		ddddddd.add('c1','c','Methanohalophilus portucalensis FDF-1','Result.php?type=Browse&Species=Methanohalophilus portucalensis FDF-1&page=1');
		
		ddddddd.add('d',1,'Methanosarcina','Result.php?type=Browse&Species=Methanosarcina&page=1');  
		ddddddd.add('d0','d','Methanosarcina acetivorans (strain ATCC 35395 / DSM 2834 / JCM 12185 / C2A)','Result.php?type=Browse&Species=Methanosarcina acetivorans (strain ATCC 35395 / DSM 2834 / JCM 12185 / C2A)&page=1');
		ddddddd.add('d1','d','Methanosarcina mazei (strain ATCC BAA-159 / DSM 3647 / Goe1 / Go1 / JCM 11833 / OCM 88) (Methanosarcina frisia)','Result.php?type=Browse&Species=Methanosarcina mazei (strain ATCC BAA-159 / DSM 3647 / Goe1 / Go1 / JCM 11833 / OCM 88) (Methanosarcina frisia)&page=1');
		
		ddddddd.add('e',1,'Pyrococcus','Result.php?type=Browse&Species=Pyrococcus&page=1');  
		ddddddd.add('e0','e','Pyrococcus furiosus (strain ATCC 43587 / DSM 3638 / JCM 8422 / Vc1)','Result.php?type=Browse&Species=Pyrococcus furiosus (strain ATCC 43587 / DSM 3638 / JCM 8422 / Vc1)&page=1');
		ddddddd.add('e1','e','Pyrococcus horikoshii (strain ATCC 700860 / DSM 12428 / JCM 9974 / NBRC 100139 / OT-3)','Result.php?type=Browse&Species=Pyrococcus horikoshii (strain ATCC 700860 / DSM 12428 / JCM 9974 / NBRC 100139 / OT-3)&page=1');
		
          
        //文件夹节点链接不起作用  
        ddddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        ddddddd.config.useCookies=false;  
        //不使用连接线  
        ddddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        ddddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        ddddddd.config.useStatusText=true;  
        ddddddd.config.inOrder=true;  
        document.write(ddddddd);  
  
        //-->  
    </script> 
</div>
		<div>  
			<hr/>
		</div>
		
<div id="dtree6" style="border:">
		<p><a href="javascript: dddddd.openAll();">Open all</a> | <a href="javascript: dddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		dddddd = new dTree('dddddd');
        dddddd.add(0,-1,'Deinococcus-Thermus');  
        //节点打开 
        dddddd.add(1,0,'<strong>Deinococcus-Thermus</strong>','','','','','',true);
		
        dddddd.add('a',1,'Deinococcus radiodurans','Result.php?type=Browse&Species=Deinococcus radiodurans&page=1');  
		dddddd.add('a0','a','Deinococcus radiodurans (strain ATCC 13939 / DSM 20539 / JCM 16871 / LMG 4051 / NBRC 15346 / NCIMB 9279 / R1 / VKM B-1422)','Result.php?type=Browse&Species=Deinococcus radiodurans (strain ATCC 13939 / DSM 20539 / JCM 16871 / LMG 4051 / NBRC 15346 / NCIMB 9279 / R1 / VKM B-1422)&page=1');
		
		dddddd.add('b',1,'Meiothermus cateniformans','Result.php?type=Browse&Species=Meiothermus cateniformans&page=1');  
		dddddd.add('b0','b','Meiothermus cateniformans','Result.php?type=Browse&Species=Meiothermus cateniformans&page=1');
		
		dddddd.add('c',1,'Thermus thermophilus','Result.php?type=Browse&Species=Thermus thermophilus&page=1');  
		dddddd.add('c0','c','Thermus thermophilus (strain HB27 / ATCC BAA-163 / DSM 7039)','Result.php?type=Browse&Species=Thermus thermophilus (strain HB27 / ATCC BAA-163 / DSM 7039)&page=1');
		dddddd.add('c1','c','Thermus thermophilus (strain HB8 / ATCC 27634 / DSM 579)','Result.php?type=Browse&Species=Thermus thermophilus (strain HB8 / ATCC 27634 / DSM 579)&page=1');
		
          
        //文件夹节点链接不起作用  
        dddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        dddddd.config.useCookies=false;  
        //不使用连接线  
        dddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        dddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        dddddd.config.useStatusText=true;  
        dddddd.config.inOrder=true;  
        document.write(dddddd);  
  
        //-->  
    </script> 
</div>
		<div>  
			<hr/>
		</div>
		
<div id="dtree5" style="border:">
		<p><a href="javascript: ddddd.openAll();">Open all</a> | <a href="javascript: ddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		ddddd = new dTree('ddddd');
        ddddd.add(0,-1,'Cyanobacteria');  
        //节点打开 
        ddddd.add(1,0,'<strong>Cyanobacteria</strong>','','','','','',true);
		
        ddddd.add('a',1,'Arthrospira platensis','Result.php?type=Browse&Species=Arthrospira platensis&page=1');  
		ddddd.add('a0','a','Arthrospira platensis C1','Result.php?type=Browse&Species=Arthrospira platensis C1&page=1');
		
		ddddd.add('b',1,'Microchaete diplosiphon','Result.php?type=Browse&Species=Microchaete diplosiphon&page=1');  
		ddddd.add('b0','b','Microchaete diplosiphon (Fremyella diplosiphon)','Result.php?type=Browse&Species=Microchaete diplosiphon (Fremyella diplosiphon)&page=1');
		
		ddddd.add('c',1,'Synechococcus','Result.php?type=Browse&Species=Synechococcus&page=1');  
		ddddd.add('c0','c','Synechococcus elongatus (strain PCC 7942) (Anacystis nidulans R2)','Result.php?type=Browse&Species=Synechococcus elongatus (strain PCC 7942) (Anacystis nidulans R2)&page=1');
		ddddd.add('c1','c','Synechococcus sp. (strain ATCC 27264 / PCC 7002 / PR-6) (Agmenellum quadruplicatum)','Result.php?type=Browse&Species=Synechococcus sp. (strain ATCC 27264 / PCC 7002 / PR-6) (Agmenellum quadruplicatum)&page=1');
		
		ddddd.add('d',1,'Synechocystis','Result.php?type=Browse&Species=Synechocystis&page=1');  
		ddddd.add('d0','d','Synechocystis sp. (strain PCC 6803 / Kazusa)','Result.php?type=Browse&Species=Synechocystis sp. (strain PCC 6803 / Kazusa)&page=1');
          
        //文件夹节点链接不起作用  
        ddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        ddddd.config.useCookies=false;  
        //不使用连接线  
        ddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        ddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        ddddd.config.useStatusText=true;  
        ddddd.config.inOrder=true;  
        document.write(ddddd);  
  
        //-->  
    </script> 
</div>
		<div>  
			<hr/>
		</div>
		
<div id="dtree4" style="border:">
		<p><a href="javascript: dddd.openAll();">Open all</a> | <a href="javascript: dddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		dddd = new dTree('dddd');
        dddd.add(0,-1,'Crenarchaeota');  
        //节点打开 
        dddd.add(1,0,'<strong>Crenarchaeota</strong>','','','','','',true);
		
        dddd.add('a',1,'Pyrobaculum aerophilum','Result.php?type=Browse&Species=Pyrobaculum aerophilum&page=1');  
		dddd.add('a0','a','Pyrobaculum aerophilum (strain ATCC 51768 / IM2 / DSM 7523 / JCM 9630 / NBRC 100827)','Result.php?type=Browse&Species=Pyrobaculum aerophilum (strain ATCC 51768 / IM2 / DSM 7523 / JCM 9630 / NBRC 100827)&page=1');
		
		dddd.add('b',1,'Saccharolobus solfataricus','Result.php?type=Browse&Species=Saccharolobus solfataricus&page=1');  
		dddd.add('b0','b','Saccharolobus solfataricus (strain ATCC 35092 / DSM 1617 / JCM 11322 / P2) (Sulfolobus solfataricus)','Result.php?type=Browse&Species=Saccharolobus solfataricus (strain ATCC 35092 / DSM 1617 / JCM 11322 / P2) (Sulfolobus solfataricus)&page=1');
		
		dddd.add('c',1,'Sulfolobus acidocaldarius','Result.php?type=Browse&Species=Sulfolobus acidocaldarius&page=1');  
		dddd.add('c0','c','Sulfolobus acidocaldarius (strain ATCC 33909 / DSM 639 / JCM 8929 / NBRC 15157 / NCIMB 11770)','Result.php?type=Browse&Species=Sulfolobus acidocaldarius (strain ATCC 33909 / DSM 639 / JCM 8929 / NBRC 15157 / NCIMB 11770)&page=1');
          
        //文件夹节点链接不起作用  
        dddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        dddd.config.useCookies=false;  
        //不使用连接线  
        dddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        dddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        dddd.config.useStatusText=true;  
        dddd.config.inOrder=true;  
        document.write(dddd);  
  
        //-->  
    </script> 
</div>

		<div>  
			<hr/>
		</div>

		
<div id="dtree2" style="border:">
		<p><a href="javascript: dd.openAll();">Open all</a> | <a href="javascript: dd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		dd = new dTree('dd');
        dd.add(0,-1,'Bacteroidetes');  
        //节点打开 
        dd.add(1,0,'<strong>Bacteroidetes</strong>','','','','','',true);
		
        dd.add('a',1,'Riemerella anatipestifer','Result.php?type=Browse&Species=Riemerella anatipestifer&page=1');  
		dd.add('a0','a','Riemerella anatipestifer RA-CH-1','Result.php?type=Browse&Species=Riemerella anatipestifer RA-CH-1&page=1');
          
        //文件夹节点链接不起作用  
        dd.config.folderLinks=false;  
        //不使用cookies记录状态  
        dd.config.useCookies=false;  
        //不使用连接线  
        dd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        dd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        dd.config.useStatusText=true;  
        dd.config.inOrder=true;  
        document.write(dd);  
  
        //-->  
    </script> 
</div>

		<div>  
			<hr/>
		</div>
		
<div id="dtree3" style="border:">
		<p><a href="javascript: ddd.openAll();">Open all</a> | <a href="javascript: ddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		ddd = new dTree('ddd');
        ddd.add(0,-1,'Chlamydiae');  
        //节点打开 
        ddd.add(1,0,'<strong>Chlamydiae</strong>','','','','','',true);
		
        ddd.add('a',1,'Chlamydia trachomatis','Result.php?type=Browse&Species=Chlamydia trachomatis&page=1');  
		ddd.add('a0','a','Chlamydia trachomatis','Result.php?type=Browse&Species=Chlamydia trachomatis&page=1');
          
        //文件夹节点链接不起作用  
        ddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        ddd.config.useCookies=false;  
        //不使用连接线  
        ddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        ddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        ddd.config.useStatusText=true;  
        ddd.config.inOrder=true;  
        document.write(ddd);  
  
        //-->  
    </script> 
</div>

		<div>  
			<hr/>
		</div>


<div id="dtree10" style="border:">
		<p><a href="javascript: dddddddddd.openAll();">Open all</a> | <a href="javascript: dddddddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		dddddddddd = new dTree('dddddddddd');
        dddddddddd.add(0,-1,'Spirochaetes');  
        //节点打开 
        dddddddddd.add(1,0,'<strong>Spirochaetes</strong>','','','','','',true);
		
        dddddddddd.add('a',1,'Leptospira interrogans','Result.php?type=Browse&Species=Leptospira interrogans&page=1');  
		dddddddddd.add('a0','a','Leptospira interrogans serogroup Icterohaemorrhagiae serovar Lai (strain 56601)','Result.php?type=Browse&Species=Leptospira interrogans serogroup Icterohaemorrhagiae serovar Lai (strain 56601)&page=1');
		dddddddddd.add('a1','a','Leptospira interrogans serovar Australis str. 200703203','Result.php?type=Browse&Species=Leptospira interrogans serovar Australis str. 200703203&page=1');
		dddddddddd.add('a2','a','Leptospira interrogans serovar Bataviae str. L1111','Result.php?type=Browse&Species=Leptospira interrogans serovar Bataviae str. L1111&page=1');
		dddddddddd.add('a3','a','Leptospira interrogans str. UI 12758','Result.php?type=Browse&Species=Leptospira interrogans str. UI 12758&page=1');
		
          
        //文件夹节点链接不起作用  
        dddddddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        dddddddddd.config.useCookies=false;  
        //不使用连接线  
        dddddddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        dddddddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        dddddddddd.config.useStatusText=true;  
        dddddddddd.config.inOrder=true;  
        document.write(dddddddddd);  
  
        //-->  
    </script> 
</div>
		<div>  
			<hr/>
		</div>

<div id="dtree11" style="border:">
		<p><a href="javascript: ddddddddddd.openAll();">Open all</a> | <a href="javascript: ddddddddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		ddddddddddd = new dTree('ddddddddddd');
        ddddddddddd.add(0,-1,'Tenericutes');  
        //节点打开 
        ddddddddddd.add(1,0,'<strong>Tenericutes</strong>','','','','','',true);
		
        ddddddddddd.add('a',1,'Mycoplasma','Result.php?type=Browse&Species=Mycoplasma&page=1');  
		ddddddddddd.add('a0','a','Mycoplasma capricolum subsp. capricolum (strain California kid / ATCC 27343 / NCTC 10154)','Result.php?type=Browse&Species=Mycoplasma capricolum subsp. capricolum (strain California kid / ATCC 27343 / NCTC 10154)&page=1');
		ddddddddddd.add('a1','a','Mycoplasma genitalium (strain ATCC 33530 / G-37 / NCTC 10195)','Result.php?type=Browse&Species=Mycoplasma genitalium (strain ATCC 33530 / G-37 / NCTC 10195)&page=1');
		ddddddddddd.add('a2','a','Mycoplasma pneumoniae (strain ATCC 29342 / M129)','Result.php?type=Browse&Species=Mycoplasma pneumoniae (strain ATCC 29342 / M129)&page=1');
		
          
        //文件夹节点链接不起作用  
        ddddddddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        ddddddddddd.config.useCookies=false;  
        //不使用连接线  
        ddddddddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        ddddddddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        ddddddddddd.config.useStatusText=true;  
        ddddddddddd.config.inOrder=true;  
        document.write(ddddddddddd);  
  
        //-->  
    </script> 
</div>
		<div>  
			<hr/>
		</div>

<div id="dtree12" style="border:">
		<p><a href="javascript: dddddddddddd.openAll();">Open all</a> | <a href="javascript: dddddddddddd.closeAll();">Close all</a></p>
		<script type="text/javascript">
		dddddddddddd = new dTree('dddddddddddd');
        dddddddddddd.add(0,-1,'Thermotogae');  
        //节点打开 
        dddddddddddd.add(1,0,'<strong>Thermotogae</strong>','','','','','',true);
		
        dddddddddddd.add('a',1,'Thermotoga maritima','Result.php?type=Browse&Species=Thermotoga maritima&page=1');  
		dddddddddddd.add('a0','a','Thermotoga maritima (strain ATCC 43589 / MSB8 / DSM 3109 / JCM 10099)','Result.php?type=Browse&Species=Thermotoga maritima (strain ATCC 43589 / MSB8 / DSM 3109 / JCM 10099)&page=1');
		
          
        //文件夹节点链接不起作用  
        dddddddddddd.config.folderLinks=false;  
        //不使用cookies记录状态  
        dddddddddddd.config.useCookies=false;  
        //不使用连接线  
        dddddddddddd.config.useLines=false;  
        //不适用icon,如果此项设置为false,文件夹和自定义的icon图片都不能使用了。  
        dddddddddddd.config.useIcons=true;  
        //设置为true，当在有超链接的节点node时，状态栏显示的是节点名称而不是url地址  
        dddddddddddd.config.useStatusText=true;  
        dddddddddddd.config.inOrder=true;  
        document.write(dddddddddddd);  
  
        //-->  
    </script> 
</div>

<br/>
					<h3 class="section1">&#8251; Browse by residue types</h3>
					<hr id='hr1'  align='center' width='95%' size='1'/>
						<table id='residue'>
							<tbody>
									<tr>
										<td>
											<!--<img width="270" src="images/Modify_Residue.png" border="0" align="center" usemap="#typesmap">-->
											<a href="Result.php?type=Browse1&Residue=S&page=1" title='Serine'><img  src="images/Modify_Residue.s.png" border="0" align="center"></a>
											<a href="Result.php?type=Browse1&Residue=Y&page=1" title='Tyrosine'><img  src="images/Modify_Residue.y.png" border="0" align="center"></a>
											<a href="Result.php?type=Browse1&Residue=D&page=1" title='Aspartic acid'><img  src="images/Modify_Residue.d.png" border="0" align="center"></a>
											<a href="Result.php?type=Browse1&Residue=H&page=1" title='Histidine'><img  src="images/Modify_Residue.h.png" border="0" align="center"></a>
											<br/>
											<a href="Result.php?type=Browse1&Residue=T&page=1" title='Threonine'><img  src="images/Modify_Residue.t.png" border="0" align="center"></a>
											<a id='Arg' href="Result.php?type=Browse1&Residue=R&page=1" title='Arginine'><img  src="images/Modify_Residue.r.png" border="0" align="center"></a>
											<a id='Cys' href="Result.php?type=Browse1&Residue=C&page=1" title='Cysteine'><img  src="images/Modify_Residue.c.png" border="0" align="center"></a>
											
											
										</td>
									</tr>
								</tbody>
						</table>
						<map name="typesmap" id="typesmap">
							<area shape="rect" coords="11,8,120,67" href="Result.php?type=Browse1&Residue=S&page=1" title='Serine'/>
							<area shape="rect" coords="143,6,253,70" href="Result.php?type=Browse1&Residue=Y&page=1" title='Tyrosine'/>
							<area shape="rect" coords="9,117,124,179" href="Result.php?type=Browse1&Residue=T&page=1" title='Threonine'/>
							<area shape="rect" coords="140,116,255,184" href="Result.php?type=Browse1&Residue=R&page=1" title='Arginine'/>
							<area shape="rect" coords="9,229,120,293" href="Result.php?type=Browse1&Residue=D&page=1" title='Aspartic acid'/>
							<area shape="rect" coords="144,231,253,288" href="Result.php?type=Browse1&Residue=H&page=1" title='Histidine'/>
							<area shape="rect" coords="11,337,254,400" href="Result.php?type=Browse1&Residue=C&page=1" title='Cysteine'/>
						</map>
<br/>
					<p><a id='top' href='#'>&nbsp;&nbsp;&#9650;Top</p>

</div>
</div>
</div>
</div>
  
</body>  
  
</html>  	