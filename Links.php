<?php require("common/head.php"); ?>
<style>
p font {
    color: #963C64;
    font-weight: bold;
}
.annoimg{padding: 12px 0px 0px 20px;}

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
		margin-bottom:45px;
}
.title{
		-webkit-margin-before: 1.33em;
		-webkit-margin-after: .3em;
		-webkit-margin-start: 0px;
		-webkit-margin-end: 0px;
		font-weight: bold;
		font-size: 18px;
		color: #963c64;
		line-height: 1.166;
		font-family: "Open Sans",Arial,sans-serif;
		
}
.blk{
	margin-bottom:20px;
	margin-top:30px;
	margin-left:85px;
	margin-right:300px;
	border-radius:7px;
	border:2px dashed rgba(202, 135, 153, 0.4);
	background-color:rgba(255,255,255,0.5);
	height:500px;
	width:950px;
}
.blk a:link {font-family:Verdana,Arial,sans-serif;text-decoration: none;color:rgba(0, 143, 149, 1);font-size:19px;font-weight:300px}
.blk a:visited {font-family:Verdana,Arial,sans-serif;text-decoration: none;color:rgba(0, 143, 149, 1);font-size:19px;font-weight:300px}
.blk a:hover {font-family:Verdana,Arial,sans-serif;text-decoration: none;color:#963c64;border-bottom:#963C64 dotted 1px;font-size:19px;font-weight:300px}
.blk a:active {font-family:Verdana,Arial,sans-serif;text-decoration: none;color:#963c64;border-bottom:#963C64 dotted 1px;font-size:19px;font-weight:300px}
.blk td{
	width: 550px;
	height: 150px;
	padding-top:0px;
	padding-left:0px;
	text-align: center;
}
a:link,a:visited{color:rgba(0, 143, 149, 1);border-bottom:#996699 dotted 0px;}
a:hover,a:active{color:#996699;border-bottom:#996699 dotted 1px;}
</style>
<body>
	<div id="container">
		<div id="header">
			<?php require("common/header.php"); ?>
		</div>
		<style>
			#Name{color:rgba(0, 143, 149, 1);font-weight:bold;font-family:"Open Sans",Arial,sans-serif;}
		</style>
		<div id="Main">
			<?php require("../side-sy.php"); ?>
			<?php require("common/IPcount.php"); ?>
			<div id="content" class="story">
				<div id="search">
					<br />
					<h3 class="section section1">&#8251; Related resources & tools</h3>
					<hr id='hr1'  align='center' width='95%' size='1'/>
<div>
	<table class='blk'>
		<tr>
		<td><a href='#1'>Taxonomy annotation</a><br/><br/><img class="annoimg" src="images/blk/8.png"  height="90px"/></td>
		<td><a href='#2'>Genome annotation</a><br/><br/><img class="annoimg" src="images/blk/3.png"  height="90px"/></td>
		<td><a href='#3'>Function annotation</a><br/><br/><img class="annoimg" src="images/blk/2.png"  height="90px"/></td>
		</tr>
		<tr>
		<td><a href='#4'>Transcriptional regulation</a><br/><br/><br/><br/><img class="annoimg" src="images/blk/trans.png"  height="40px"/></td>
		<td><a href='#5'>Sequence and structure information</a><br/><img class="annoimg" src="images/blk/4.png"  height="90px"/></td>
		<td><a href='#6'>Family and domain annotation</a><br/><br/><img class="annoimg" src="images/blk/6.png"  height="90px"/></td>
		</tr>
		<tr>
		<td><a href='#7'>Interaction</a><br/><br/><img class="annoimg" src="images/blk/7.png" height="90px"/></td>
		<td><a href='#8'>Orthologous information</a><br/><br/><img class="annoimg" src="images/blk/ortho.png" height="90px"/></td>
		<td><a href='#9'>Biological pathway</a><br/><br/><img class="annoimg" src="images/blk/9.png"  height="90px"/></td>
		</tr>
	</table>

</div>


					<br/>
					<hr size="1" id='hr2'>

<p id='0'><strong class='title'>Public databases containing prokaryotic phosphorylation sites</strong></p>
<p id='dbPTM'>1. <a href='http://dbptm.mbc.nctu.edu.tw/index.php' target='_blank'><font id='Name'>dbPTM</font></a>: An integrated resource for protein post-translational modifications (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30418626' target='_blank'>Huang, <em>et al.</em>, 2019</a>).</p>
<p id='UniProt'>2. <a href='http://www.uniprot.org/' target='_blank'><font id='Name'>UniProt</font></a>: A worldwide hub of protein knowledge (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30395287' target='_blank'>UniProt Consortium, 2019</a>).</p>
<p id='SysPTM'>3. <a href='http://lifecenter.sgst.cn/SysPTM/' target='_blank'><font id='Name'>SysPTM</font></a>: A systematic resource for proteomic research on post-translational modifications (<a href='https://www.ncbi.nlm.nih.gov/pubmed/24705204' target='_blank'>Li, <em>et al.</em>, 2014</a>).</p>
<p id='PHOSIDA'>4. <a href='http://141.61.102.18/phosida/index.aspx' target='_blank'><font id='Name'>PHOSIDA</font></a>: A phosphorylation site database, integrates thousands of high-confidence in vivo phosphosites identified by mass spectrometry-based proteomics in various species (<a href='https://www.ncbi.nlm.nih.gov/pubmed/21081558' target='_blank'>Gnad, <em>et al.</em>, 2011</a>).</p>
<p id='PhosphoPep'>5. <a href='http://vigen.biochem.vt.edu/xpd/xpd.htm' target='_blank'><font id='Name'>Phosphorylation Site Database</font></a>: A guide to the serine-, threonine-, and/or tyrosine-phosphorylated proteins in prokaryotic organisms (<a href='https://www.ncbi.nlm.nih.gov/pubmed/15174126' target='_blank'>Wurgler-Murphy, <em>et al.</em>, 2004</a>).</p>


<p id='1'><strong class='title'>Taxonomy annotation</strong></p>
<p id='BacDive'>1. <a href='http://bacdive.dsmz.de' target='_blank'><font id='Name'>BacDive</font></a>: A comprehensive resource for structured data on the taxonomy, morphology, physiology, cultivation, isolation and molecular data of prokaryotes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30256983' target='_blank'>Reimer, <em>et al.</em>, 2019</a>).</p>
<p id='LPSN'>2. <a href='http://www.bacterio.net/-classifphyla.html' target='_blank'><font id='Name'>LPSN</font></a>:  List of prokaryotic names with standing in nomenclature (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29724269' target='_blank'>Parte, <em>et al.</em>, 2018</a>).</p>
<p id='MicrobeWiki'>3. <a href='https://microbewiki.kenyon.edu/index.php/MicrobeWiki' target='_blank'><font id='Name'>MicrobeWiki</font></a>: A free wiki resource on microbes and microbiology, authored by students at many colleges and universities.</p>
<p id='NCBI Taxonomy'>4. <a href='https://www.ncbi.nlm.nih.gov/taxonomy' target='_blank'><font id='Name'>NCBI Taxonomy</font></a>: A standard nomenclature and classification repository for the International Nucleotide Sequence Database Collaboration (INSDC), comprising the GenBank, ENA (EMBL) and DDBJ databases (<a href='https://www.ncbi.nlm.nih.gov/pubmed/22139910' target='_blank'>Federhen, <em>et al.</em>, 2012</a>).</p>
<p id='PATRIC'>5. <a href='https://patricbrc.org/' target='_blank'><font id='Name'>PATRIC</font></a>: the all-bacterial bioinformatics database and analysis resource center (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27899627' target='_blank'>Wattam, <em>et al.</em>, 2017</a>).</p>
<p id='proGenomes'>6. <a href='http://progenomes.embl.de' target='_blank'><font id='Name'>proGenomes</font></a>: A resource for consistent functional and taxonomic annotations of prokaryotic genomes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/28053165' target='_blank'>Mende, <em>et al.</em>, 2017</a>).</p>
<p id='fusionDB'>7. <a href='https://services.bromberglab.org/fusiondb/' target='_blank'><font id='Name'>fusionDB</font></a>: A databse assessing microbial diversity and environmental preferences via functional similarity networks (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29112720' target='_blank'>Zhu, <em>et al.</em>, 2018</a>).</p>


<p id='2'><strong class='title'>Genome annotation</strong></p>
<p id='Mycobrowser'>1. <a href='https://mycobrowser.epfl.ch/' target='_blank'><font id='Name'>Mycobrowser</font></a>: A comprehensive genomic and proteomic data repository for pathogenic mycobacteria (<a href='https://www.ncbi.nlm.nih.gov/pubmed/20980200' target='_blank'>Kapopoulou, <em>et al.</em>, 2011</a>).</p>
<p id='EnsemblGenome'>2. <a href='http://bacteria.ensembl.org' target='_blank'><font id='Name'>Ensembl Bacteria</font></a>: A browser for bacterial and archaeal genomes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29092050' target='_blank'>Kersey, <em>et al.</em>, 2018</a>).</p>
<p id='MicroScope'>3. <a href='http://www.genoscope.cns.fr/agc/microscope' target='_blank'><font id='Name'>MicroScope</font></a>: An expanding and evolving integrated resource for community expertise of microbial genomes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27899624' target='_blank'>Vallenet, <em>et al.</em>, 2017</a>).</p>
<p id='GOLD'>4. <a href='https://gold.jgi.doe.gov/' target='_blank'><font id='Name'>GOLD</font></a>: A World Wide Web resource for comprehensive access to information regarding genome and metagenome sequencing projects, and their associated metadata (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30357420' target='_blank'>Mukherjee, <em>et al.</em>, 2018</a>).</p>
<p id='CyanoBase'>5. <a href='http://genome.microbedb.jp/CyanoBase' target='_blank'><font id='Name'>CyanoBase</font></a>: Providing cyanobacterial genome annotations as references for cyanobacterial research (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27899668' target='_blank'>Fujisawa, <em>et al.</em>, 2017</a>).</p>
<p id='Island'>6. <a href='https://bioinformatics.sandia.gov/islander/index.html' target='_blank'><font id='Name'>Islander</font></a>: A database of precisely mapped genomic islands in tRNA and tmRNA genes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25378302' target='_blank'>Hudson, <em>et al.</em>, 2015</a>).</p>
<p id='PseudoCAP'>7. <a href='http://www.pseudomonas.com/' target='_blank'><font id='Name'>PseudoCAP</font></a>: The Pseudomonas Genome Database, a database for high-quality Pseudomonas aeruginosa PAO1 genome annotation and whole-genome comparative analyses(<a href='https://www.ncbi.nlm.nih.gov/pubmed/26578582' target='_blank'>Winsor, <em>et al.</em>, 2016</a>).</p>
<p id='PAIDB 2.0'>8. <a href='http://www.paidb.re.kr/' target='_blank'><font id='Name'>PAIDB v2.0</font></a>: A database dedicated to providing comprehensive information on all reported Pathogenicity islands (PAIs) and candidate PAIs in prokaryotic genomes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25336619' target='_blank'>Yoon, <em>et al.</em>, 2015</a>).</p>
<p id='SILVA'>9. <a href='https://www.arb-silva.de/' target='_blank'><font id='Name'>SILVA</font></a>: A comprehensive on-line resource for quality checked and aligned ribosomal RNA sequence data (<a href='https://www.ncbi.nlm.nih.gov/pubmed/28648396' target='_blank'>Glöckner, <em>et al.</em>, 2017</a>).</p>
<p id='MicrobesOnline'>10. <a href='http://www.microbesonline.org/' target='_blank'><font id='Name'>MicrobesOnline</font></a>: A comparative genome browser for phylogenomic analysis of microbial communities (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23203984' target='_blank'>Chivian, <em>et al.</em>, 2013</a>).</p>



<p id='3'><strong class='title'>Function annotation</strong></p>
<p id='ECMDB'>1. <a href='http://www.ecmdb.ca' target='_blank'><font id='Name'>ECMDB</font></a>: Escherichia coli Metabolome Database, a comprehensive database containing detailed information about the genome and metabolome of E. coli (K-12) (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26481353' target='_blank'>Sajed, <em>et al.</em>, 2016</a>).</p>
<p id='T4SS'>2. <a href='http://www.t4ss.lncc.br/' target='_blank'><font id='Name'>AtlasT4SS</font></a>: A database for analysis of prokaryotic type IV secretion system (<a href='https://www.ncbi.nlm.nih.gov/pubmed/22876890' target='_blank'>Souza, <em>et al.</em>, 2012</a>).</p>
<p id='TADB2'>3. <a href='http://bioinfo-mml.sjtu.edu.cn/TADB2/index.php' target='_blank'><font id='Name'>TADB 2.0</font></a>:  A database of bacterial type II toxin-antitoxin loci (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29106666' target='_blank'>Xie, <em>et al.</em>, 2018</a>).</p>
<p id='ChEMBL'>4. <a href='https://www.ebi.ac.uk/chembldb' target='_blank'><font id='Name'>ChEMBL</font></a>: Database of bioactive molecules with drug-like properties (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27899562 ' target='_blank'>Gaulton, <em>et al.</em>, 2017</a>).</p>
<p id='SwissLipids'>5. <a href='http://www.swisslipids.org' target='_blank'><font id='Name'>SwissLipids</font></a>: A knowledge resource for lipids and their biology (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25943471 ' target='_blank'>Aimo, <em>et al.</em>, 2015</a>).</p>
<p id='tRNADB-CE'>6. <a href='http://trna.ie.niigata-u.ac.jp/cgi-bin/trnadb/index.cgi' target='_blank'><font id='Name'>tRNADB-CE</font></a>: A tRNA gene database manually curated by experts (<a href='https://www.ncbi.nlm.nih.gov/pubmed/24822057' target='_blank'>Abe, <em>et al.</em>, 2014</a>).</p>
<p id='P2CS'>7. <a href='http://www.p2cs.org/' target='_blank'><font id='Name'>P2CS</font></a>: A comprehensive resource for the analysis of Prokaryotic Two-Component Systems  (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25324303' target='_blank'>Ortet, <em>et al.</em>, 2015</a>).</p>
<p id='TransportDB'>8. <a href='http://www.membranetransport.org/transportDB2/' target='_blank'><font id='Name'>TransportDB 2.0</font></a>: A relational database for exploring membrane transporters in sequenced genomes from all domains of life (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27899676' target='_blank'>Elbourne, <em>et al.</em>, 2017</a>).</p>
<p id='SigMol'>9. <a href='http://bioinfo.imtech.res.in/manojk/sigmol' target='_blank'><font id='Name'>SigMol</font></a>: A repertoire of quorum sensing signaling molecules in prokaryotes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26490957' target='_blank'>Rajput, <em>et al.</em>, 2016</a>).</p>
<p id='Enzyme'>10. <a href='https://www.brenda-enzymes.org/' target='_blank'><font id='Name'>Enzyme</font></a>: A comprehensive enzyme information system (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27924025' target='_blank'>Placzek, <em>et al.</em>, 2017</a>).</p>
<p id='EffectiveDB'>11. <a href='http://effectivedb.org' target='_blank'><font id='Name'>EffectiveDB</font></a>: Pre-calculated predictions of bacterial secreted proteins and of intact secretion systems (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26590402' target='_blank'>Eichinger, <em>et al.</em>, 2016</a>).</p>
<p id='REBASE'>12. <a href='http://rebase.neb.com/rebase/rebase.html' target='_blank'><font id='Name'>REBASE</font></a>: A database for DNA restriction and modification: enzymes, genes and genomes. (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25378308' target='_blank'>Roberts, <em>et al.</em>, 2015</a>).</p>
<p id='PSORTdb'>13. <a href='https://db.psort.org/' target='_blank'><font id='Name'>PSORTdb</font></a>: Expanding the bacteria and archaea protein subcellular localization database to better reflect diversity in cell envelope structures. (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26602691' target='_blank'>Peabody, <em>et al.</em>, 2016</a>).</p>
<p id='signalcensus'>14. <a href='https://www.ncbi.nlm.nih.gov/Complete_Genomes/SignalCensus.html' target='_blank'><font id='Name'>Census of bacterial signal transduction proteins</font></a>: Signal transduction proteins encoded in genomes of 555 bacterial and archaeal species (<a href='https://www.ncbi.nlm.nih.gov/pubmed/20237650' target='_blank'>Galperin, <em>et al.</em>, 2010</a>).</p>
<p id='PeroxiBase'>15. <a href='http://peroxibase.toulouse.inra.fr/' target='_blank'><font id='Name'>PeroxiBase</font></a>: A database for large-scale evolutionary analysis of peroxidases (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23180785' target='_blank'>Fawal, <em>et al.</em>, 2013</a>).</p>
<p id='EchoBASE'>16. <a href='https://www.york.ac.uk/res/thomas/' target='_blank'><font id='Name'>EchoBASE</font></a>:  a post genomic database that curates experiments providing new information about genes and their products in the model bacterium <em>Escherichia coli</em> (<a href='https://www.ncbi.nlm.nih.gov/pubmed/15608209' target='_blank'>Misra, <em>et al.</em>, 2005</a>).</p>
<p id='GOA'>17. <a href='http://geneontology.org/' target='_blank'><font id='Name'>Gene Ontology resource </font></a>: A resource for structured, computable knowledge regarding the functions of genes and gene products (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30395331' target='_blank'>The Gene Ontology Consortium, 2019</a>).</p>


<p id='4'><strong class='title'>Transcriptional regulation</strong></p>
<p id='PRODORIC2'>1. <a href='http://www.prodoric2.de/' target='_blank'><font id='Name'>PRODORIC2</font></a>: One of the largest collections of DNA binding sites for prokaryotic transcription factors (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29136200' target='_blank'>Eckweiler, <em>et al.</em>, 2018</a>).</p>
<p id='CollecTF'>2. <a href='http://www.collectf.org/' target='_blank'><font id='Name'>CollecTF</font></a>: A database of experimentally validated transcription factor-binding sites in Bacteria (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27114493' target='_blank'>Kiliç, <em>et al.</em>, 2016</a>).</p>
<p id='DBTBS'>3. <a href='http://dbtbs.hgc.jp/' target='_blank'><font id='Name'>DBTBS</font></a>: A database of transcriptional regulation in Bacillus subtilis containing upstream intergenic conservation information (<a href='https://www.ncbi.nlm.nih.gov/pubmed/17962296 ' target='_blank'>Sierro, <em>et al.</em>, 2008</a>).</p>
<p id='RegPrecise 3.0'>4. <a href='http://regprecise.lbl.gov/RegPrecise/' target='_blank'><font id='Name'>RegPrecise 3.0</font></a>: A database for capturing, visualization and analysis of transcription factor regulons that were reconstructed by the comparative genomic approach in a wide variety of prokaryotic genomes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/24175918 ' target='_blank'>Novichkov, <em>et al.</em>, 2013</a>).</p>
<p id='CoryneRegNet'>5. <a href='https://coryneregnet.compbio.sdu.dk/' target='_blank'><font id='Name'>CoryneRegNet</font></a>: The reference database and analysis platform for corynebacterial gene regulatory networks (<a href='https://www.ncbi.nlm.nih.gov/pubmed/22080556 ' target='_blank'>Pauling, <em>et al.</em>, 2012</a>).</p>
<p id='RegulonDB'>6. <a href='http://regulondb.ccg.unam.mx/' target='_blank'><font id='Name'>RegulonDB</font></a>: Escherichia coli K-12 Transcriptional Regulatory Network (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26527724 ' target='_blank'>Gama-Castro, <em>et al.</em>, 2016</a>).</p>
<p id='P2TF'>7. <a href='http://www.p2tf.org/' target='_blank'><font id='Name'>P2TF</font></a>: A comprehensive resource for analysis of prokaryotic transcription factors (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23153078' target='_blank'>Ortet, <em>et al.</em>, 2012</a>).</p>
<p id='FootprintDB'>8. <a href='http://floresta.eead.csic.es/footprintdb/' target='_blank'><font id='Name'>FootprintDB</font></a>: A database of transcription factors with annotated cis elements and binding interfaces (<a href='https://www.ncbi.nlm.nih.gov/pubmed/24234003 ' target='_blank'>Sebastian, <em>et al.</em>, 2014</a>).</p>


<p id='5'><strong class='title'>Sequence and structure information</strong></p>
<p id='Compute pI/Mw'>1. <a href='https://web.expasy.org/compute_pi/' target='_blank'><font id='Name'>Compute pI/Mw</font></a>: A tool which allows the computation of the theoretical pI (isoelectric point) and Mw (molecular weight) for a list of entered sequences (<a href='https://www.ncbi.nlm.nih.gov/pubmed/10027275' target='_blank'>Wilkins, <em>et al.</em>, 1999</a>).</p>
<p id='MMDB'>2. <a href='http://www.ncbi.nlm.nih.gov/structure' target='_blank'><font id='Name'>MMDB</font></a>: 3D structures and macromolecular interactions (<a href='https://www.ncbi.nlm.nih.gov/pubmed/22135289' target='_blank'>Madej, <em>et al.</em>, 2012</a>).</p>
<p id='DisProt'>3. <a href='http://www.disprot.org/' target='_blank'><font id='Name'>DisProt</font></a>: A database of protein disorder (<a href='https://www.ncbi.nlm.nih.gov/pubmed/15310560' target='_blank'>Vucetic, <em>et al.</em>, 2005</a>).</p>
<p id='PDB'>4. <a href='http://www.rcsb.org/pdb/' target='_blank'><font id='Name'>RCSB PDB</font></a>: A database of biological macromolecular structures (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30357411' target='_blank'>Burley, <em>et al.</em>, 2019</a>).</p>
<p id='IUPred2A'>5. <a href='https://iupred2a.elte.hu/' target='_blank'><font id='Name'>IUPred2A</font></a>: A web interface that allows to identify disordered protein regions using IUPred2 and disordered binding regions using ANCHOR2 (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29860432' target='_blank'>Mészáros, <em>et al.</em>, 2018</a>).</p>


<p id='6'><strong class='title'>Family and domain annotation</strong></p>
<p id='PIRSF'>1. <a href='https://proteininformationresource.org/pirwww/dbinfo/pirsf.shtml' target='_blank'><font id='Name'>PIRSF</font></a>: An integrated public resource of protein informatics (<a href='https://www.ncbi.nlm.nih.gov/pubmed/14681371' target='_blank'>Wu, <em>et al.</em>, 2004</a>).</p>
<p id='CATH-Gene3D'>2. <a href='http://www.cathdb.info/' target='_blank'><font id='Name'>CATH-Gene3D</font></a>: A database for protein structure classification (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27899584' target='_blank'>Dawson, <em>et al.</em>, 2017</a>).</p>
<p id='TIGRFAMs'>3. <a href='http://tigrfams.jcvi.org/cgi-bin/index.cgi' target='_blank'><font id='Name'>TIGRFAMs</font></a>: A resource consisting of curated multiple sequence alignments, Hidden Markov Models (HMMs) for protein sequence classification, and associated information designed to support automated annotation of (mostly prokaryotic) proteins (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23197656' target='_blank'>Haft, <em>et al.</em>, 2013</a>).</p>
<p id='TCDB'>4. <a href='http://www.tcdb.org/' target='_blank'><font id='Name'>TCDB</font></a>: A reference database for transport protein research, which provides structural, functional, mechanistic, evolutionary and disease/medical information about transporters from organisms of all types (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26546518' target='_blank'>Saier, <em>et al.</em>, 2016</a>).</p>
<p id='PRINTS'>5. <a href='http://www.bioinf.manchester.ac.uk/dbbrowser/PRINTS/' target='_blank'><font id='Name'>PRINTS</font></a>: A fine-grained protein sequence annotation and analysis resource (<a href='https://www.ncbi.nlm.nih.gov/pubmed/22508994' target='_blank'>Attwood, <em>et al.</em>, 2012</a>).</p>
<p id='SCOP2'>6. <a href='http://scop2.mrc-lmb.cam.ac.uk/front.html' target='_blank'><font id='Name'>SCOP2</font></a>: Structural classification of proteins (<a href='https://www.ncbi.nlm.nih.gov/pubmed/24293656' target='_blank'>Andreeva, <em>et al.</em>, 2014</a>).</p>
<p id='InterPro'>7. <a href='https://www.ebi.ac.uk/interpro/' target='_blank'><font id='Name'>InterPro</font></a>: An integrated resource for protein families, domains and functional sites (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30398656' target='_blank'>Mitchell, <em>et al.</em>, 2019</a>).</p>
<p id='HAMAP'>8. <a href='https://hamap.expasy.org/' target='_blank'><font id='Name'>HAMAP</font></a>: A system for high-quality automated and manual annotation of proteins (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25348399' target='_blank'>Pedruzzi, <em>et al.</em>, 2015</a>).</p>
<p id='ESTHER'>9. <a href='http://bioweb.supagro.inra.fr/ESTHER/general?what=index' target='_blank'><font id='Name'>ESTHER</font></a>: A database of the α/β-hydrolase fold superfamily of proteins (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23193256' target='_blank'>Lenfant, <em>et al.</em>, 2013</a>).</p>
<p id='PANTHER'>10. <a href='http://www.pantherdb.org/' target='_blank'><font id='Name'>PANTHER</font></a>: A resource for the evolutionary and functional classification of genes from organisms across the tree of life. (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30407594' target='_blank'>Mi, <em>et al.</em>, 2019</a>).</p>
<p id='PROSITE'>11. <a href='https://prosite.expasy.org/' target='_blank'><font id='Name'>PROSITE</font></a>: A database of protein domains, families and functional sites (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23161676' target='_blank'>Sigrist, <em>et al.</em>, 2013</a>).</p>
<p id='Pfam'>12. <a href='http://pfam.xfam.org/' target='_blank'><font id='Name'>Pfam</font></a>: A large collection of protein families, each represented by multiple sequence alignments and hidden Markov models (HMMs) (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30357350' target='_blank'>El-Gebali, <em>et al.</em>, 2019</a>).</p>
<p id='SMART'>13. <a href='http://smart.embl.de/' target='_blank'><font id='Name'>SMART</font></a>: A web resource for the identification and annotation of protein domains and the analysis of protein domain architectures (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29040681' target='_blank'>Letunic, <em>et al.</em>, 2018</a>).</p>


<p id='7'><strong class='title'>Interaction</strong></p>
<p id='MEROPS'>1. <a href='http://www.ebi.ac.uk/merops/' target='_blank'><font id='Name'>MEROPS</font></a>: An integrated source of information about peptidases, their substrates and inhibitors (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29145643 ' target='_blank'>Rawlings, <em>et al.</em>, 2018</a>).</p>
<p id='aBiofilm'>2. <a href='http://bioinfo.imtech.res.in/manojk/abiofilm/' target='_blank'><font id='Name'>aBiofilm</font></a>: A resource of anti-biofilm agents and their potential implications in targeting antibiotic drug resistance (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29156005' target='_blank'>Rajput, <em>et al.</em>, 2018</a>).</p>
<p id='PHI-Base'>3. <a href='http://www.phi-base.org/' target='_blank'><font id='Name'>PHI-Base</font></a>: A database providing expertly curated molecular and biological information on genes proven to affect the outcome of pathogen-host interactions (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27915230' target='_blank'>Urban, <em>et al.</em>, 2017</a>).</p>
<p id='IntAct'>4. <a href='https://www.ebi.ac.uk/intact/' target='_blank'><font id='Name'>IntAct</font></a>: An open-source, open data molecular interaction database populated by data either curated from the literature or from direct data depositions (<a href='https://www.ncbi.nlm.nih.gov/pubmed/24234451' target='_blank'>Orchard, <em>et al.</em>, 2014</a>).</p>
<p id='MVP'>5. <a href='http://mvp.medgenius.info/home' target='_blank'><font id='Name'>MVP</font></a>: A microbe-phage interaction database capturing the full dynamics in the interactions between microbes and phages (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29177508' target='_blank'>Gao, <em>et al.</em>, 2018</a>).</p>
<p id='DrugBank'>6. <a href='https://www.drugbank.ca/' target='_blank'><font id='Name'>DrugBank</font></a>: A comprehensive online database containing information on drugs and drug targets (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29126136' target='_blank'>Wishart, <em>et al.</em>, 2018</a>).</p>
<p id='BioGrid'>7. <a href='https://thebiogrid.org/' target='_blank'><font id='Name'>BioGrid</font></a>: An open access database dedicated to the curation and archival storage of protein, genetic and chemical interactions for all major model organism species and humans (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30476227' target='_blank'>Oughtred, <em>et al.</em>, 2019</a>).</p>
<p id='STRING'>8. <a href='https://string-db.org/' target='_blank'><font id='Name'>STRING</font></a>: Protein-protein association networks with increased coverage, supporting functional discovery in genome-wide experimental datasets (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30476243' target='_blank'>Szklarczyk, <em>et al.</em>, 2019</a>).</p>
<p id='ComplexPortal'>9. <a href='https://www.ebi.ac.uk/complexportal/' target='_blank'><font id='Name'>The Complex Portal</font></a>: A manually curated, encyclopaedic resource of macromolecular complexes from a number of key model organisms (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30357405' target='_blank'>Meldal, <em>et al.</em>, 2019</a>).</p>
<p id='RAID v2.0'>10. <a href='http://www.rna-society.org/raid/' target='_blank'><font id='Name'>RAID v2.0</font></a>: RNA-associated interactions across organisms (<a href='https://www.ncbi.nlm.nih.gov/pubmed/27899615' target='_blank'>Yi, <em>et al.</em>, 2017</a>).</p>
<p id='STITCH'>11. <a href='http://stitch.embl.de/' target='_blank'><font id='Name'>STITCH</font></a>: Protein-chemical interaction networks with tissue and affinity data (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26590256' target='_blank'>Szklarczyk, <em>et al.</em>, 2016</a>).</p>
<p id='Mentha'>12. <a href='http://mentha.uniroma2.it/' target='_blank'><font id='Name'>Mentha </font></a>: A resource for browsing integrated protein-interaction networks (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23900247' target='_blank'>Calderone, <em>et al.</em>, 2013</a>).</p>
<p id='DIP'>13. <a href='https://dip.doe-mbi.ucla.edu/' target='_blank'><font id='Name'>DIP</font></a>: The Database of Interacting Proteins (<a href='https://www.ncbi.nlm.nih.gov/pubmed/14681454' target='_blank'>Salwinski, <em>et al.</em>, 2004</a>).</p>
<p id='CAMP R3'>14. <a href='http://www.camp3.bicnirrh.res.in/index.php' target='_blank'><font id='Name'>CAMPR3</font></a>: A database on sequences, structures and signatures of antimicrobial peptides (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26467475' target='_blank'>Waghu, <em>et al.</em>, 2016</a>).</p>

<p id='8'><strong class='title'>Orthologous information</strong></p>
<p id='COG'>1. <a href='https://www.ncbi.nlm.nih.gov/COG/' target='_blank'><font id='Name'>COG</font></a>: A database of Clusters of Orthologous Groups (COGs) of proteins concentrating on prokaryotes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25428365' target='_blank'>Galperin, <em>et al.</em>, 2015</a>).</p>
<p id='OrtholugeDB'>2. <a href='http://www.pathogenomics.sfu.ca/ortholugedb/?page=index' target='_blank'><font id='Name'>OrtholugeDB</font></a>: A bacterial and archaeal orthology resource for improved comparative genomic analysis (<a href='https://www.ncbi.nlm.nih.gov/pubmed/23203876' target='_blank'>Whiteside, <em>et al.</em>, 2013</a>).</p>
<p id='ATGC'>3. <a href='http://dmk-brain.ecn.uiowa.edu/ATGC/' target='_blank'><font id='Name'>ATGC</font></a>: A resource for micro- and macro-evolutionary studies of prokaryotic genomes and protein family annotation (<a href='https://www.ncbi.nlm.nih.gov/pubmed/28053163' target='_blank'>Kristensen, <em>et al.</em>, 2017</a>).</p>
<p id='eggNOG'>4. <a href='http://eggnogdb.embl.de/' target='_blank'><font id='Name'>EggNOG</font></a>: A hierarchical, functionally and phylogenetically annotated orthology resource (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30418610' target='_blank'>Huerta-Cepas, <em>et al.</em>, 2019</a>).</p>
<p id='OrthoDB'>5. <a href='https://www.orthodb.org' target='_blank'><font id='Name'>OrthoDB</font></a>: Providing evolutionary and functional annotations of orthologs (<a href='https://www.ncbi.nlm.nih.gov/pubmed/30395283' target='_blank'>Kriventseva, <em>et al.</em>, 2019</a>).</p>
<p id='OMA'>6. <a href='https://omabrowser.org/' target='_blank'><font id='Name'>OMA</font></a>: A method and database for the inference of orthologs among complete genomes (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29106550' target='_blank'>Altenhoff, <em>et al.</em>, 2018</a>).</p>
<p id='KEGG Orthology(KO)'>7. <a href='https://www.genome.jp/kegg/ko.html' target='_blank'><font id='Name'>KEGG ORTHOLOGY (KO)</font></a>: A database of molecular functions represented in terms of functional orthologs (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26476454' target='_blank'>Kanehisa, <em>et al.</em>, 2016</a>).</p>
<p id='InParanoid'>8. <a href='http://inparanoid.sbc.su.se/' target='_blank'><font id='Name'>InParanoid</font></a>: A database of ortholog groups with inparalogs (<a href='https://www.ncbi.nlm.nih.gov/pubmed/25429972' target='_blank'>Sonnhammer, <em>et al.</em>, 2015</a>).</p>
<p id='PhylomeDB'>9. <a href='http://phylomedb.org/' target='_blank'><font id='Name'>PhylomeDB</font></a>: A public database for complete catalogs of gene phylogenies (phylomes) (<a href='https://www.ncbi.nlm.nih.gov/pubmed/24275491' target='_blank'>Huerta-Cepas, <em>et al.</em>, 2014</a>).</p>
<p id='HOGENOM'>10. <a href='http://doua.prabi.fr/databases/hogenom/home.php' target='_blank'><font id='Name'>HOGENOM</font></a>: A database of homologous gene families for comparative genomics (<a href='https://www.ncbi.nlm.nih.gov/pubmed/19534752' target='_blank'>Penel, <em>et al.</em>, 2009</a>).</p>
<!--<p id='MSA'>11. <font id='Name'>MSA</font></a>: Multiple sequence alignment of orthologous.</p>-->

<p id='9'><strong class='title'>Biological pathway</strong></p>
<p id='BioCyc'>1. <a href='http://www.biocyc.org/' target='_blank'><font id='Name'>BioCyc</font></a>: A collection of microbial genomes and metabolic pathways (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29447345' target='_blank'>Karp, <em>et al.</em>, 2017</a>).</p>
<p id='WikiPathways'>2. <a href='https://www.wikipathways.org' target='_blank'><font id='Name'>WikiPathways</font></a>: A multifaceted pathway database bridging metabolomics to other omics research (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29136241' target='_blank'>Slenter, <em>et al.</em>, 2018</a>).</p>
<p id='KEGG Pathway'>3. <a href='https://www.genome.jp/kegg/pathway.html' target='_blank'><font id='Name'>KEGG PATHWAY</font></a>: A collection of manually drawn pathway maps representing our knowledge on the molecular interaction, reaction and relation networks (<a href='https://www.ncbi.nlm.nih.gov/pubmed/26476454' target='_blank'>Kanehisa, <em>et al.</em>, 2016</a>).</p>
<p id='Reactome'>4. <a href='https://reactome.org' target='_blank'><font id='Name'>Reactome</font></a>: An open-source, open access, manually curated and peer-reviewed pathway database (<a href='https://www.ncbi.nlm.nih.gov/pubmed/29378288' target='_blank'>Jupe, <em>et al.</em>, 2018</a>).</p>



				<br/>
				<p><a href='#'>&nbsp;&nbsp;&#9650;Top</p>
				<br/>
				</div>
			</div>
		</div>
<script>
$(".blk td").mouseover(function(){
					$(this).css("background-color","rgba(251, 205, 189,0.2)");
				});
				$(".blk td").mouseout(function(){
					$(this).css("background-color","rgba(0, 143, 149, 0)");
				});
</script>
		<br class="clearfloat" />
		<?php require("common/foot.php"); ?>