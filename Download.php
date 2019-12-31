<?php require("common/head.php"); ?>
<style>
	/*#tit{background-color:#fff;}*/
	 #tit a:link, #tit a:visited {font-family:Arial,sans-serif,"Open Sans"; text-decoration: none;border-bottom:#F5F5F5 dotted 0px;font-size:22px;color:rgba(103,108,127,1)}
	 #tit a:hover,#tit a:active{font-family:Arial,sans-serif,"Open Sans"; text-decoration: none;color:#963C64;border-bottom:#963C64 solid 1px;font-size:22px;}
	p.tit1{font-family:Arial,sans-serif,"Open Sans"; font-size: 21px; line-height: 21px;}
	p.des {font-family:Arial,sans-serif,"Open Sans"; font-size: 18px; line-height: 21px;}
	
	ul{margin-block-start:10px;margin-block-end:10px;}
	.Proteobacteriahiden, .Euryarchaeotahiden, .Actinobacteriahiden, .Firmicuteshiden, .Functionhiden, .Genomehiden, .Domainhiden, .Interactionhiden, .Orthologoushiden{margin-block-start:0px;margin-block-end:0px;display:none;}
	
	th{text-align:left; width:800px;vertical-align:top;padding-top:10px;border-bottom: 2px dashed rgba(202, 135, 153, 0.4);}
	#Species{font-style:italic;width: 1050px;}
	
	#Species,#annodown {
    border: 2px dashed rgba(202, 135, 153, 0.4);
    border-radius: 7px;
    margin-left: 30px;
    background-color: rgba(255, 255, 255, 0.4);
	border-spacing:0px;
}
	.phy{color: rgba(103,108,127,1); font-family: Arial,"Open Sans",sans-serif; font-size: 18px;}
	.res{color: rgba(103,108,127,1); font-family: Arial,"Open Sans",sans-serif; font-size: 18px;font-style:normal;}
	ul { font-size: 15px;line-height:25px;}
	a.resdw:link{font-style:normal;}
	th.sedtit{text-align:center;border-bottom: 0px dotted #820336;font-size:21px;color:;font-style:normal;line-height:30px;background-color:rgba(0, 143, 149, 0.1);padding-top:8px;padding-bottom:8px;}
	
	#annodown{width:1050px; text-align:center;}
	#annodown th{width:800px; }
	#hr1{
		text-align: center;
		width: 95%;
		height: 3px;
		border: none;
		border-top: 1px solid #820336;
		border-bottom: 1px dashed #820336;
		margin-bottom:25px;
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
p font{color: #963C64;}

img{vertical-align:middle;}
a#pot:link, a#pot:visited,a#pot:hover, a#pot:active{font-weight:bold;font-size:16px;}
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
				<div id="search">
					<br />
					<h3 class="section section1">&#8251; Download</h3>
					<hr id='hr1'  align='center' width='95%' size='1'/>
					
					
					
					<p id='tit' style='font-weight:bold; font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<img src='images/down/1.png' width='27px' height='24px'/>&nbsp;<a class='12' href='#1'>Phosphorylation data</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/down/1.png' width='27px' height='24px'/>&nbsp;<a class='12' href='#2'>Integrated resources</a></p>
					<hr id='hr2' />
					
					<p id='1' class='tit1'><strong>Phosphorylation data</strong> (<img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Total.txt' download='Total.txt'><strong>Total</strong></a>):</p>
					<p class='des'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All the <strong>phosphorylation sites</strong> and <strong>reference sequences</strong> of phosphorylated proteins can be downloaded for each organism.</p>
					
					<table id='Species' >
					
					<tr><th id='4' class='sedtit' colspan=2>Phylum-type</th></tr>
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Actinobacteria</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Amycolatopsis mediterranei (Nocardia mediterranei).txt' download='Amycolatopsis mediterranei (Nocardia mediterranei).txt'>Amycolatopsis mediterranei (Nocardia mediterranei)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Corynebacterium glutamicum (Brevibacterium saccharolyticum).txt' download='Corynebacterium glutamicum (Brevibacterium saccharolyticum).txt'>Corynebacterium glutamicum (Brevibacterium saccharolyticum)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Corynebacterium glutamicum (strain ATCC 13032 - DSM 20300 - JCM 1318 - LMG 3730 - NCIMB 10025).txt' download='Corynebacterium glutamicum (strain ATCC 13032 - DSM 20300 - JCM 1318 - LMG 3730 - NCIMB 10025).txt'>Corynebacterium glutamicum (strain ATCC 13032/DSM 20300/JCM 1318/LMG 3730/NCIMB 10025)</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Actinobacteria' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Actinobacteriahiden'>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Corynebacterium glutamicum ATCC 14067.txt' download='Corynebacterium glutamicum ATCC 14067.txt'>Corynebacterium glutamicum ATCC 14067</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium bovis (strain ATCC BAA-935 - AF2122-97).txt' download='Mycobacterium bovis (strain ATCC BAA-935 - AF2122-97).txt'>Mycobacterium bovis (strain ATCC BAA-935/AF2122-97)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium bovis (strain BCG - Pasteur 1173P2).txt' download='Mycobacterium bovis (strain BCG - Pasteur 1173P2).txt'>Mycobacterium bovis (strain BCG/Pasteur 1173P2)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium leprae (strain TN).txt' download='Mycobacterium leprae (strain TN).txt'>Mycobacterium leprae (strain TN)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium smegmatis (strain ATCC 700084 - mc(2)155).txt' download='Mycobacterium smegmatis (strain ATCC 700084 - mc(2)155).txt'>Mycobacterium smegmatis (strain ATCC 700084/mc(2)155)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium tuberculosis (strain ATCC 25177 - H37Ra).txt' download='Mycobacterium tuberculosis (strain ATCC 25177 - H37Ra).txt'>Mycobacterium tuberculosis (strain ATCC 25177/H37Ra)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium tuberculosis (strain ATCC 25618 - H37Rv).txt' download='Mycobacterium tuberculosis (strain ATCC 25618 - H37Rv).txt'>Mycobacterium tuberculosis (strain ATCC 25618/H37Rv)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium tuberculosis (strain CDC 1551 - Oshkosh).txt' download='Mycobacterium tuberculosis (strain CDC 1551 - Oshkosh).txt'>Mycobacterium tuberculosis (strain CDC 1551/Oshkosh)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Mycobacterium ulcerans (strain Agy99).txt' download='Mycobacterium ulcerans (strain Agy99).txt'>Mycobacterium ulcerans (strain Agy99)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Nocardia iowensis.txt' download='Nocardia iowensis.txt'>Nocardia iowensis</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Saccharopolyspora erythraea (strain ATCC 11635 - DSM 40517 - JCM 4748 - NBRC 13426 - NCIMB 8594 - NRRL 2338).txt' download='Saccharopolyspora erythraea (strain ATCC 11635 - DSM 40517 - JCM 4748 - NBRC 13426 - NCIMB 8594 - NRRL 2338).txt'>Saccharopolyspora erythraea (strain ATCC 11635/DSM 40517/JCM 4748/NBRC 13426/NCIMB 8594/NRRL 2338)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Streptomyces coelicolor (strain ATCC BAA-471 - A3(2) - M145).txt' download='Streptomyces coelicolor (strain ATCC BAA-471 - A3(2) - M145).txt'>Streptomyces coelicolor (strain ATCC BAA-471/A3(2)/M145)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Streptomyces coelicolor.txt' download='Streptomyces coelicolor.txt'>Streptomyces coelicolor</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Streptomyces reticuli.txt' download='Streptomyces reticuli.txt'>Streptomyces reticuli</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Actinobacteria/Streptomyces venezuelae.txt' download='Streptomyces venezuelae.txt'>Streptomyces venezuelae</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='phy'>Firmicutes</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Aneurinibacillus migulanus (Bacillus migulanus).txt' download='Aneurinibacillus migulanus (Bacillus migulanus).txt'>Aneurinibacillus migulanus (Bacillus migulanus)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Bacillus anthracis.txt' download='Bacillus anthracis.txt'>Bacillus anthracis</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Bacillus licheniformis.txt' download='Bacillus licheniformis.txt'>Bacillus licheniformis</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Firmicutes' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Firmicuteshiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Bacillus megaterium.txt' download='Bacillus megaterium.txt'>Bacillus megaterium</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Bacillus subtilis (strain 168).txt' download='Bacillus subtilis (strain 168).txt'>Bacillus subtilis (strain 168)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Bacillus thuringiensis subsp. israelensis.txt' download='Bacillus thuringiensis subsp. israelensis.txt'>Bacillus thuringiensis subsp. israelensis</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Bacillus velezensis (strain DSM 23117 - BGSC 10A6 - FZB42) (Bacillus amyloliquefaciens subsp. plantarum).txt' download='Bacillus velezensis (strain DSM 23117 - BGSC 10A6 - FZB42) (Bacillus amyloliquefaciens subsp. plantarum).txt'>Bacillus velezensis (strain DSM 23117 / BGSC 10A6 / FZB42) (Bacillus amyloliquefaciens subsp. plantarum)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Brevibacillus parabrevis.txt' download='Brevibacillus parabrevis.txt'>Brevibacillus parabrevis</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Caldanaerobacter subterraneus subsp. tengcongensis (strain DSM 15242 - JCM 11007 - NBRC 100824 - MB4) (Thermoanaerobacter tengcongensis).txt' download='Caldanaerobacter subterraneus subsp. tengcongensis (strain DSM 15242 - JCM 11007 - NBRC 100824 - MB4) (Thermoanaerobacter tengcongensis).txt'>Caldanaerobacter subterraneus subsp. tengcongensis (strain DSM 15242 / JCM 11007 / NBRC 100824 / MB4) (Thermoanaerobacter tengcongensis)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Clostridium acetobutylicum (strain ATCC 824 - DSM 792 - JCM 1419 - LMG 5710 - VKM B-1787).txt' download='Clostridium acetobutylicum (strain ATCC 824 - DSM 792 - JCM 1419 - LMG 5710 - VKM B-1787).txt'>Clostridium acetobutylicum (strain ATCC 824 / DSM 792 / JCM 1419 / LMG 5710 / VKM B-1787)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Enterococcus casseliflavus (Enterococcus flavescens).txt' download='Enterococcus casseliflavus (Enterococcus flavescens).txt'>Enterococcus casseliflavus (Enterococcus flavescens)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Enterococcus faecalis (strain ATCC 700802 - V583).txt' download='Enterococcus faecalis (strain ATCC 700802 - V583).txt'>Enterococcus faecalis (strain ATCC 700802 / V583)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Geobacillus stearothermophilus (Bacillus stearothermophilus).txt' download='Geobacillus stearothermophilus (Bacillus stearothermophilus).txt'>Geobacillus stearothermophilus (Bacillus stearothermophilus)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactobacillus casei.txt' download='Lactobacillus casei.txt'>Lactobacillus casei</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactobacillus rhamnosus DSM 14870.txt' download='Lactobacillus rhamnosus DSM 14870.txt'>Lactobacillus rhamnosus DSM 14870</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactobacillus rhamnosus.txt' download='Lactobacillus rhamnosus.txt'>Lactobacillus rhamnosus</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactococcus lactis subsp. cremoris (strain MG1363).txt' download='Lactococcus lactis subsp. cremoris (strain MG1363).txt'>Lactococcus lactis subsp. cremoris (strain MG1363)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactococcus lactis subsp. cremoris (strain SK11).txt' download='Lactococcus lactis subsp. cremoris (strain SK11).txt'>Lactococcus lactis subsp. cremoris (strain SK11)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactococcus lactis subsp. lactis (strain IL1403) (Streptococcus lactis).txt' download='Lactococcus lactis subsp. lactis (strain IL1403) (Streptococcus lactis).txt'>Lactococcus lactis subsp. lactis (strain IL1403) (Streptococcus lactis)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactococcus lactis subsp. lactis (strain KF147).txt' download='Lactococcus lactis subsp. lactis (strain KF147).txt'>Lactococcus lactis subsp. lactis (strain KF147)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lactococcus lactis subsp. lactis (Streptococcus lactis).txt' download='Lactococcus lactis subsp. lactis (Streptococcus lactis).txt'>Lactococcus lactis subsp. lactis (Streptococcus lactis)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria innocua serovar 6a (strain ATCC BAA-680 - CLIP 11262).txt' download='Listeria innocua serovar 6a (strain ATCC BAA-680 - CLIP 11262).txt'>Listeria innocua serovar 6a (strain ATCC BAA-680 / CLIP 11262)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes FSL F2-208.txt' download='Listeria monocytogenes FSL F2-208.txt'>Listeria monocytogenes FSL F2-208</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes serotype 1-2a (strain 10403S).txt' download='Listeria monocytogenes serotype 1-2a (strain 10403S).txt'>Listeria monocytogenes serotype 1-2a (strain 10403S)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes serotype 4a (strain HCC23).txt' download='Listeria monocytogenes serotype 4a (strain HCC23).txt'>Listeria monocytogenes serotype 4a (strain HCC23)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes serotype 4a (strain M7).txt' download='Listeria monocytogenes serotype 4a (strain M7).txt'>Listeria monocytogenes serotype 4a (strain M7)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes serotype 4b (strain CLIP80459).txt' download='Listeria monocytogenes serotype 4b (strain CLIP80459).txt'>Listeria monocytogenes serotype 4b (strain CLIP80459)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes serotype 4b str. LL195.txt' download='Listeria monocytogenes serotype 4b str. LL195.txt'>Listeria monocytogenes serotype 4b str. LL195</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes serovar 1-2a (strain ATCC BAA-679 - EGD-e).txt' download='Listeria monocytogenes serovar 1-2a (strain ATCC BAA-679 - EGD-e).txt'>Listeria monocytogenes serovar 1-2a (strain ATCC BAA-679 / EGD-e)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria monocytogenes.txt' download='Listeria monocytogenes.txt'>Listeria monocytogenes</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Listeria welshimeri serovar 6b (strain ATCC 35897 - DSM 20650 - SLCC5334).txt' download='Listeria welshimeri serovar 6b (strain ATCC 35897 - DSM 20650 - SLCC5334).txt'>Listeria welshimeri serovar 6b (strain ATCC 35897 / DSM 20650 / SLCC5334)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Lysinibacillus sphaericus (Bacillus sphaericus).txt' download='Lysinibacillus sphaericus (Bacillus sphaericus).txt'>Lysinibacillus sphaericus (Bacillus sphaericus)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Moorella thermoacetica (strain ATCC 39073 - JCM 9320).txt' download='Moorella thermoacetica (strain ATCC 39073 - JCM 9320).txt'>Moorella thermoacetica (strain ATCC 39073 / JCM 9320)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Oenococcus oeni (strain ATCC BAA-331 - PSU-1).txt' download='Oenococcus oeni (strain ATCC BAA-331 - PSU-1).txt'>Oenococcus oeni (strain ATCC BAA-331 / PSU-1)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus aureus (strain COL).txt' download='Staphylococcus aureus (strain COL).txt'>Staphylococcus aureus (strain COL)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus aureus (strain Mu3 - ATCC 700698).txt' download='Staphylococcus aureus (strain Mu3 - ATCC 700698).txt'>Staphylococcus aureus (strain Mu3 / ATCC 700698)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus aureus (strain N315).txt' download='Staphylococcus aureus (strain N315).txt'>Staphylococcus aureus (strain N315)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus aureus (strain NCTC 8325).txt' download='Staphylococcus aureus (strain NCTC 8325).txt'>Staphylococcus aureus (strain NCTC 8325)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus aureus (strain Newman).txt' download='Staphylococcus aureus (strain Newman).txt'>Staphylococcus aureus (strain Newman)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus aureus (strain USA300).txt' download='Staphylococcus aureus (strain USA300).txt'>Staphylococcus aureus (strain USA300)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus aureus.txt' download='Staphylococcus aureus.txt'>Staphylococcus aureus</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus carnosus (strain TM300).txt' download='Staphylococcus carnosus (strain TM300).txt'>Staphylococcus carnosus (strain TM300)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus carnosus.txt' download='Staphylococcus carnosus.txt'>Staphylococcus carnosus</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Staphylococcus xylosus.txt' download='Staphylococcus xylosus.txt'>Staphylococcus xylosus</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus agalactiae FSL S3-277.txt' download='Streptococcus agalactiae FSL S3-277.txt'>Streptococcus agalactiae FSL S3-277</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus agalactiae serogroup III.txt' download='Streptococcus agalactiae serogroup III.txt'>Streptococcus agalactiae serogroup III</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus agalactiae serotype Ia (strain ATCC 27591 - A909 - CDC SS700).txt' download='Streptococcus agalactiae serotype Ia (strain ATCC 27591 - A909 - CDC SS700).txt'>Streptococcus agalactiae serotype Ia (strain ATCC 27591 / A909 / CDC SS700)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus agalactiae serotype III (strain NEM316).txt' download='Streptococcus agalactiae serotype III (strain NEM316).txt'>Streptococcus agalactiae serotype III (strain NEM316)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus agalactiae serotype V (strain ATCC BAA-611 - 2603 V-R).txt' download='Streptococcus agalactiae serotype V (strain ATCC BAA-611 - 2603 V-R).txt'>Streptococcus agalactiae serotype V (strain ATCC BAA-611 / 2603 V-R)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus agalactiae.txt' download='Streptococcus agalactiae.txt'>Streptococcus agalactiae</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus equinus (Streptococcus bovis).txt' download='Streptococcus equinus (Streptococcus bovis).txt'>Streptococcus equinus (Streptococcus bovis)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus mutans serotype c (strain ATCC 700610 - UA159).txt' download='Streptococcus mutans serotype c (strain ATCC 700610 - UA159).txt'>Streptococcus mutans serotype c (strain ATCC 700610 / UA159)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus pneumoniae (strain ATCC BAA-255 - R6).txt' download='Streptococcus pneumoniae (strain ATCC BAA-255 - R6).txt'>Streptococcus pneumoniae (strain ATCC BAA-255 / R6)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus pneumoniae serotype 2 (strain D39 - NCTC 7466).txt' download='Streptococcus pneumoniae serotype 2 (strain D39 - NCTC 7466).txt'>Streptococcus pneumoniae serotype 2 (strain D39 / NCTC 7466)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus pneumoniae serotype 4 (strain ATCC BAA-334 - TIGR4).txt' download='Streptococcus pneumoniae serotype 4 (strain ATCC BAA-334 - TIGR4).txt'>Streptococcus pneumoniae serotype 4 (strain ATCC BAA-334 / TIGR4)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus pyogenes.txt' download='Streptococcus pyogenes.txt'>Streptococcus pyogenes</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus salivarius.txt' download='Streptococcus salivarius.txt'>Streptococcus salivarius</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus suis (strain 05ZYH33).txt' download='Streptococcus suis (strain 05ZYH33).txt'>Streptococcus suis (strain 05ZYH33)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus suis (strain 98HAH33).txt' download='Streptococcus suis (strain 98HAH33).txt'>Streptococcus suis (strain 98HAH33)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus suis 6407.txt' download='Streptococcus suis 6407.txt'>Streptococcus suis 6407</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus suis T15.txt' download='Streptococcus suis T15.txt'>Streptococcus suis T15</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Firmicutes/Streptococcus suis.txt' download='Streptococcus suis.txt'>Streptococcus suis</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='phy'>Euryarchaeota</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Archaeoglobus fulgidus (strain ATCC 49558 - VC-16 - DSM 4304 - JCM 9628 - NBRC 100126).txt' download='Archaeoglobus fulgidus (strain ATCC 49558 - VC-16 - DSM 4304 - JCM 9628 - NBRC 100126).txt'>Archaeoglobus fulgidus (strain ATCC 49558 / VC-16 / DSM 4304 / JCM 9628 / NBRC 100126)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Halobacterium salinarum (strain ATCC 29341 - DSM 671 - R1).txt' download='Halobacterium salinarum (strain ATCC 29341 - DSM 671 - R1).txt'>Halobacterium salinarum (strain ATCC 29341 / DSM 671 / R1)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Haloferax volcanii (strain ATCC 29605 - DSM 3757 - JCM 8879 - NBRC 14742 - NCIMB 2012 - VKM B-1768 - DS2) (Halobacterium volcanii).txt' download='Haloferax volcanii (strain ATCC 29605 - DSM 3757 - JCM 8879 - NBRC 14742 - NCIMB 2012 - VKM B-1768 - DS2) (Halobacterium volcanii).txt'>Haloferax volcanii (strain ATCC 29605 / DSM 3757 / JCM 8879 / NBRC 14742 / NCIMB 2012 / VKM B-1768 / DS2) (Halobacterium volcanii)</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Euryarchaeota' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Euryarchaeotahiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Methanohalophilus mahii (strain ATCC 35705 - DSM 5219 - SLP).txt' download='Methanohalophilus mahii (strain ATCC 35705 - DSM 5219 - SLP).txt'>Methanohalophilus mahii (strain ATCC 35705 / DSM 5219 / SLP)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Methanohalophilus portucalensis FDF-1.txt' download='Methanohalophilus portucalensis FDF-1.txt'>Methanohalophilus portucalensis FDF-1</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Methanosarcina acetivorans (strain ATCC 35395 - DSM 2834 - JCM 12185 - C2A).txt' download='Methanosarcina acetivorans (strain ATCC 35395 - DSM 2834 - JCM 12185 - C2A).txt'>Methanosarcina acetivorans (strain ATCC 35395 / DSM 2834 / JCM 12185 / C2A)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Methanosarcina mazei (strain ATCC BAA-159 - DSM 3647 - Goe1 - Go1 - JCM 11833 - OCM 88) (Methanosarcina frisia).txt' download='Methanosarcina mazei (strain ATCC BAA-159 - DSM 3647 - Goe1 - Go1 - JCM 11833 - OCM 88) (Methanosarcina frisia).txt'>Methanosarcina mazei (strain ATCC BAA-159 / DSM 3647 / Goe1 / Go1 / JCM 11833 / OCM 88) (Methanosarcina frisia)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Pyrococcus furiosus (strain ATCC 43587 - DSM 3638 - JCM 8422 - Vc1).txt' download='Pyrococcus furiosus (strain ATCC 43587 - DSM 3638 - JCM 8422 - Vc1).txt'>Pyrococcus furiosus (strain ATCC 43587 / DSM 3638 / JCM 8422 / Vc1)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Euryarchaeota/Pyrococcus horikoshii (strain ATCC 700860 - DSM 12428 - JCM 9974 - NBRC 100139 - OT-3).txt' download='Pyrococcus horikoshii (strain ATCC 700860 - DSM 12428 - JCM 9974 - NBRC 100139 - OT-3).txt'>Pyrococcus horikoshii (strain ATCC 700860 / DSM 12428 / JCM 9974 / NBRC 100139 / OT-3)</a></li>
							</ul>
						</th>
						<th id='pro'>&nbsp;&#10132;&nbsp;<span class='phy'>Proteobacteria</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Acinetobacter baumannii (strain ATCC 17978 - CIP 53.77 - LMG 1025 - NCDC KC755 - 5377).txt' download='Acinetobacter baumannii (strain ATCC 17978 - CIP 53.77 - LMG 1025 - NCDC KC755 - 5377).txt'>Acinetobacter baumannii (strain ATCC 17978 / CIP 53.77 / LMG 1025 / NCDC KC755 / 5377)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Acinetobacter baumannii (strain AYE).txt' download='Acinetobacter baumannii (strain AYE).txt'>Acinetobacter baumannii (strain AYE)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Acinetobacter baumannii (strain SDF).txt' download='Acinetobacter baumannii (strain SDF).txt'>Acinetobacter baumannii (strain SDF)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Actinobacillus pleuropneumoniae serotype 7 (strain AP76).txt' download='Actinobacillus pleuropneumoniae serotype 7 (strain AP76).txt'>Actinobacillus pleuropneumoniae serotype 7 (strain AP76)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Aliivibrio fischeri (strain ATCC 700601 - ES114) (Vibrio fischeri).txt' download='Aliivibrio fischeri (strain ATCC 700601 - ES114) (Vibrio fischeri).txt'>Aliivibrio fischeri (strain ATCC 700601 / ES114) (Vibrio fischeri)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Anaeromyxobacter sp. (strain Fw109-5).txt' download='Anaeromyxobacter sp. (strain Fw109-5).txt'>Anaeromyxobacter sp. (strain Fw109-5)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Azoarcus sp. CIB.txt' download='Azoarcus sp. CIB.txt'>Azoarcus sp. CIB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Bordetella bronchiseptica (strain ATCC BAA-588 - NCTC 13252 - RB50) (Alcaligenes bronchisepticus).txt' download='Bordetella bronchiseptica (strain ATCC BAA-588 - NCTC 13252 - RB50) (Alcaligenes bronchisepticus).txt'>Bordetella bronchiseptica (strain ATCC BAA-588 / NCTC 13252 / RB50) (Alcaligenes bronchisepticus)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Bordetella pertussis (strain Tohama I - ATCC BAA-589 - NCTC 13251).txt' download='Bordetella pertussis (strain Tohama I - ATCC BAA-589 - NCTC 13251).txt'>Bordetella pertussis (strain Tohama I / ATCC BAA-589 / NCTC 13251)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Brucella abortus (strain 2308).txt' download='Brucella abortus (strain 2308).txt'>Brucella abortus (strain 2308)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Brucella abortus (strain S19).txt' download='Brucella abortus (strain S19).txt'>Brucella abortus (strain S19)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Brucella abortus biovar 1 (strain 9-941).txt' download='Brucella abortus biovar 1 (strain 9-941).txt'>Brucella abortus biovar 1 (strain 9-941)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Campylobacter jejuni subsp. jejuni serotype O--2 (strain ATCC 700819 - NCTC 11168).txt' download='Campylobacter jejuni subsp. jejuni serotype O--2 (strain ATCC 700819 - NCTC 11168).txt'>Campylobacter jejuni subsp. jejuni serotype O:2 (strain ATCC 700819 / NCTC 11168)</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Proteobacteria' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Proteobacteriahiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Campylobacter jejuni.txt' download='Campylobacter jejuni.txt'>Campylobacter jejuni</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Caulobacter vibrioides (strain ATCC 19089 - CB15) (Caulobacter crescentus).txt' download='Caulobacter vibrioides (strain ATCC 19089 - CB15) (Caulobacter crescentus).txt'>Caulobacter vibrioides (strain ATCC 19089 / CB15) (Caulobacter crescentus)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Caulobacter vibrioides (strain NA1000 - CB15N) (Caulobacter crescentus).txt' download='Caulobacter vibrioides (strain NA1000 - CB15N) (Caulobacter crescentus).txt'>Caulobacter vibrioides (strain NA1000 / CB15N) (Caulobacter crescentus)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Citrobacter koseri (strain ATCC BAA-895 - CDC 4225-83 - SGSC4696).txt' download='Citrobacter koseri (strain ATCC BAA-895 - CDC 4225-83 - SGSC4696).txt'>Citrobacter koseri (strain ATCC BAA-895 / CDC 4225-83 / SGSC4696)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Comamonas testosteroni (Pseudomonas testosteroni).txt' download='Comamonas testosteroni (Pseudomonas testosteroni).txt'>Comamonas testosteroni (Pseudomonas testosteroni)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Edwardsiella ictaluri (strain 93-146).txt' download='Edwardsiella ictaluri (strain 93-146).txt'>Edwardsiella ictaluri (strain 93-146)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Enterobacter agglomerans (Erwinia herbicola) (Pantoea agglomerans).txt' download='Enterobacter agglomerans (Erwinia herbicola) (Pantoea agglomerans).txt'>Enterobacter agglomerans (Erwinia herbicola) (Pantoea agglomerans)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Enterobacter sp. (strain 638).txt' download='Enterobacter sp. (strain 638).txt'>Enterobacter sp. (strain 638)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli (strain B - BL21-DE3).txt' download='Escherichia coli (strain B - BL21-DE3).txt'>Escherichia coli (strain B / BL21-DE3)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli (strain K12).txt' download='Escherichia coli (strain K12).txt'>Escherichia coli (strain K12)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli (strain SMS-3-5 - SECEC).txt' download='Escherichia coli (strain SMS-3-5 - SECEC).txt'>Escherichia coli (strain SMS-3-5 / SECEC)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli (strain UTI89 - UPEC).txt' download='Escherichia coli (strain UTI89 - UPEC).txt'>Escherichia coli (strain UTI89 / UPEC)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli O1--K1 - APEC.txt' download='Escherichia coli O1--K1 - APEC.txt'>Escherichia coli O1:K1 / APEC</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli O111--H- (strain 11128 - EHEC).txt' download='Escherichia coli O111--H- (strain 11128 - EHEC).txt'>Escherichia coli O111:H- (strain 11128 / EHEC)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli O127--H6 (strain E2348-69 - EPEC).txt' download='Escherichia coli O127--H6 (strain E2348-69 - EPEC).txt'>Escherichia coli O127:H6 (strain E2348-69 / EPEC)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli O139--H28 (strain E24377A - ETEC).txt' download='Escherichia coli O139--H28 (strain E24377A - ETEC).txt'>Escherichia coli O139:H28 (strain E24377A / ETEC)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli O157--H7.txt' download='Escherichia coli O157--H7.txt'>Escherichia coli O157:H7</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli O45--K1 (strain S88 - ExPEC).txt' download='Escherichia coli O45--K1 (strain S88 - ExPEC).txt'>Escherichia coli O45:K1 (strain S88 / ExPEC)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli O6--H1 (strain CFT073 - ATCC 700928 - UPEC).txt' download='Escherichia coli O6--H1 (strain CFT073 - ATCC 700928 - UPEC).txt'>Escherichia coli O6:H1 (strain CFT073 / ATCC 700928 / UPEC)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia coli.txt' download='Escherichia coli.txt'>Escherichia coli</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Escherichia fergusonii (strain ATCC 35469 - DSM 13698 - CDC 0568-73).txt' download='Escherichia fergusonii (strain ATCC 35469 - DSM 13698 - CDC 0568-73).txt'>Escherichia fergusonii (strain ATCC 35469 / DSM 13698 / CDC 0568-73)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Helicobacter pylori (strain ATCC 700392 - 26695) (Campylobacter pylori).txt' download='Helicobacter pylori (strain ATCC 700392 - 26695) (Campylobacter pylori).txt'>Helicobacter pylori (strain ATCC 700392 / 26695) (Campylobacter pylori)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella aerogenes (strain ATCC 13048 - DSM 30053 - JCM 1235 - KCTC 2190 - NBRC 13534 - NCIMB 10102 - NCTC 10006) (Enterobacter aerogenes).txt' download='Klebsiella aerogenes (strain ATCC 13048 - DSM 30053 - JCM 1235 - KCTC 2190 - NBRC 13534 - NCIMB 10102 - NCTC 10006) (Enterobacter aerogenes).txt'>Klebsiella aerogenes (strain ATCC 13048 / DSM 30053 / JCM 1235 / KCTC 2190 / NBRC 13534 / NCIMB 10102 / NCTC 10006) (Enterobacter aerogenes)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae (strain 342).txt' download='Klebsiella pneumoniae (strain 342).txt'>Klebsiella pneumoniae (strain 342)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae CG43.txt' download='Klebsiella pneumoniae CG43.txt'>Klebsiella pneumoniae CG43</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae subsp. pneumoniae (strain ATCC 700721 - MGH 78578).txt' download='Klebsiella pneumoniae subsp. pneumoniae (strain ATCC 700721 - MGH 78578).txt'>Klebsiella pneumoniae subsp. pneumoniae (strain ATCC 700721 / MGH 78578)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae subsp. pneumoniae (strain HS11286).txt' download='Klebsiella pneumoniae subsp. pneumoniae (strain HS11286).txt'>Klebsiella pneumoniae subsp. pneumoniae (strain HS11286)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae subsp. pneumoniae NTUH-K2044.txt' download='Klebsiella pneumoniae subsp. pneumoniae NTUH-K2044.txt'>Klebsiella pneumoniae subsp. pneumoniae NTUH-K2044</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae subsp. pneumoniae.txt' download='Klebsiella pneumoniae subsp. pneumoniae.txt'>Klebsiella pneumoniae subsp. pneumoniae</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae subsp. rhinoscleromatis ATCC 13884.txt' download='Klebsiella pneumoniae subsp. rhinoscleromatis ATCC 13884.txt'>Klebsiella pneumoniae subsp. rhinoscleromatis ATCC 13884</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Klebsiella pneumoniae.txt' download='Klebsiella pneumoniae.txt'>Klebsiella pneumoniae</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Leucothrix mucor.txt' download='Leucothrix mucor.txt'>Leucothrix mucor</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Malonomonas rubra.txt' download='Malonomonas rubra.txt'>Malonomonas rubra</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Myxococcus xanthus.txt' download='Myxococcus xanthus.txt'>Myxococcus xanthus</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Neisseria gonorrhoeae.txt' download='Neisseria gonorrhoeae.txt'>Neisseria gonorrhoeae</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Neisseria meningitidis serogroup B (strain MC58).txt' download='Neisseria meningitidis serogroup B (strain MC58).txt'>Neisseria meningitidis serogroup B (strain MC58)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Oceanospirillum linum.txt' download='Oceanospirillum linum.txt'>Oceanospirillum linum</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Pseudomonas aeruginosa (strain ATCC 15692 - DSM 22644 - CIP 104116 - JCM 14847 - LMG 12228 - 1C - PRS 101 - PAO1).txt' download='Pseudomonas aeruginosa (strain ATCC 15692 - DSM 22644 - CIP 104116 - JCM 14847 - LMG 12228 - 1C - PRS 101 - PAO1).txt'>Pseudomonas aeruginosa (strain ATCC 15692 / DSM 22644 / CIP 104116 / JCM 14847 / LMG 12228 / 1C / PRS 101 / PAO1)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Pseudomonas aeruginosa (strain UCBPP-PA14).txt' download='Pseudomonas aeruginosa (strain UCBPP-PA14).txt'>Pseudomonas aeruginosa (strain UCBPP-PA14)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Pseudomonas aeruginosa.txt' download='Pseudomonas aeruginosa.txt'>Pseudomonas aeruginosa</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Pseudomonas fluorescens (strain Pf0-1).txt' download='Pseudomonas fluorescens (strain Pf0-1).txt'>Pseudomonas fluorescens (strain Pf0-1)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Pseudomonas syringae pv. tomato (strain ATCC BAA-871 - DC3000).txt' download='Pseudomonas syringae pv. tomato (strain ATCC BAA-871 - DC3000).txt'>Pseudomonas syringae pv. tomato (strain ATCC BAA-871 / DC3000)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Pseudomonas taetrolens.txt' download='Pseudomonas taetrolens.txt'>Pseudomonas taetrolens</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Rhizobium leguminosarum bv. viciae.txt' download='Rhizobium leguminosarum bv. viciae.txt'>Rhizobium leguminosarum bv. viciae</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Rhizobium meliloti (strain 1021) (Ensifer meliloti) (Sinorhizobium meliloti).txt' download='Rhizobium meliloti (strain 1021) (Ensifer meliloti) (Sinorhizobium meliloti).txt'>Rhizobium meliloti (strain 1021) (Ensifer meliloti) (Sinorhizobium meliloti)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Rhizobium radiobacter (Agrobacterium tumefaciens) (Agrobacterium radiobacter).txt' download='Rhizobium radiobacter (Agrobacterium tumefaciens) (Agrobacterium radiobacter).txt'>Rhizobium radiobacter (Agrobacterium tumefaciens) (Agrobacterium radiobacter)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Rhodobacter capsulatus (Rhodopseudomonas capsulata).txt' download='Rhodobacter capsulatus (Rhodopseudomonas capsulata).txt'>Rhodobacter capsulatus (Rhodopseudomonas capsulata)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Rhodobacter sphaeroides (Rhodopseudomonas sphaeroides).txt' download='Rhodobacter sphaeroides (Rhodopseudomonas sphaeroides).txt'>Rhodobacter sphaeroides (Rhodopseudomonas sphaeroides)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Rhodopseudomonas palustris (strain ATCC BAA-98 - CGA009).txt' download='Rhodopseudomonas palustris (strain ATCC BAA-98 - CGA009).txt'>Rhodopseudomonas palustris (strain ATCC BAA-98 / CGA009)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Salmonella agona (strain SL483).txt' download='Salmonella agona (strain SL483).txt'>Salmonella agona (strain SL483)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Salmonella choleraesuis (strain SC-B67).txt' download='Salmonella choleraesuis (strain SC-B67).txt'>Salmonella choleraesuis (strain SC-B67)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Salmonella newport (strain SL254).txt' download='Salmonella newport (strain SL254).txt'>Salmonella newport (strain SL254)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Salmonella typhi.txt' download='Salmonella typhi.txt'>Salmonella typhi</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Salmonella typhimurium (strain 14028s - SGSC 2262).txt' download='Salmonella typhimurium (strain 14028s - SGSC 2262).txt'>Salmonella typhimurium (strain 14028s / SGSC 2262)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Salmonella typhimurium (strain LT2 - SGSC1412 - ATCC 700720).txt' download='Salmonella typhimurium (strain LT2 - SGSC1412 - ATCC 700720).txt'>Salmonella typhimurium (strain LT2 / SGSC1412 / ATCC 700720)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Serratia marcescens subsp. marcescens.txt' download='Serratia marcescens subsp. marcescens.txt'>Serratia marcescens subsp. marcescens</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Serratia marcescens.txt' download='Serratia marcescens.txt'>Serratia marcescens</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Serratia proteamaculans (strain 568).txt' download='Serratia proteamaculans (strain 568).txt'>Serratia proteamaculans (strain 568)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Serratia sp. (strain ATCC 39006).txt' download='Serratia sp. (strain ATCC 39006).txt'>Serratia sp. (strain ATCC 39006)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Shewanella oneidensis (strain MR-1).txt' download='Shewanella oneidensis (strain MR-1).txt'>Shewanella oneidensis (strain MR-1)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Shigella flexneri.txt' download='Shigella flexneri.txt'>Shigella flexneri</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Sinorhizobium meliloti (strain BL225C).txt' download='Sinorhizobium meliloti (strain BL225C).txt'>Sinorhizobium meliloti (strain BL225C)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Thauera aromatica.txt' download='Thauera aromatica.txt'>Thauera aromatica</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Vibrio alginolyticus 40B.txt' download='Vibrio alginolyticus 40B.txt'>Vibrio alginolyticus 40B</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Vibrio alginolyticus.txt' download='Vibrio alginolyticus.txt'>Vibrio alginolyticus</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Vibrio antiquarius (strain Ex25).txt' download='Vibrio antiquarius (strain Ex25).txt'>Vibrio antiquarius (strain Ex25)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Vibrio campbellii (strain ATCC BAA-1116 - BB120).txt' download='Vibrio campbellii (strain ATCC BAA-1116 - BB120).txt'>Vibrio campbellii (strain ATCC BAA-1116 / BB120)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Vibrio cholerae serotype O1 (strain ATCC 39541 - Classical Ogawa 395 - O395).txt' download='Vibrio cholerae serotype O1 (strain ATCC 39541 - Classical Ogawa 395 - O395).txt'>Vibrio cholerae serotype O1 (strain ATCC 39541 / Classical Ogawa 395 / O395)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Vibrio harveyi (Beneckea harveyi).txt' download='Vibrio harveyi (Beneckea harveyi).txt'>Vibrio harveyi (Beneckea harveyi)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Vibrio vulnificus (strain YJ016).txt' download='Vibrio vulnificus (strain YJ016).txt'>Vibrio vulnificus (strain YJ016)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Xanthomonas axonopodis pv. citri (strain 306).txt' download='Xanthomonas axonopodis pv. citri (strain 306).txt'>Xanthomonas axonopodis pv. citri (strain 306)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Xanthomonas campestris pv. campestris (strain ATCC 33913 - DSM 3586 - NCPPB 528 - LMG 568 - P 25).txt' download='Xanthomonas campestris pv. campestris (strain ATCC 33913 - DSM 3586 - NCPPB 528 - LMG 568 - P 25).txt'>Xanthomonas campestris pv. campestris (strain ATCC 33913 / DSM 3586 / NCPPB 528 / LMG 568 / P 25)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Xanthomonas campestris pv. campestris (strain B100).txt' download='Xanthomonas campestris pv. campestris (strain B100).txt'>Xanthomonas campestris pv. campestris (strain B100)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Yersinia enterocolitica serotype O--8 - biotype 1B (strain NCTC 13174 - 8081).txt' download='Yersinia enterocolitica serotype O--8 - biotype 1B (strain NCTC 13174 - 8081).txt'>Yersinia enterocolitica serotype O:8 / biotype 1B (strain NCTC 13174 / 8081)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Yersinia enterocolitica.txt' download='Yersinia enterocolitica.txt'>Yersinia enterocolitica</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Proteobacteria/Yersinia pseudotuberculosis serotype O--1b (strain IP 31758).txt' download='Yersinia pseudotuberculosis serotype O--1b (strain IP 31758).txt'>Yersinia pseudotuberculosis serotype O:1b (strain IP 31758)</a></li>

							</ul>
						</th>
					</tr>
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Cyanobacteria</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Cyanobacteria/Arthrospira platensis C1.txt' download='Arthrospira platensis C1.txt'>Arthrospira platensis C1</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Cyanobacteria/Microchaete diplosiphon (Fremyella diplosiphon).txt' download='Microchaete diplosiphon (Fremyella diplosiphon).txt'>Microchaete diplosiphon (Fremyella diplosiphon)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Cyanobacteria/Synechococcus elongatus (strain PCC 7942) (Anacystis nidulans R2).txt' download='Synechococcus elongatus (strain PCC 7942) (Anacystis nidulans R2).txt'>Synechococcus elongatus (strain PCC 7942) (Anacystis nidulans R2)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Cyanobacteria/Synechococcus sp. (strain ATCC 27264 - PCC 7002 - PR-6) (Agmenellum quadruplicatum).txt' download='Synechococcus sp. (strain ATCC 27264 - PCC 7002 - PR-6) (Agmenellum quadruplicatum).txt'>Synechococcus sp. (strain ATCC 27264 / PCC 7002 / PR-6) (Agmenellum quadruplicatum)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Cyanobacteria/Synechocystis sp. (strain PCC 6803 - Kazusa).txt' download='Synechocystis sp. (strain PCC 6803 - Kazusa).txt'>Synechocystis sp. (strain PCC 6803 / Kazusa)</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='phy'>Crenarchaeota</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Crenarchaeota/Pyrobaculum aerophilum (strain ATCC 51768 - IM2 - DSM 7523 - JCM 9630 - NBRC 100827).txt' download='Pyrobaculum aerophilum (strain ATCC 51768 - IM2 - DSM 7523 - JCM 9630 - NBRC 100827).txt'>Pyrobaculum aerophilum (strain ATCC 51768 / IM2 / DSM 7523 / JCM 9630 / NBRC 100827)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Crenarchaeota/Saccharolobus solfataricus (strain ATCC 35092 - DSM 1617 - JCM 11322 - P2) (Sulfolobus solfataricus).txt' download='Saccharolobus solfataricus (strain ATCC 35092 - DSM 1617 - JCM 11322 - P2) (Sulfolobus solfataricus).txt'>Saccharolobus solfataricus (strain ATCC 35092 / DSM 1617 / JCM 11322 / P2) (Sulfolobus solfataricus)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Crenarchaeota/Sulfolobus acidocaldarius (strain ATCC 33909 - DSM 639 - JCM 8929 - NBRC 15157 - NCIMB 11770).txt' download='Sulfolobus acidocaldarius (strain ATCC 33909 - DSM 639 - JCM 8929 - NBRC 15157 - NCIMB 11770).txt'>Sulfolobus acidocaldarius (strain ATCC 33909 / DSM 639 / JCM 8929 / NBRC 15157 / NCIMB 11770)</a></li>
							</ul>
						</th>
						
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Deinococcus-Thermus</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Deinococcus-Thermus/Deinococcus radiodurans (strain ATCC 13939 - DSM 20539 - JCM 16871 - LMG 4051 - NBRC 15346 - NCIMB 9279 - R1 - VKM B-1422).txt' download='Deinococcus radiodurans (strain ATCC 13939 - DSM 20539 - JCM 16871 - LMG 4051 - NBRC 15346 - NCIMB 9279 - R1 - VKM B-1422).txt'>Deinococcus radiodurans (strain ATCC 13939 / DSM 20539 / JCM 16871 / LMG 4051 / NBRC 15346 / NCIMB 9279 / R1 / VKM B-1422)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Deinococcus-Thermus/Meiothermus cateniformans.txt' download='Meiothermus cateniformans.txt'>Meiothermus cateniformans</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Deinococcus-Thermus/Thermus thermophilus (strain HB27 - ATCC BAA-163 - DSM 7039).txt' download='Thermus thermophilus (strain HB27 - ATCC BAA-163 - DSM 7039).txt'>Thermus thermophilus (strain HB27 / ATCC BAA-163 / DSM 7039)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Deinococcus-Thermus/Thermus thermophilus (strain HB8 - ATCC 27634 - DSM 579).txt' download='Thermus thermophilus (strain HB8 - ATCC 27634 - DSM 579).txt'>Thermus thermophilus (strain HB8 / ATCC 27634 / DSM 579)</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='phy'>Spirochaetes</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Spirochaetes/Leptospira interrogans serogroup Icterohaemorrhagiae serovar Lai (strain 56601).txt' download='Leptospira interrogans serogroup Icterohaemorrhagiae serovar Lai (strain 56601).txt'>Leptospira interrogans serogroup Icterohaemorrhagiae serovar Lai (strain 56601)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Spirochaetes/Leptospira interrogans serovar Australis str. 200703203.txt' download='Leptospira interrogans serovar Australis str. 200703203.txt'>Leptospira interrogans serovar Australis str. 200703203</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Spirochaetes/Leptospira interrogans serovar Bataviae str. L1111.txt' download='Leptospira interrogans serovar Bataviae str. L1111.txt'>Leptospira interrogans serovar Bataviae str. L1111</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Spirochaetes/Leptospira interrogans str. UI 12758.txt' download='Leptospira interrogans str. UI 12758.txt'>Leptospira interrogans str. UI 12758</a></li>
							</ul>
						</th>
					</tr>
					
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Tenericutes</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Tenericutes/Mycoplasma capricolum subsp. capricolum (strain California kid - ATCC 27343 - NCTC 10154).txt' download='Mycoplasma capricolum subsp. capricolum (strain California kid - ATCC 27343 - NCTC 10154).txt'>Mycoplasma capricolum subsp. capricolum (strain California kid - ATCC 27343 - NCTC 10154)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Tenericutes/Mycoplasma genitalium (strain ATCC 33530 - G-37 - NCTC 10195).txt' download='Mycoplasma genitalium (strain ATCC 33530 - G-37 - NCTC 10195).txt'>Mycoplasma genitalium (strain ATCC 33530 / G-37 / NCTC 10195)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Tenericutes/Mycoplasma pneumoniae (strain ATCC 29342 - M129).txt' download='Mycoplasma pneumoniae (strain ATCC 29342 - M129).txt'>Mycoplasma pneumoniae (strain ATCC 29342 / M129)</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='phy'>Bacteroidetes</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Bacteroidetes/Riemerella anatipestifer RA-CH-1.txt' download='Riemerella anatipestifer RA-CH-1.txt'>Riemerella anatipestifer RA-CH-1</a></li>
							</ul>
						</th>
						
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Thermotogae</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Thermotogae/Thermotoga maritima (strain ATCC 43589 - MSB8 - DSM 3109 - JCM 10099).txt' download='Thermotoga maritima (strain ATCC 43589 - MSB8 - DSM 3109 - JCM 10099).txt'>Thermotoga maritima (strain ATCC 43589 / MSB8 / DSM 3109 / JCM 10099)</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='phy'>Chlamydiae</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/PhosphorylationData/Chlamydiae/Chlamydia trachomatis.txt' download='Chlamydia trachomatis.txt'>Chlamydia trachomatis</a></li>
							</ul>
							
						</th>
					</tr>
					
					<tr><th id='5' class='sedtit' colspan=2>Residue-type</th></tr>
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='res'>Serine</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download/PhosphorylationData/S.txt' download='Serine-Phosphorylation.txt'>Serine</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='res'>Threonine</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download/PhosphorylationData/T.txt' download='Threonine-Phosphorylation.txt'>Threonine</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='res'>Tyrosine</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download/PhosphorylationData/Y.txt' download='Tyrosine-Phosphorylation.txt'>Tyrosine</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='res'>Arginine</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download/PhosphorylationData/R.txt' download='Arginine-Phosphorylation.txt'>Arginine</a></li>
							</ul>
						</th>
						
						<th>&nbsp;&#10132;&nbsp;<span class='res'>Cysteine</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download/PhosphorylationData/C.txt' download='Cysteine-Phosphorylation.txt'>Cysteine</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='res'>Aspartic acid</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download/PhosphorylationData/D.txt' download='Asparticacid-Phosphorylation.txt'>Aspartic acid</a></li>
							</ul>
							&nbsp;&#10132;&nbsp;<span class='res'>Histidine</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download/PhosphorylationData/H.txt' download='Histidine-Phosphorylation.txt'>Histidine</a></li>
							</ul>
							
						</th>
					</tr>
					</table>
					
					
					
					
					<br/>
					<br/>
					<br/>

<hr id='hr1' />
					<br/>
					<p id='2' class='tit1'><strong>Integrated resources:</strong></p>
					<p  class='des'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <strong>annotation data sets</strong> in Tab-delimited format can be downloaded by clicking on the name of database or tool.</p>
					
					<table id='annodown' >
					
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Taxonomy annotation</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Taxonomy/BacDive.data' download='BacDive.data'>BacDive</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Taxonomy/LPSN.data' download='LPSN.data'>LPSN</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Taxonomy/MicrobeWiki.data' download='MicrobeWiki.data'>MicrobeWiki</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Taxonomy/NCBI taxonomy.data' download='NCBI taxonomy.data'>NCBI taxonomy</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Taxonomy/PATRIC.data' download='PATRIC.data'>PATRIC</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Taxonomy/proGenomes.data' download='proGenomes.data'>proGenomes</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Taxonomy/fusionDB.data' download='fusionDB.data'>fusionDB</a></li>
							</ul>
						</th>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Genome annotation</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/Mycobrowser.data' download='Mycobrowser.data'>Mycobrowser</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/EnsemblGenome.data' download='EnsemblGenome.data'>EnsemblGenome</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/MicroScope.data' download='MicroScope.data'>MicroScope</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/GOLD.data' download='GOLD.data'>GOLD</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/CyanoBase.data' download='CyanoBase.data'>CyanoBase</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/Island.data' download='Island.data'>Island</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/PseudoCAP.data' download='PseudoCAP.data'>PseudoCAP</a></li>


								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/PAIDB 2.0.data' download='PAIDB 2.0.data'>PAIDB 2.0</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Genome' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Genomehiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/SILVA.data' download='SILVA.data'>SILVA</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Genome/MicrobesOnline.data' download='MicrobesOnline.data'>MicrobesOnline</a></li>
							</ul>
						</th>
					</tr>
					
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Function annotation</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/ECMDB.data' download='ECMDB.data'>ECMDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/t4ss.data' download='t4ss.data'>t4ss</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/TADB2.data' download='TADB2.data'>TADB2</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/ChEMBL.data' download='ChEMBL.data'>ChEMBL</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/SwissLipids.data' download='SwissLipids.data'>SwissLipids</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/tRNADB-CE.data' download='tRNADB-CE.data'>tRNADB-CE</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/P2CS.data' download='P2CS.data'>P2CS</a></li>
								
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/TransportDB.data' download='TransportDB.data'>TransportDB</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Function' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Functionhiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/SigMol.data' download='SigMol.data'>SigMol</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/enzyme.data' download='enzyme.data'>enzyme</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/EffectiveDB.data' download='EffectiveDB.data'>EffectiveDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/REBASE.data' download='REBASE.data'>REBASE</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/PSORTdb.data' download='PSORTdb.data'>PSORTdb</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/Census of bacterial signal transduction proteins.data' download='Census of bacterial signal transduction proteins.data'>Census of bacterial signal transduction proteins</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/PeroxiBase.data' download='PeroxiBase.data'>PeroxiBase</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Function/EchoBASE.data' download='EchoBASE.data'>EchoBASE</a></li>
							</ul>
						</th>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Transcriptional regulation</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/PRODORIC2.data' download='PRODORIC2.data'>PRODORIC2</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/CollecTF.data' download='CollecTF.data'>CollecTF</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/DBTBS.data' download='DBTBS.data'>DBTBS</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/RegPrecise.data' download='RegPrecise.data'>RegPrecise</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/CoryneRegNet.data' download='CoryneRegNet.data'>CoryneRegNet</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/RegulonDB.data' download='RegulonDB.data'>RegulonDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/P2TF.data' download='P2TF.data'>P2TF</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Transcriptional/footprintDB.data' download='footprintDB.data'>footprintDB</a></li>
							</ul>
						</th>
					</tr>
					
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Sequence and structure information</span><br/>
							<ul>
								
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Sequence/MMDB.data' download='MMDB.data'>MMDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Sequence/PDB.data' download='PDB.data'>PDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Sequence/Compute pIMw.data' download='Compute pIMw.data'>Compute pIMw</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Sequence/DisProt.data' download='DisProt.data'>DisProt</a></li>

							</ul>
							&nbsp;&#10132;&nbsp;<span class='phy'>Biological pathway</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Pathway/KEGG Pathway.data' download='KEGG Pathway.data'>KEGG Pathway</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Pathway/BioCyc.data' download='BioCyc.data'>BioCyc</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Pathway/Reactome.data' download='Reactome.data'>Reactome</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Pathway/WikiPathways.data' download='WikiPathways.data'>WikiPathways</a></li>
							</ul>
						</th>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Family and domain annotation</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/PIRSF.data' download='PIRSF.data'>PIRSF</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/CATH-Gene3D.data' download='CATH-Gene3D.data'>CATH-Gene3D</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/TIGRFAMs.data' download='TIGRFAMs.data'>TIGRFAMs</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/TCDB.data' download='TCDB.data'>TCDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/PRINTS.data' download='PRINTS.data'>PRINTS</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/SCOP2.data' download='SCOP2.data'>SCOP2</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/InterPro.data' download='InterPro.data'>InterPro</a></li>
								
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/HAMAP.data' download='HAMAP.data'>HAMAP</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Domain' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Domainhiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/ESTHER.data' download='ESTHER.data'>ESTHER</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/PANTHER.data' download='PANTHER.data'>PANTHER</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/PROSITE.data' download='PROSITE.data'>PROSITE</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/SMART.data' download='SMART.data'>SMART</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Domain/Pfam.data' download='Pfam.data'>Pfam</a></li>
							</ul>
					</tr>
					
					<tr>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Interaction</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/MEROPS.data' download='MEROPS.data'>MEROPS</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/aBiofilm.data' download='aBiofilm.data'>aBiofilm</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/PHI-base.data' download='PHI-base.data'>PHI-base</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/IntAct.data' download='IntAct.data'>IntAct</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/MVP.data' download='MVP.data'>MVP</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/DrugBank.data' download='DrugBank.data'>DrugBank</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/BioGrid.data' download='BioGrid.data'>BioGrid</a></li>
								
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/STRING.data' download='STRING.data'>STRING</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Interaction' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Interactionhiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/BioGRIDChemical.data' download='BioGRIDChemical.data'>BioGRIDChemical</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/ComplexPortal.data' download='ComplexPortal.data'>ComplexPortal</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/RAID.data' download='RAID.data'>RAID</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/Mentha.data' download='Mentha.data'>Mentha</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/DIP.data' download='DIP.data'>DIP</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/STITCH.data' download='STITCH.data'>STITCH</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Interaction/CAMP.data' download='CAMP.data'>CAMP</a></li>
							</ul>
						</th>
						<th>&nbsp;&#10132;&nbsp;<span class='phy'>Orthologous information</span><br/>
							<ul>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/InParanoid.data' download='InParanoid.data'>InParanoid</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/OMA.data' download='OMA.data'>OMA</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/KEGG Orthology(KO).data' download='KEGG Orthology(KO).data'>KEGG Orthology(KO)</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/OrtholugeDB.data' download='OrtholugeDB.data'>OrtholugeDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/OrthoDB.data' download='OrthoDB.data'>OrthoDB</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/eggNOG.data' download='eggNOG.data'>eggNOG</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/HOGENOM.data' download='HOGENOM.data'>HOGENOM</a></li>
								
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/COG.data' download='COG.data'>COG</a>&nbsp;&nbsp;&nbsp;<span><img title='More' class='AnnoDetail' name='Orthologous' src='images/detail1.png' width='24px' height='14px' /></span></li></ul>
							<ul class='Orthologoushiden'><li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/ATGC.data' download='ATGC.data'>ATGC</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/MSA.data' download='MSA.data'>MSA</a></li>
								<li><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a href='Download/AnnotationResources/Orthologous/PhylomeDB.data' download='PhylomeDB.data'>PhylomeDB</a></li>
							</ul>
						</th>
					</tr>
					
					
					
					</table>
					<br/>
					<br/>
					<br/>


					
					<script>
						
						$(".AnnoDetail").mouseover(function(){
							var phy=$(this).attr("name");
							var phyhid = "."+phy+"hiden";
							$(phyhid).css("display","block");
						});
						$(".Proteobacteriahiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".AnnoDetail").click(function(){
							var phy=$(this).attr("name");
							var phyhid = "."+phy+"hiden";
							$(phyhid).css("display","none");
						});
						$(".Proteobacteriahiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
					
						$(".Actinobacteriahiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Actinobacteriahiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						$(".Firmicuteshiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Firmicuteshiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						$(".Euryarchaeotahiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Euryarchaeotahiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						
						
						$(".Functionhiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Functionhiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						
						$(".Genomehiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Genomehiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						$(".Domainhiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Domainhiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						$(".Interactionhiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Interactionhiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						$(".Orthologoushiden").mouseover(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","block");
						});
						$(".Orthologoushiden").mouseout(function(){
							//var phy=$(this).attr("name");
							//var phyhid = "."+phy+"hiden";
							$(this).css("display","none");
						});
						
					</script>
					
					
					
					
					
					
					
					
					
					
					
					<br/>
					<p><a href='#'>&nbsp;&nbsp;&#9650;Top</p>
				</div>
				<br/>
			</div>
		</div>
		<br class="clearfloat" />
		<?php require("common/foot.php"); ?>