<?php require("common/head-view.php"); ?>
<body>
	<link rel="stylesheet" href="css/view.css" type="text/css" />
	<div id="container">
		<div id='dialog' title='Phosphorylation Site Information'></div>
		<div id='MSAdialog' title='MSA Information'></div>
		<div id='Detaildialog' title=''></div>
		<div id='Seqdialog' title='Sequence'></div>
		
		<div id="popBox" >
			<div class="arrow-outer">  
				<div class="arrow"></div>  
			</div>
			<div id="Boxcontent" ></div>
		</div>
		
		<div id="popBox1" >
			<div class="arrow-outer">  
				<div class="arrow"></div>  
			</div>
			<div id="Boxcontent1" ></div>
		</div>
		
		<div id="detailBox" >
			<div id="DetailBorder"><button id="bt" onclick="closedetailBox()"><img src='images/close1.png' width='14px' height='14px'/></button></div>
			<div id="DetailHead">
				<div id="DetailTitle1" >
					<div id="gn"></div>
					<div id="db"></div>
					<br/>
				</div>
				<div id="DetailTitle2" ></div>
			</div>
			<div id="Detailcontent" ></div>
		</div>
		
		<div id="header">
			<?php require("common/header-view.php"); ?>
		</div>
		<style>
		
			
			
			/*div{border:1px solid black;}*/
			
			/* Global */
			#ViewMain{min-height:500px; height:auto !important; margin-top:20px; }
			#maincontent{/*background-color:#deeff5; */ left:200px; width:1000px; margin-left:200px; float:left;}
			
			/* Dialog */
			#Seqdialog{word-break:break-all;font-family:'Courier New', Courier, monospace;}
			
			
			/* Context_Help */
			#popBox, #popBox1{
				position: absolute;
				display:none;
				max-width:400px;
				
				font-family:Arial,sans-serif,"Open Sans";;
				left:40%;
				top:20%;
				z-index:11;
				background:#333; 
				border-radius: 10px;
			}
			

			#dbdesc{
				color:#F5F5F5;
				margin:.3em .6em ;
				font-weight: 400;
				font-size: .9rem;
				font-style: normal;
				font-family: Verdana,Arial,sans-serif;
			}
			
			#dblink{
				color:#F5F5F5;
				margin:.3em .6em ;
				
				font-weight: 400;
				font-style: normal;
				font-family: Verdana,Arial,sans-serif;
			}
			
			.help a:link,a:visited{text-decoration: none;border-bottom:#F5F5F5 dotted 1px;font-size:12px;}
			.help a:hover,a:active{text-decoration: none;color:#F5F5F5;border-bottom:#F5F5F5 solid 1px;font-size:13px;}
			
			.iu a:link,.iu a:visited{text-decoration: none;border-bottom:#F5F5F5 dotted 0px;font-size:16px;}
			.iu a:hover,.iu a:active{text-decoration: none;color:#996699;border-bottom:#F5F5F5 solid 1px;font-size:16px;}
			
			a.anc:link, a.anc:visited{text-decoration: none;border-bottom: #F5F5F5 dotted 0px;font-size: 12px;font-weight:500;color:#71b360;}
			a.anc:hover,a.anc:active{text-decoration: none;color:#996699;border-bottom:#F5F5F5 solid 1px;font-size:12px;}
			
			
			.arrow-outer{
				width:12px;
				height:7px;
				position:relative;
				top:-7px;
				left:125px;
				overflow:hidden}
				
			.arrow{border:1px solid #333;
				width:10px;
				height:10px;
				position:relative;
				top:4px;
				-webkit-transform:rotate(45deg);
				-o-transform:rotate(45deg);
				background:#333;
				-moz-transform:rotate(45deg);}
			
			#popBox button {
				margin:.3em .6em ;
				float:right;
				height:21px;
				border-radius: 2px;
				background-color: #963C64;
				border: 0px;
				color: #F5F5F5;
				font-size: 15px;
				font-family:Arial,sans-serif,"Open Sans";;
				text-align: center;
			}
			
			/*DetailBox*/
			#detailBox{
				position: fixed;
				display:none;
				left:50%;
				top:50%;
				z-index:25;
				background:#fff; 
				border-radius: 5px;
				border:2px solid rgba(202, 135, 153,0.4);
				
			}
			
			#DetailBorder{
				height:32px;
				background: rgba(202, 135, 153,0.4); 
				text-align:right;
			}
			#DetailBorder button{
				width:28px;
				height:28px;
				border-radius: 14px;
				background-color: #963C64;
				border: 0px;
				color: #fff;
				font-size: 18px;
				font-family: Verdana,Arial,sans-serif;
				text-align: center;
				margin:.1em .4em ;
			}
			
			#DetailTitle1{
				margin:.3em .6em ;

				
				border-radius: 5px;
				color:#333;
				font-family:"Helvetica neue",Helvetica,Arial,sans-serif;
			}
			#gn{
				margin:5px 5px ;
				font-size:17px;
			}
			#db{
				margin:5px 5px ;
				font-size:17px;
			}
			#DetailTitle2{
				text-align:right;
				margin:.3em .6em ;
				
			}
			
			.AnnoDetail{
				width:25px;
				height:13px;
				background-color:rgba(225,225,225,0);
				border:0px;
			}

			
			#detailclose button{
				margin:.3em .6em ;
				float:right;
			}
			
			.dettab{
				margin:.3em .6em ;
				font-family: Arial,sans-serif,"Open Sans";;
			}
			.dettab td{
				text-align: center;
				white-space: nowrap;
			}
			.dettab th{
				white-space:nowrap;
			}
			.min{max-width:900px;overflow-x:auto;margin-left:0px;max-height:480px;}
			
			/* Font */
			/*.type{color:#EE7942;-webkit-margin-after: 0.5em;}*/
			.type{color:rgba(202,135,153,1);font-weight:bold;font-size:21px;margin-top:22px;-webkit-margin-after: 18px;}
			.type1{color:rgba(202,135,153,1);font-weight:bold;font-size:18px;margin-top:10px;-webkit-margin-after: 10px;}
			
			/* MSA info */
			#MSAdialog{height:600px;}
			#MSAdialog td{background-color:#efefef; font-family: 'Courier New', Courier, monospace; font-weight:bold; font-size:17px;color:#333;}
			/*#MSAdialog th{background-color:white; font-family: 'Courier New', Courier, monospace; font-weight:bold; font-size:17px;padding-right:0px;}*/
			th#fmt{background-color:#efefef; font-family: 'Courier New', Courier, monospace; font-weight:bold; font-size:17px;color:#333;}
			th.org{text-align:right;width:50px;}
			td.seq{text-align:center;width:50px;}
			th.cogid{text-align:left;width:50px;}
			.Ide{background-color:#EE7942}
			.Ort{background-color:#B0E2FF}
			#diatab{margin-top:20px;}
			#diatab td{background-color:#fff;font-family:Arial,sans-serif,"Open Sans";;font-weight:bold; }
			.sub{float:right;background-color:#438496;border:0px;font-family:Verdana,Arial,sans-serif;color:#fff;height:21px;border-radius:2px;font-weight:normal;font-size:25px;}
			th.one,td.one{background-color:#fff;text-align:right;width:50px;padding-right:8px;font-family:Arial,sans-serif,"Open Sans";;font-size:15px;color:rgba(103, 108, 127, 1);}
			th.two,td.two{background-color:#efefef; font-family: 'Courier New', Courier, monospace; font-weight:bold; font-size:17px;color:#333;text-align:center;width:150px;}
			td.three,th.three{background-color:#fff;text-align:left;width:50px;padding-left:8px;font-family:Arial,sans-serif,"Open Sans";;font-size:15px;}

			/* Annolist */
			#Annolist{display:none; min-width:1300px; width:95%; height:40px; margin:-10px auto; line-height:30px; border-radius:10px; font-size:16px; }
			#Annolist ul{-webkit-padding-start:0px; -webkit-margin-before:0; padding-left:0;}
			#Annolist li{float:left; margin-top:2px; margin-right:10px; list-style: none; border-radius:5px; padding:3px; background-color:rgba(255,153,153, 0);}
			#Annolist a:link {text-decoration: none;color:rgba(103,108,127,0.8);font-weight:normal;}
			#Annolist a:hover {text-decoration: none;color:rgba(103,108,127,1);font-weight:bold;}
			#Annolist a:visited {text-decoration: none;color:rgba(103,108,127,1);font-weight:bold;}
			.db{display:none; position:absolute;z-index:9999;background-color:rgba(239,239,239,0.8); border-radius:10px; margin-top:2px;}
			.db li{clear:both; height:25px;margin-left:3px;}
			
			/* sideview */
			#sideview{display:none; position:fixed; width:160px; height:200px; margin-top:60px;}
			.sideview li{height:30px;background-color:rgba(202,135,153,0.8);margin-left:-20px;margin-top:2px;line-height:30px; font-weight:bold;border-radius:10px;}
			.sideview a:link {text-decoration: none;color:rgba(255,255,255,1);font-size: 16px;}
			.sideview a:visited {text-decoration: none;color:rgba(255,255,255,1);border-bottom:rgba(202,135,153,0.8) dotted 1px;font-size: 16px;}
			.sideview a:hover {text-decoration: none;color:rgba(202,135,153,1);border-bottom:rgba(202,135,153,1) dotted 1px;}
			.sideview a:active {text-decoration: none;color:rgba(255,255,255,1);border-bottom:rgba(255,255,255,1) dotted 1px;}
			

			.annoside li{background-color:rgba(255,255,255,0);margin-left:10px;margin-top:13px;margin-right:10px;margin-bottom:0px;font-weight:bold;font-size:20px;border-radius:0px;text-align:left;font-family:Arial,sans-serif,"Open Sans";;line-height:20px;}
			.annoside a:link {text-decoration: none;color:rgba(255,255,255,1);font-size:13px;margin-top:-18px;}
			.annoside a:visited {text-decoration: none;color:rgba(255,255,255,1);border-bottom:rgba(202,135,153,0.8) dotted 0px;font-size:13px;margin-top:-20px;}
			.annoside a:hover {text-decoration: none;color:#963c64;margin-top:-20px;}
			.annoside a:active {text-decoration: none;color:#963c64;margin-top:-20px;}
			
			.annoside{
				display:none;			
				padding-left:0px;
			}
			.annoimg{
				display:none;
			}
			
			.lnkpg {
				display: block;
				list-style-position: outside;
				
			}
			
			.arrow_box {
	position: absolute;
	background: #963c64;
	border: 2px solid #963c64;
	border-radius: 3px;
	height:22px;
	width: 110px;
	margin-top: 0px;
}
.arrow_box:after, .arrow_box:before {
	left: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}
.arrow_box:after {
	border-color: rgba(150, 60, 100, 0);
	border-left-color: #963c64;
	border-width: 10px;
	margin-top: -10px;
}
.arrow_box:before {
	border-color: rgba(150, 60, 100, 0);
	border-left-color: #963c64;
	border-width: 13px;
	margin-top: -13px;
}

			#sideimgup{
				display:none;
				padding-top:5px;
			}
			#sideimgdown{
				padding-top:5px;
			}
			
			/*.sideview a:active {text-decoration: none;}*/
			
			.context_desc{
				font-family: Arial,sans-serif,"Open Sans";;
				
				font-size: 15px;
				color:rgba(103,108,127,1);
			}
			
			#dt{
				font-family: Arial,sans-serif,"Open Sans";;
				font-size: 14px;
				color:rgba(103,108,127,1);
			}
			
			.keydes{
				color:rgba(103,108,127,1);
			}
			
			/* Slider */
			.sliderbutton{float:left;width:36px;margin-bottom:5px;color:#fff;background-color:#963C64;border:0px;height:21px;border-radius:2px;font-family: Verdana,Arial,sans-serif;}
			#slider{float:left; width:250px; margin-left:20px; margin-right:20px; margin-top:3px;border:1px solid rgba(202,135,153,1);}
			#SVGView{width:980px; overflow-x:auto;/*background-color:#F0FFF0;*/margin-bottom:40px;}
			#block1{ margin-top:30px;}
			
			/* View1 */
			#View1{height:300px;}
			#GeneName{float:left;width:280px;margin-left:20px;}
			
			#AnnoBu{float:right;width:220px;height:60px;margin-right:10px;line-height:30px;font-size:20px;}
			#Annotationa{text-align:center; height:40px;width:240px; margin-top:15px; border-radius:5px; font-size:21px; background-color:rgba(204,153,153,0.7); line-height:40px;}
			
			#Overview{float:left; width:550px;padding:10px 10px 20px 10px}
			#Basic{clear:left;}
			.array{
				/*background-color:#F0FFF0;*/
				padding-bottom:15px;
				text-align:left; 
				line-height:1.3;
			}
			.array .tablabel{border-right:rgba(103, 108, 127, 1) dotted 1.3px}
			.third{border-left:rgba(103, 108, 127, 1) dotted 1.3px}
			
			.arrayy{
				/*background-color:#F0FFF0;*/
				width:970px;
				text-align:left; 
				line-height:1.3;
				border:1px solid black; 
				border-collapse:collapse;
				margin-bottom:50px;
			}
			.arrayy td,.arrayy th,.array2 td,.array2 th{
				border: 1px solid rgba(202,217,234,1);
			}
			.arrayy th,.array2 th{
				font-weight:bold;
				background-color: rgba(0,143,149,0.2);
				line-height:1.4;
				font-family:Arial,sans-serif,"Open Sans";;
			}
			
			#fun{color:rgba(103,108,127,1)}
			
			.array2{background-color:#fff;width:940px; font-weight:bold;text-align:left; line-height:1.3;border:1px solid black; border-collapse:collapse;}
			
			/*.arrayy .site:nth-child(even){
				background: #eff3f5;
			}*/
			
			.array1{/*background-color:#F0FFF0;*/width:550px; text-align:left; }
			.tablabel{text-align:right; color:rgba(103,108,127,1);font-family:Arial,sans-serif,"Open Sans";;font-size:100%;font-size: 16px;}
			.content{font-family:"Helvetica neue",Helvetica,Arial,sans-serif;font-size:99%;}
			#content1{border-style: none solid none none;border-right-color: #669999;}
			#content2{border-style: none solid none none;border-right-color: #996699;}
			#content3{border-style: none solid none none;border-right-color: #CC9999;}
			#content4{border-style: none solid none none;border-right-color: #9999CC;}
			#content5{border-style: none solid none none;border-right-color: #999933;}
			#content6{border-style: none solid none none;border-right-color: #CC99CC;}
			#content7{border-style: none solid none none;border-right-color: #CC9966;}
			.contentt{font-weight:bold;padding-left:10px;width:270px;font-size: 16px;font-family: "Helvetica neue",Helvetica,Arial,sans-serif;}
			.third{padding-left:10px;text-align:left;font-size: 16px;font-weight:bold;font-family: "Helvetica neue",Helvetica,Arial,sans-serif;}
			
			.contentt a:link, a:visited{text-decoration: none;border-bottom: #F5F5F5 dotted 0px;font-size: 15px;}
			.third a:link, a:visited{text-decoration: none;border-bottom: #F5F5F5 dotted 0px;font-size: 15px;}
			.contentt a:hover,a:active{text-decoration: none;color:#996699;border-bottom:#996699 dotted 1px;font-size: 15px;}
			.third a:hover,a:active{text-decoration: none;color:#996699;border-bottom:#996699 dotted 1px;font-size: 15px;}
			
			
			.second{color:rgba(103,108,127,1);font-family:Arial,sans-serif,"Open Sans";;font-size:100%;text-align:left;padding-left:10px;font-size: 16px;}
			.pad{padding-right:12px;}
			
			#Structure{float:right; width:400px; margin-right:30px;text-align:center;padding:15px 0px 20px 0px}
			#PTMPDB{display:none;float:right; width:395px; height:320px; position: relative; text-align:center; vertical-align:middle;}
			#site{font-size:20px;font-weight:bold;color:#9fc5e8;}
			#Function p{line-height:1.5;}
			#struPDB{border-right: dotted 1.3px;color:rgba(103,108,127,1);font-weight:normal;}
			#chainPDB{color:#666666;font-weight:bold;height:1px;}
			#pdbsite{color:rgba(103,108,127,0.8);border:1px solid rgba(202,135,153,1);width:81px;height:18px;}
			#Refresh{background-color:#963C64;border:0px;width:63px;height:18px;font-family: Verdana,Arial,sans-serif;color:#fff;}
			
			#Annotable{width:900px;text-align:center;margin:auto;}
			#Annotable td{width:225px;}
			hr{
				text-align:center; 
				width:95%;
				height:3px;border:none;
				border-top: 1px solid #820336;
				border-bottom: 1px dashed #820336;
			}
			.hr1{
				text-align:center; 
				width:95%;
				height:3px;border:none;
				border-top: 0px;
				border-bottom: 1px dashed #820336;
			}
			#Sites{display:none;}
			#PTMView{margin-left:15px; height:30px;}
			.PTMView{background-color: #438496;color: #fff;border-radius: 2px;font-family: Verdana,Arial,sans-serif;border: 0px;height:21px;}
			
			sup {font-size: 12px;font-family: Bookman,Garamond,serif;padding-left: 2px;}
			.xref_category{margin-top:0.75em;margin-bottom:0.25em;padding-top:0.7em;font-weight:600;font-size:100%;padding-left:0;}
			.databaseTable{
				border-spacing: 4px;
			}
			.OneSite,.MSA{
				background-color: #438496;color: #fff;border-radius: 2px;font-family: Verdana,Arial,sans-serif;border: 0px;height:21px;
			}
			.annodb{
				border-right:rgba(103, 108, 127, 1) dotted 1px;
				font-family:Arial,sans-serif,"Open Sans";;
				
				font-weight:300;
				font-weight:510;
				text-align:right;
				font-size:15px;
				border-collapse:collapse;
				width:170px;
				color:rgba(103,108,127,1);
				}
			#isup{
				color:#963c64;
				font-weight: 600;
			}
			.annoacc{
				font-family:Arial,sans-serif,"Open Sans";;
				font-size:14px;
				font-weight:400;
				padding-left:3px;
				border-collapse:collapse;
				width:245px;
			}
			.annoacc a:link, a:visited{text-decoration: none;border-bottom: #F5F5F5 dotted 0px;font-size: 14px;}
			.annoacc a:hover,a:active{text-decoration: none;color:#996699;border-bottom:#996699 dotted 1px;font-size: 14px;}
			
			
			
			#Annotation h4{
				-webkit-margin-before: 1.33em;
				-webkit-margin-after: .3em;
				-webkit-margin-start: 0px;
				-webkit-margin-end: 0px;
				font-weight: bold;
				font-size: 18px;
				font-family:Arial,sans-serif,"Open Sans";;
				color:#963c64;
				height:25px;
				width: 320px;
				background-color:rgba(255,255,255,0.6);
				box-shadow:3px 3px 5px 2px #963c64;
				border-radius:3px;
				border-bottom:0px dashed #963c64; 
				border-width:0px;
				text-align: center;
				margin-left:23px;
				line-height: 25px;
			}
			
			#Keytab{font-weight:bold;width:400px;margin-top:20px;font-family:Arial,sans-serif,"Open Sans";}
			#Gotab{font-weight:bold;text-align:left; width:900px;margin-top:20px;font-family:Arial,sans-serif,"Open Sans";;}
			.gotd{color:rgba(103,108,127,1);}
			
			/*Buttons*/
			.hidebtn{
				background-color:#963C64;
				border-radius:4px;
				border: 0px;
				width:100px;
				height:24px;
				font-family: Verdana,Arial,sans-serif;
			}
			.hidebtn a:link {text-decoration: none;color:#fff;font-size:14px;}
			.special{font-size:18px;}
			.hidebtn a:visited {text-decoration: none;color:#fff;font-size:14px;}
			.hidebtn a:hover {text-decoration: none;color:#fff;font-size:15px;}
			.hidebtn a:active {text-decoration: none;color:#fff;font-size:15px;}
			#Pseq,#CDSseq{
				background-color: #963C64;
				border: 0px;
				height:20px;W
				font-family: Verdana,Arial,sans-serif;
				color: #fff;
				border-radius: 1px;
			}

			#dialog a:link, a:visited{border-bottom:#F5F5F5 dotted 0px;font-size:16px;color:rgba(0,143,149,1);text-decoration:none;}
			#dialog a:hover,a:active{text-decoration: none;color:#996699;border-bottom:#996699 dotted 1px;font-size: 16px;}
			
			.path {
  stroke-dasharray: 10000;
  stroke-dashoffset: 10000;
  animation: dash 1s linear forwards;
  animation-delay: 1s;
    -webkit-animation: dash 20s linear forwards;
}

@keyframes dash {
  to {
    stroke-dashoffset: 0;
  }
}
			
			
		</style>
		<div id='Annolist'></div>
		<div id="ViewMain">
			<div id="sideview">
				<?php require("sideview.php"); ?>
			</div>
			<div id="maincontent">
				<div id='View1'>
					<div id='Overview'>
						<div>
							<div id='GeneName'></div>
							<div id='AnnoBu'></div>
						</div>
						<div id='Basic'></div>
					</div>
					<div id='Structure'>
						<div id='PTMPDB'></div>
					</div>
				</div>
				<p class="clearfloat"></p>
				<div id='Sites'>
					<p class='tmp'></p>
					<p class='type'>&#9660;&nbsp;Sites</p><hr size=1/>
					<!--<div id='block1'><div><button class='sliderbutton' id='1'>Min</button></div><div id='slider'></div><div><button class='sliderbutton' id='6'>Max</button></div></div>-->
					<div id='SVGView'>
						<div class='SVG' id='' style='border:2px solid rgba(202,135,153,0.4); width:970px; height:100px'></div>
					</div>
				</div>
				<div id='PTMs'></div>
				<div id='Nomenclature'></div>
				<div id='Function'></div>
				<div id='Annotation'></div>
				<div id='Sequence'></div>
				<div id='CDS'></div>
				<div id='Keyword'></div>
				<div id='GO'></div>
				<div id='tmp'></div>
			</div>
		</div>
		<script src="js/3Dmol.js"></script>
		<script type="text/javascript" src="js/ui/jquery.js"></script>
		<script type="text/javascript" src="js/ui/jquery-ui.min.js"></script>
		<link href="js/ui/jquery-ui.css" rel="stylesheet">
		<script>
			function getSearchString(name){
				var reg= new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
				var r=window.location.search.substr(1).match(reg);
				if(r != null){
					return unescape(r[2]);
				}
				return null;
			}
			function createRow(tag,content){
				if(content!=''){
					var $row="<tr><td class='tablabel'>"+tag+"&nbsp;&nbsp;</td><td class='contentt'>"+content+"</td></tr>";
					return $row;
				}else{
					return "";
				}
			}
			function list2link1($pre,$after,$list){
				if($list!=""){
					$array=$list.split("; ");
					var $links='';
					for(var k in $array){
						$links=$links+"<a href='"+$pre+$array[k]+$after+"' target='_blank'>"+$array[k]+"</a>; ";
					}
					$links = $links.substr(0,$links.length-2);
					return $links;
				}else{
					return "";
				}
			}
			function seqDisplay($seq){
				var $seqDisplay='';
				var $len= $seq.length;
				var $nla = Math.floor($len/10);
				var $i=0;
				while($i<=$nla){
					var $parts =$seq.substr($i*10,10);
					if($i>6 && $i%7==0){
						var $total = $i*10;
						$seqDisplay = $seqDisplay+$total+"<br>"+$parts+" ";
					}else{
						$seqDisplay = $seqDisplay+$parts+" ";
					}
					$i++;
				}
				//if($len%10 != 0){
					$seqDisplay = $seqDisplay+$len;
				//}
				return $seqDisplay;
			}
			function strlink($pre, $item, $after,$num){
				var $ite=$item.substr(0,$num);
				var $aftitm=$item.substr($num+1);
				return "<a href='"+$pre+$ite+$after+"' target='_blank'>"+$ite+"</a>--"+$aftitm+"<br/>";
			}
			
			
			function arraylinks($pre, $items, $after,$num){
				var $links="<p>";
				for(var k in $items){
					if($items[k]!=''){
						$links = $links+(strlink($pre, $items[k], $after,$num));
					}
				}
				$links=$links+"</p>";
				return $links;
			}
			
			
			$.ptmSVG=function($width, $data){
				var $svg=$data.split(";;");
				var $link1={dbPTM:"<a href='http://dbptm.mbc.nctu.edu.tw/index.php' target='_blank'>dbPTM 2016</a>",PHOSIDA:"<a href='http://141.61.102.18/phosida/index.aspx' target='_blank'>PHOSIDA</a>", SysPTM:"<a href='http://lifecenter.sgst.cn/SysPTM/' target='_blank'>SysPTM 2.0</a>", UniProt:"<a href='http://www.uniprot.org/' target='_blank'>UniProt</a>"};
				var $out="<svg width='100%' height='100%' version='1.1' xmlns='http://www.w3.org/2000/svg'><g><text class='gray' x='10' y='25' font-size='16' font-weight=bold >"+ $svg[0] +"</text><text class='gray' x='10' y='45' font-size='16' font-weight=bold>"+ $svg[1] +"</text>";
				
				//$out=$out+"<rect x='110' y='50' width='"+$width+"' height='20' rx='4' ty='4' stroke='rgb(99,99,99)' fill='#fff'></rect>";
				
				// Sites
				var $one=$width/$svg[2];
				var $site=$svg[3].split(";");
				for(i=0;i<$site.length;i++){
					var $two=$site[i].split(",");
					var $x=$one * $two[0] +110;
					
					//$out=$out+"<rect class='position' x='"+$x+"' y='50' width='"+(0.8*$one)+"' height='20' title='"+$two[1]+"' name='"+$two[0]+"' fill='#87CEFA' data-s='"+$two[1]+"' data-pk='"+$two[2]+"'></rect>";
				}
				
				// Scale
				var $gap=10;
				for(i=1;($one*i*4)<(8*($svg[2].length));i++){
					$gap=10*i;
				}
				
				//$out=$out+"<text class='gray' x='105' y='86' font-size='16'>"+1+"</text>";
				
				//for(i=1;(i*$gap)<$svg[2];i++){
					//var $x=i * $gap;
					
					//$out=$out+"<text class='gray' x='"+($one*$x+110)+"' y='48' font-size='16'>|</text>";
					//$out=$out+"<text class='gray' x='"+($one*$x+110)+"' y='48' font-size='16' transform='rotate(330, "+($one*$x+110)+" 32)'>"+$x+"</text>";
					
					//$out=$out+"<text x='"+($one*$x+110)+"' y='48' font-size='16'>|"+$x+"</text>";
				//}
				
				//$out=$out + "<text class='gray' x='"+($width+113)+"' y='86'>"+$svg[2]+"</text>";
				
				$out=$out + "</g><g>";
				//
				if($svg[4]!=""){
					$(".SVG").css({height:"250px"});
					$out=$out +"<line x1=110 y1=200 x2="+($width+115)+" y2=200 style='stroke:rgb(99,99,99);stroke-width:1'/>"; //x
					//$out=$out +"<line x1="+($width+110)+" y1=195 x2="+($width+115)+" y2=200 style='stroke:rgb(99,99,99);stroke-width:1.5'/>";
					//$out=$out +"<line x1="+($width+110)+" y1=205 x2="+($width+115)+" y2=200 style='stroke:rgb(99,99,99);stroke-width:1.5'/>";
					$out=$out +"<line x1=110 y1=200 x2=110 y2=30 style='stroke:rgb(99,99,99);stroke-width:1'/>"; //y
					//$out=$out +"<line x1=115 y1=100 x2=110 y2=95 style='stroke:rgb(99,99,99);stroke-width:1.5'/>";
					//$out=$out +"<line x1=105 y1=100 x2=110 y2=95 style='stroke:rgb(99,99,99);stroke-width:1.5'/>";
					$out=$out +"<line x1=110 y1=50 x2=115 y2=50 style='stroke:rgb(99,99,99);stroke-width:1'/>";
					$out=$out +"<text class='gray' x=86 y=58 font-size='16'>1</text>";
					$out=$out +"<text class='gray' x=79.5 y=133 font-size='16'>0.5</text>";
					//$out=$out +"<text x=75 y=178 font-size='16'>0.25</text>";
					$out=$out +"<line x1=110 y1=125 x2="+($width+110)+" y2=125 style='stroke:rgba(255,97,97,0.6);stroke-width:1;stroke-dasharray:3;'/>";
					var aa=$svg[4].split(",");
					var points="";
					for(i=0;i<aa.length;i++){
						points=points+" "+((i+0.5)*$one+110)+","+(190-140*aa[i]);
					}
					
					for(j=0;j<$site.length;j++){
						var $two=$site[j].split(",");
						var $x=$one * $two[0] +110;
						var $y=190-140*aa[$two[0]-1];
						//$out=$out+"<rect class='position' x='"+$x+"' y='30' width='"+(0.8*$one)+"' height='"+($y-30)+"' title='"+$two[1]+"' name='"+$two[0]+"' fill='#87CEFA' data-s='"+$two[1]+"' data-pk='"+$two[2]+"' style='stroke:#87CEFA;stroke-width:1;stroke-dasharray:3;'></rect>";
						
						$out=$out +"<line x1="+$x+" y1=30 x2="+$x+" y2="+$y+" style='stroke:rgba(255,97,97,0.6);stroke-width:3;stroke-dasharray:4;'/>";
						$out=$out+"<rect class='position' x='"+($x-3)+"' y='30' width='"+6+"' height='"+6+"' title='"+$two[1]+"' name='"+$two[0]+"' fill='#fff' data-s='"+$two[1]+"' data-pk='"+$two[2]+"' style='stroke:#FF6161;stroke-width:2;'></rect>";
						//+"<line x1="+$x+" y1=30 x2="+($x+10)+" y2=10 style='fill:none;stroke:#FF6161;stroke-width:2;'/>"+"<text class='gray' x='"+($x+10)+"' y='15' font-size='11' >"+$two[1]+"</text>"
					}
					
					
					
					$out=$out +"<polyline class='path' points='"+points+"' style='fill:none;stroke:#87CEFA;stroke-width:2;'/>";
					if($svg[7]!="NT"){
						var bb=$svg[7].split(",");
						var points2="";
						for(i=0;i<bb.length;i++){
							points2=points2+" "+((i+0.5)*$one+110)+","+(190-140*bb[i]);
						}
						$out=$out +"<polyline class='path' points='"+points2+"' style='fill:none;stroke:#BC80BD;stroke-width:2;'/>";
						
					}
					
					for(i=1;(i*$gap)<$svg[2];i++){
						var $x=i * $gap;
						
						//$out=$out+"<text class='gray' x='"+($one*$x+110)+"' y='48' font-size='16'>|</text>";
						$out=$out+"<text class='gray' x='"+($one*$x+110)+"' y='220' font-size='16' >"+$x+"</text>";
						
						//$out=$out+"<text x='"+($one*$x+110)+"' y='48' font-size='16'>|"+$x+"</text>";
					}
					
					$out=$out+"<text class='gray' x='30' y='220' font-size='16' >Residue position</text>";
					$out=$out +"<line x1="+($one*$x-80)+" y1=240 x2="+($one*$x-60)+" y2=240 style='fill:none;stroke:#87CEFA;stroke-width:2;'/><text class='gray iu' x="+($one*$x-55)+" y=245 font-size='15' font-weight=bold>Disorder propensity (<a class='anc' id='iupred' href='Links.php#IUPred2A' target='_blank'  title='A web interface that allows to identify disordered protein regions.'>IUPred2</a>)</text>";
					if($svg[7]!="NT"){
						$out=$out +"<line x1="+($one*$x-400)+" y1=240 x2="+($one*$x-380)+" y2=240 style='fill:none;stroke:#BC80BD;stroke-width:2;'/><text class='gray iu' x="+($one*$x-375)+" y=245 font-size='15' font-weight=bold>Disordered binding region (<a class='anc' id='anchor' href='Links.php#IUPred2A' target='_blank'  title='A web interface that allows to identify disordered binding regions.'>ANCHOR2</a>)</text>";
					}
					
					
					
					
					$(".anc1").click(function(){
								var X = $(this).parent().position().left;
								var Y = $(this).parent().position().top+24;
								$("#popBox1").css({left:X,top:Y});
								
								var dbtag=$(this).attr("id");
								//read file and get info	
								
									var $desc='';
									var $link='';
									if(dbtag!="anchor"){
										$desc='IUPred2 Description';
										$link='IUPred2 Link';
									}else{
										$desc='Anchor2 Description';
										$link='Anchor2 Link';
									}
									
									var out="<div class='help'><p id='dbdesc'>"+$desc+"</p><br/><a id='dblink' href='"+$link+"' title='The Link to "+dbtag+".' target='_blank' id='linkmore'>Go to "+dbtag+" <span class='special'>&raquo;</span></a></div><button onclick='closeBox1()'>Close</button>";
								$("#Boxcontent1").html(out);
								

								popBox1();
								$("#popBox1 button").mouseover(function(){
									$(this).css("font-size","16px");
								});
								$("#popBox1 button").mouseout(function(){
									$(this).css("font-size","15px");
								});
									//$("#Helpdialog").html(out);
									//$("#Helpdialog").dialog("open");
									//$("#Helpdialog").dialog({width:'400px',position: '100px'});
							});
					//Surface accessbility
					//if($svg[5]!=''){
					//	$(".SVG").css({height:"280px"});
					//	$out=$out +"<line x1=110 y1=250 x2=130 y2=250 style='fill:none;stroke:#FFC0CB;stroke-width:2;'/><text x=135 y=255 font-size='16'>Surface accessbility</text>";//lab
					//	$out=$out +"<line x1="+($width+115)+" y1=100 x2="+($width+115)+" y2=200 style='stroke:rgb(99,99,99);stroke-width:1'/>";//y
					//	$out=$out +"<line x1="+($width+115)+" y1=110 x2="+($width+120)+" y2=110 style='stroke:rgb(99,99,99);stroke-width:1'/>";
					//	$out=$out +"<text x="+($width+120)+" y=118 font-size='16'>"+$svg[5]+"</text>";
					//	var asa=$svg[6].split(",");
					//	var asapoints="";
					//	for(i=0;i<asa.length;i++){
					//		asapoints=asapoints+" "+((i+0.5)*$one+110)+","+(190-80*asa[i]);
					//	}
					//	$out=$out +"<polyline points='"+asapoints+"' style='fill:none;stroke:#FFC0CB;stroke-width:2;'/>";
					//}
				}
				$out=$out + "</g></svg>";
				$(".SVG").html($out);
				
				$(".position").tooltip();
				// 
				$(".position").click(function(){
					var $id=$(this).attr("data-s");
					$("#dialog").html("<font id='site' style='font-weight:bold;font-size:22px;'>"+$id+"</font><br/><br/>");
					var pk=$(this).attr("data-pk");
					if(pk==''){
						//$("#dialog").append("No result.<br/>");
					}else{
						var one=pk.split("!");
						var two=one[0].split("#");
						if(two[0] in $link1){
							two[0] = $link1[two[0]]+"&nbsp;&nbsp;[Database]";
						}else{
							two[0] = "<a href='https://www.ncbi.nlm.nih.gov/pubmed/"+two[0]+"' target='_blank'>"+two[0]+"</a>"+"&nbsp;&nbsp;[Literature]";
						}
						
						
						var out="<table><tr><td><font style='font-weight:bold;font-size:20px;'>References:&nbsp;</font></td><td>"+two[0]+"</td></tr>";
						
						if(one.length!=1){
							for(var i=1;i<one.length;i++){
								two=one[i].split("#");
								if(two[0] in $link1){
									two[0] = $link1[two[0]]+"&nbsp;&nbsp;[Database]";
								}else{
									two[0] = "<a href='https://www.ncbi.nlm.nih.gov/pubmed/"+two[0]+"' target='_blank'>"+two[0]+"</a>"+"&nbsp;&nbsp;[Literature]";
								}
								out=out+"<tr><td></td><td>"+two[0]+"</td></tr>";
							}
						}
						out=out+"</table>";
						$("#dialog").append(out);
					}
					$("#dialog").dialog("open");
				});
			}
			
			
			$.ptmPDB=function($line,$chain){
				var colorSS=function(atom){
					if(atom.ss == 'h') return "Yellow";
					else if(atom.ss == 's') return "DeepSkyBlue";
					else return "Snow";
				};
				var element=$("#PTMPDB");
				element.css({'border-style':"dotted",'border-color':"rgba(202, 135, 153, 0.4)",'border-width':"2px"});
				var config={backgroundColor:'#FBF7F8'};
				var viewer=$3Dmol.createViewer(element,config);
				all='';
				var chain=$chain.split(",");
				$.get("File.php",{file:"PDB/6--PDB-Final.txt",id:$line},function(response){
					response=response.replace(/[\r\n]/g,'');
					var data=response.split("\t");
					$.get("File.php",{file:data[3],id:data[4]},function(res){
						res=res.replace(/;;/g,'\n');
						viewer.addModel(res,"pdb");
						//viewer.setStyle({cartoon: {colorfunc: colorSS}});
						viewer.setStyle({cartoon:{}});
						for(var k in chain){
							viewer.setStyle({chain:chain[k]},{cartoon: {colorfunc: colorSS}});
						}
						viewer.zoomTo();
						viewer.render();
						// PTMs
						all=data[2];
						var amino=data[2].split(";");
						for(var a in amino){
								var info=amino[a].split(",");
								var pat=new RegExp(info[0]);
								if(pat.test($chain)){
									//$(".tmp").append(amino[a]+"<br>");
									$("#pdbsite").append("<option value='"+amino[a]+"'>"+info[0]+": "+info[2]+info[4]+"</option>");
									var atoms=viewer.getModel().selectedAtoms({chain:info[0], resn:info[1], resi:info[3], atom:"C"}); //var atoms=viewer.getModel().selectedAtoms({chain:info[0], resn:info[1], resi:info[3], atom:"CB"});
									//viewer.setStyle({chain:info[0], resn:info[1], resi:info[3]}, {cartoon: {colorfunc: colorSS}, stick:{}});
									//viewer.setStyle({chain:info[0], resn:info[1], resi:info[3]}, {cartoon: {color:"OrangeRed"}});
									//$(".tmp").append(atoms.length+": "+info[3]+".");
									for(var b in atoms){
										var atom = atoms[b];
										var l=viewer.addLabel(info[2]+info[4], {backgroundColor:'#B8B8B8', backgroundOpacity:0.5, fontSize : 12, fontColor:'black', position:{x : atom.x, y : atom.y, z : atom.z}});
										//atom.label = l;
									}
								}
							}
							viewer.zoomTo();
							viewer.render();
					});
					// Rotate
					var rotate=setInterval(function(){viewer.rotate(2);},50);
					element.mouseout(function(){
						clearInterval(rotate);
						rotate=setInterval(function(){viewer.rotate(2);},50);
					});
					element.mouseover(function(){
						clearInterval(rotate);
					});
					//$(".tmp").append(all);
					//
					$("#Refresh").click(function(){
						var option=$("#pdbsite option:selected").val();
						if(option=='All'){
							option=all;
						}
						viewer.removeAllLabels();
						var amino=option.split(";");
						for(var k in chain){
							viewer.setStyle({chain:chain[k]},{cartoon: {colorfunc: colorSS}});
						}
						for(var a in amino){
								var info=amino[a].split(",");
								var pat=new RegExp(info[0]);
								if(pat.test($chain)){
									//$(".tmp").append(amino[a]+"<br>");
									$("#pdbsite").append("<option value='"+amino[a]+"'>"+info[0]+": "+info[2]+info[4]+"</option>");
									var atoms=viewer.getModel().selectedAtoms({chain:info[0], resn:info[1], resi:info[3], atom:"CB"});
									viewer.setStyle({chain:info[0], resn:info[1], resi:info[3]}, {cartoon: {color:"red"}});
									//$(".tmp").append(atoms.length+": "+info[3]+".");
									for(var b in atoms){
										var atom = atoms[b];
										var l=viewer.addLabel(info[2]+info[4], {backgroundColor:'#B8B8B8', backgroundOpacity:0.5, fontSize : 12, fontColor:'black', position:{x : atom.x, y : atom.y, z : atom.z}});
										atom.label = l;
									}
								}
							}
							viewer.zoomTo();
							viewer.render();
						//$(".tmp").append(option+"<br/>");
					})
				});
			}
			
			
			
			$.ptmView=function(data){
				var site=data.split("##");
				var known="";
				var conserved="";
				for(var k in site){
					var asite=site[k].split("??");
					if(asite[5]=='Orthology'){
						asite[5]='Conserved';
						asite[7]=Math.round(asite[7]*1000)/1000;
						//conserved=conserved+"<tr class='site'><td>"+asite[0]+"</td><td class='couriernew'>"+pep(asite[2])+"</td>";
						
					}else{
						asite[5]='Known';
						known=known+"<tr class='site'><td>"+asite[0]+"</td><td class='couriernew'>"+pep(asite[2])+"</td>";
						known=known+"<td><button class='OneSite' id="+asite[0]+">View</button></td></tr>";
						known=known+Rawpeptide(asite[4],asite[1],asite[0]);
					}
				}
				//
				var all='';
				if(known!=''){
					all="<hr size=1 class='hr1'/><p class='type1'><img src='images/down1.png' width='17px' height='13px'/>&nbsp;Experimentally identified p-sites&nbsp;&nbsp;&nbsp;&nbsp;<button class='PTMView'>View all original phosphopeptides</button></p><table class='arrayy' cellpadding='4' cellspacing=0 border=2><tr align='center'><th>Position</th><th>Phosphopeptide</th><th>References</th></tr>"+known+"</table>";
				}
				if(conserved!=''){
					all=all+"<hr size=1 class='hr1'/><p class='type1'><img src='images/down1.png' width='17px' height='13px'/>&nbsp;Potentially conserved p-sites</p><table class='arrayy' cellpadding='4' cellspacing=0 border=1><tr align='center'><th>Position</th><th>Phosphopeptide</th></tr>"+conserved+"</table>";
				}
				$("#PTMs").append(all);
				//
				$(".raw").hide();
				$(".PTMView").click(function(){
					if($(".raw").is(':hidden')){
						$(".raw").show();
						$(this).text("Close View");
						$(".OneSite").text("Close");
					}else{
						$(".raw").hide();
						$(this).text("View All phospho-peptides");
						$(".OneSite").text("View");
					}
				});
				//
				$(".OneSite").click(function(){
					var id = $(this).attr("id");
					var list$ = $("tr[name="+id+"]");
					if(list$.is(':hidden')){
						list$.show();
						$(this).text("Close");
					}else{
						list$.hide();
						$(this).text("View");
					}
				});
				
				
				$("#MSAdialog").dialog({autoOpen: false, width:'900px'});
				$(".MSA").click(function(){
					$("#MSAdialog").html('');
					var id=$(this).attr("name").substr(3);//$("#MSAdialog").html(id);
					var msaid=$(this).attr("name");
					var num=Math.floor((id-1)/50000);
					var line=id-num*50000;
					var line=Math.floor(id);
					//$.get("File.php",{file:"Basic/2--MSA-Peptide-"+num+".txt",id:line},function(response){
					$.get("File.php",{file:"Basic/COG_Info",id:line},function(response){
						var $msa=response.split("\t");
						//var $out=response+","+$msa[0]+","+$msa[1]+"<br/><table cellpadding='2' style='text-align:left'>";
						var $out="<table cellpadding='0' style='text-align:left'>";
						$out=$out+"<tr><th class='one' width='5' align='right'></th><th width='1000' id='fmt'>------------------------------|------------------------------</th><th width='100' align='left' class='three'></th></tr>";
						var $one=$msa[3].split(";");
						var $two=$msa[1].split(":");
						var $cogid = $two[0];
						for(i=0;i<19;i++){
							var $info=$one[i].split(":");
							//$out=$out+"<tr><th class='org'><a href='https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?lvl=0&id="+$info[0]+"' target='_blank'>"+$info[0]+"</a></th><td class='seq'>"+$info[3]+"</td><th class='cogid'><a href='View.php?id="+$info[1]+"' target='_blank'>"+$info[1]+"</a></th></tr>";
							if(/^PP0.+?/.test($info[1])){
								$out = $out+"<tr><th class='one'><a href='https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?lvl=0&id="+$info[0]+"' target='_blank'>"
							+$info[0]+"</a></th><td class='two'>"+$info[3]+"</td><th class='three' ><a href='View.2.php?id="+$info[1]+"' target='_blank'>"+$info[1]+"</a></th></tr>";
							}else{
								$out = $out+"<tr><th class='one'><a href='https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?lvl=0&id="+$info[0]+"' target='_blank'>"+$info[0]+"</a></th><td class='two'>"+$info[3]+"</td><th class='three' ><a href='ftp://ftp.ncbi.nih.gov/pub/COG/COG2014/static/byCOG/"+$cogid+".html' target='_blank'>"+$info[1]+"</a></th></tr>";
							}
							
						}
						//$out=$out+"<tr><th></th><th><div style='width:220px;margin:auto;'><div style='background-color:#EE7942;height:20px;width:100px;text-align:center;float:left;'><font>Known</font></div><div style='height:20px;width:20px;float:left;'></div><div style='background-color:#B0E2FF;height:20px;width:100px;text-align:center;float:left;'><font>Conserved</font></div></div></th><th></th></tr>";
						$out=$out+"</table>";
						//$out=$out+"<br/><div style='width:130px;float:right;margin-bottom:0px;'><div style='height:22px;width:130px'><div style='background-color:#EE7942;height:20px;width:20px;text-align:center;float:left;border-radius:5px;'></div><font style='font-weight:bold;line-height:20px;'>&nbsp;Known</font></div>";
						//$out=$out+"<div style='height:22px;width:130px'><div style='background-color:#B0E2FF;height:20px;width:20px;text-align:center;float:left;border-radius:5px;'></div><font style='font-weight:bold;line-height:20px;'>&nbsp;Conserved</font></div></div>";
						
						$out=$out+"<table id='diatab' style='float:left'><tr><td><div style='background-color:#EE7942;height:20px;width:20px;text-align:center;float:left;border-radius:5px;'></div></td><td><font style='font-weight:bold;line-height:20px;'>&nbsp;Known&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><div style='background-color:#B0E2FF;height:20px;width:20px;text-align:center;float:left;border-radius:5px;'></div></td><td><font style='font-weight:bold;line-height:20px;'>&nbsp;Conserved</font></td></tr></table>";
						$out=$out+"<table id='buttab' style='float:right'><tr><td><form action='MSA.php?id="+msaid+"&page=1' method='post'><input type='submit' name='Submit1' value='More' class='sub'/></form></td></tr></table>";
						//$out=$out+"<form action='MSA.php?id="+msaid+"&page=1' method='post'><input type='submit' name='Submit1' value='More' class='sub'/></form>"
						//<tr><td></td><td></td><td></td><td><form action='MSA.php?id="+msaid+"&page=1' method='post'><input type='submit' name='Submit1' value='More' class='sub'/></form></td></tr>

						
						$("#MSAdialog").html($out);
						
					});
					$("#MSAdialog").dialog("open");
					$("#MSAdialog").dialog({autoOpen: false, width:'900px',});
					
				});
			}
			
			
			
			function pep($peptides){
				var $pre=$peptides.substr(0,7);
				var $mid=$peptides.substr(7,1);
				var $aft=$peptides.substr(9,7);
				return $pre+"<font color='#EE7942'>"+$mid+"</font>"+$aft;
			}
			
			
			function Rawpeptide($pep,$num,$id){
				var $array=$pep.split("!!");
				$num=Number($num)+1;
				var $str="<tr class='raw' name='"+$id+"' align='left'><td colspan=6><div style='width:960px;max-height:400px; overflow-y: auto;'>";
				var $state="No";
				var $curate="<p class='type'>From high-throughput studies: </p><table class='array2' cellpadding='4' cellspacing=0 border=1 ><tr><th>Original phosphopeptide</th><th>Peptide ID</th><th width='70'>Class</th><th>LP score</th><th>PMIDs</th></tr>";
				var $integrate="No";
				var $db="<p class='type'>From other public resources: </p><table class='array2' cellpadding='4' cellspacing=0 border=1 ><tr><th width='150px'>Source</th><th>PMIDs</th></tr>";
				var $state1="No";
				var $ltp="<p class='type'>From low-throughput resources: </p><table class='array2' cellpadding='4' cellspacing=0 border=1 ><tr><th width='150px'>Phosphoevent</th><th>PMIDs</th></tr>";
				var $link={BioGRID:"<a href='https://thebiogrid.org/' target='_blank'>BioGRID 3.4</a>", dbPPT:"<a href='http://dbppt.biocuckoo.org/' target='_blank'>dbPPT</a>", dbPTM:"<a href='http://dbptm.mbc.nctu.edu.tw/index.php' target='_blank'>dbPTM 2016</a>", FPD:"<a href='http://bis.zju.edu.cn/FPD/' target='_blank'>FPD</a>", HPRD:"<a href='http://www.hprd.org/' target='_blank'>HPRD 9</a>", MPPD:"<a href='http://phospho.medicago.wisc.edu/db/index.php' target='_blank'>MPPD</a>", P3DB:"<a href='http://www.p3db.org/' target='_blank'>P3DB 3.0</a>", PHOSIDA:"<a href='http://141.61.102.18/phosida/index.aspx' target='_blank'>PHOSIDA</a>", phosPhAT:"<a href='http://phosphat.uni-hohenheim.de/' target='_blank'>PhosPhAt 4.0</a>", "Phospho.ELM":"<a href='http://phospho.elm.eu.org/' target='_blank'>Phospho.ELM 9.0</a>", PhospoPep:"<a href='http://www.phosphopep.org/' target='_blank'>PhospoPep 2.0</a>", PhosphoSitePlus:"<a href='https://www.phosphosite.org/homeAction.action' target='_blank'>PhosphoSitePlus</a>", SysPTM:"<a href='http://lifecenter.sgst.cn/SysPTM/' target='_blank'>SysPTM 2.0</a>", UniProt:"<a href='http://www.uniprot.org/' target='_blank'>UniProt</a>"};
				var $pmid={BioGRID:"",dbPPT:"",dbPTM:"",FPD:"",HPRD:"",MPPD:"",P3DB:"",PHOSIDA:"",phosPhAT:"","Phospho.ELM":"",PhospoPep:"",PhosphoSitePlus:"",SysPTM:"",UniProt:""};
				
				for(var k in $array){
					if($array[k] !=''){
						var $info=$array[k].split("::");
					var $desc=$info[2].split(";;");
					$info[1]=$info[1].replace("Sp","pS");
					$info[1]=$info[1].replace("Tp","pT");
					$info[1]=$info[1].replace("Yp","pY");
					$info[1]=$info[1].replace("_","");
					var $tmp=0;
					var $source="";
					for(var i in $desc){
						var $two=$desc[i].split(",,");
						if($two.length==5){
							$state="Yes";
							$tmp++;
							if($two[4]=="N/A"){
								$source=$source+"<td align='center'><em>N/A</em></td><td align='center'><em>N/A</em></td>";
							}else{
								$two[4]=Math.round($two[4]*1000)/1000;
								if($two[4]>0.75){
									$source=$source+"<td align='center'>Class I</td><td align='center'>"+$two[4]+"</td>";
								}else if($two[4]>0.5){
									$source=$source+"<td align='center'>Class II</td><td align='center'>"+$two[4]+"</td>";
								}else if($two[4]>=0.25){
									$source=$source+"<td align='center'>Class III</td><td align='center'>"+$two[4]+"</td>";
								}else{
									$source=$source+"<td align='center'>Class IV</td><td align='center'>"+$two[4]+"</td>";
								}
							} 
							//if($two[2]=='-'){
							//	$source=$source+"<td>"+$two[1]+"</td>";
							//}else{
							//	$source=$source+"<td>"+$two[1]+" ["+$two[2]+"]</td>";
							//}
							$source=$source+"<td><a href='https://www.ncbi.nlm.nih.gov/pubmed/"+$two[3]+"' target='_blank'>"+$two[3]+"</a></td>";
							$source=$source+"</tr>";
						}
						else if($two.length==4){
							$state1="Yes";
							$ltp=$ltp+"<tr><td>"+$two[0]+","+$two[1]+"</td>";
							$ltp=$ltp+"<td><div style='max-height:80px; overflow-y: auto;'>"+list2link1('https://www.ncbi.nlm.nih.gov/pubmed/', '', $two[2])+"</div></td></tr>";
						}
						else if($two.length==3){
							$integrate="Yes";
							//if($two[0]=="PhospoPep 2.0"){
							//	$two[0]="PhosphoPep 2.0";
							//}else if($two[0]=="P3DB 3.0"){
							//	$two[0]="P<sup>3</sup>DB 3.0";
							//}
							if($two[0]=="MPPD"){
								$two[2]="22701463,19923235";
							}
							$three=$two[2].split(",");
							$three[1]=$three[1].replace(/;/g,"; ");
							//$db=$db+"<tr><td><a href='"+$two[1]+"' target='_blank'>"+$two[0]+"</a></td>";
							if($three[1]!="NA"){
								$three[0]=$three[0]+"; "+$three[1];
							}
							var $dbname=$two[0];
							$dbname=$dbname.replace(/ .+?$/g,"");
							$pmid[$dbname]=$pmid[$dbname]+"; "+$three[0];
							//$db=$db+"<td><div style='max-height:80px; overflow-y: auto;'>"+list2link('https://www.ncbi.nlm.nih.gov/pubmed/', '', $three[0])+"</div></td>";
							//$db=$db+"</tr>";
							
						}
					}
					if($tmp!=0){
						$curate=$curate+"<tr><td class='couriernew'  rowspan="+$tmp+">"+$info[1]+"</td><td rowspan="+$tmp+"><a href='Peptide.php?pid="+$info[0]+"' target='_blank'><font>"+$info[0]+"</font></a></td>"+$source;
					}
					}
				}
				
				for(var l in $pmid){
					var $list='';
					if($pmid[l]!=''){
						$pmid[l]=$pmid[l].replace(/^; /,"");
						var array=$pmid[l].split("; ");
						$db=$db+"<tr><td>"+$link[l]+"</td>";
						if(array.length==1){
							$db=$db+"<td><div style='max-height:80px; overflow-y: auto;'>"+list2link1('https://www.ncbi.nlm.nih.gov/pubmed/', '', $pmid[l])+"</div></td></tr>";
						}else{
							//$list=array[0]+"; ";
							for (var m in array){
								if($list.search(/array[m]; /)==-1){
									$list=$list+array[m]+"; ";
								}
							}
							$list=$list.replace(/; $/,"");
							$db=$db+"<td><div style='max-height:80px; overflow-y: auto;'>"+list2link1('https://www.ncbi.nlm.nih.gov/pubmed/', '', $list)+"</div></td></tr>";
						}
					}
				}
				
				if($state=="Yes"){
					$str=$str+$curate+"</table>";
				}
				if($state1=="Yes"){
					$str=$str+$ltp+"</table>";
				}
				if($integrate=="Yes"){
					$str=$str+$db+"</table>";
				}
				
				$str=$str+"</div>";
				
				return $str;
			}
			
			function list2link($pre,$after,$list,$split){
							if($list=="" || $list=="-" || $list=="null"){
								return "";
							}else{
								$array=$list.split($split);
								var $links='';
								for(var k in $array){
									$links=$links+"<a href='"+$pre+$array[k]+$after+"' target='_blank'>"+$array[k]+"</a>; ";
								}
								$links = $links.substr(0,$links.length-2);
								return $links;
							}
						}
						
			function ac2acid($ac,$acid){
							if($ac=="" || $ac=="-" || $ac=="null"){
								return "";
							}else{
								$acls=$ac.split(';');
								$acidls=$acid.split(';');
								var $links='';
								for(var k in $acls){
									if($acls[k] != ''){
										$links=$links+"<a href='"+$acidls[k]+"' target='_blank'>"+$acls[k]+"</a>; ";
									}
									
								}
								$links = $links.substr(0,$links.length-2);
								return $links;
							}
						}
			
			function link2Ensembl($str,species){
				if($str!=''){
					var one=$str.split(";");
					var ensembl={Homosapiens:"asia", Macacafascicularis:"asia", Rattusnorvegicus:"asia", Musmusculus:"asia", Cricetulusgriseus:"asia", Bostaurus:"asia", Susscrofa:"asia", Gallusgallus:"asia", Xenopuslaevis:"asia", Daniorerio:"asia", Stichopusjaponicus:"asia", Strongylocentrotuspurpuratus:"asia", Apismellifera:"asia", Drosophilamelanogaster:"asia", Bombyxmori:"asia", Daphniapulex:"asia", Pristionchuspacificus:"asia", Caenorhabditiselegans:"asia", Trypanosomacruzi:"protists", TrypanosomacruziDm28c:"protists", Trypanosomabruceibrucei:"protists", Plasmodiumfalciparum:"protists", Plasmodiumberghei:"protists", Toxoplasmagondii:"protists", Paracoccidioidesbrasiliensis:"fungi", Emericellanidulans:"fungi", Aspergillusflavus:"fungi", Magnaportheoryzae:"fungi", Beauveriabassiana:"fungi", Hypocreajecorina:"fungi", Neurosporacrassa:"fungi", Candidaalbicans:"fungi", Saccharomycescerevisiae:"fungi", Schizosaccharomycespombe:"fungi", Vitisvinifera:"plants", Nicotianatabacum:"plants", Solanumtuberosum:"plants", Solanumlycopersicum:"plants", Lotusjaponicus:"plants", Medicagotruncatula:"plants", Glycinemax:"plants", Brassicanapus:"plants", Arabidopsisthaliana:"plants", Populustrichocarpa:"plants", Gossypiumhirsutum:"plants", Citrussinensis:"plants", Selaginellamoellendorffii:"plants", Brachypodiumdistachyon:"plants", Zeamays:"plants", Triticumaestivum:"plants", Hordeumvulgaresubspvulgare:"plants", Oryzasativasubspjaponica:"plants", Physcomitrellapatenssubsppatens:"plants", Ostreococcustauri:"plants", Chlamydomonasreinhardtii:"plants"};
					species=species.replace(/ \(.+?$/g,'');
					species=species.replace(/ /g,'');
					species=species.replace(/\./g,'');
					species=ensembl[species];
					//var out=$str+"<br/>";
					var out="";
					for(var k in one){
						var two=one[k].split(",");
						out=out+"<a href='https://"+species+".ensembl.org/Gene/Summary?g="+two[0]+"' target='_blank'>"+two[0]+"</a>; <a href='https://"+species+".ensembl.org/Gene/Summary?g="+two[1]+"' target='_blank'>"+two[1]+"</a>; <a href='https://"+species+".ensembl.org/Gene/Summary?g="+two[2]+"' target='_blank'>"+two[2]+"</a><br/>";
					}
					return out;
				}else{
					return "";
				}
			}
			
			
				function popBox(){
					var popBox = document.getElementById('popBox');
					popBox.style.display = "block";
				}//end func popBox()

				function closeBox(){
					var popBox = document.getElementById('popBox');
					popBox.style.display = "none";

				}//end func closeBox()
				
				function popBox1(){
					var popBox = document.getElementById('popBox1');
					popBox.style.display = "block";
				}//end func popBox()

				function closeBox1(){
					var popBox = document.getElementById('popBox1');
					popBox.style.display = "none";

				}//end func closeBox()
				
				function detailBox(){
					var detailBox = document.getElementById('detailBox');
					detailBox.style.display = "block";
				}//end func detailBox()

				function closedetailBox(){
					var detailBox = document.getElementById('detailBox');
					detailBox.style.display = "none";

				}//end func closedetailBox()
			
			
			$(function(){
				var $asplen = 0;
				var asphash={1: "50px", 2: "100px", 3: "150px", 4: "200px", 5: "250px", 6: "300px", 7: "350px", 8: "400px", 9:"450px",};
				var $id=getSearchString('id');
				if($id.search(/^PP/)==-1){
					$("#ViewMain").prepend("<h3 align='center'>Sorry, your input couldn't be found in the database: "+$id+"</h3>");
				}else if($id.substr(2)<1 || $id.substr(2)>8586){
					$("#ViewMain").prepend("<h2 align='center'>Sorry, your input couldn't be found in the database: "+$id+"</h3>");
				}else{
					//$("#ViewMain").prepend("yes");
					$id=getSearchString('id').substr(2);
					var num=Math.floor(($id-1)/10000);
					var line=Math.floor($id);
					//$(".tmp").append(num+"A"+line);
					$.get("File.php",{file:"Basic/Exp-Protein-View.txt",id:line},function(response){
						//$("#tmp").html(response);
						var hash={ID:0, Primary:1, Source:2, Isoform:3, UniProt:4, ProteinName:5, ProteinSynonyms:6, GeneName:7, GeneSynonym:8, Taxonomy:9, function:10, ncbiProteins:11, ncbiGenes:12, GO:13, InterPro:14, Pfam:15, PROSITE:16, keyword:17, organism:18, sequence:19, length:20, PDB:21, chain:22, line:23, region2:24, SVG:25, region:26, Number:27, PTMs:28, mASA:29, ASA:30, Aspect:31, dblist:32, CDS:33, Ensembl:34, GeneID:35, refseqPin:36, refseqMin:37,direct:38,locus:39,gndes:40,embl:41,kg:42,Accid:43,Acc:44};
						response=response.replace(/[\r\n]/g,'');
						var all=response.split("\t");
						if(all.length==1){
							$("#ViewMain").prepend("<h2 align='center'>Sorry, your input couldn't be found in the database: PP"+$id+"</h3>");
						}else{
							$("#sideview").show();
							
							//Annotation
							
							var $pdb;
							if(all[hash.Aspect]!=''){
								//$("#Annolist").show();
								$annolist=all[hash.Aspect].split(",,");
								$dblist=all[hash.dblist].split(";;");
								var list="<ul>";
								for(var i in $annolist){
									if($annolist[i]=='Structure'){
										$pdb=i;
									}
									list=list+"<li>&nbsp;<a href='Annotation.php?id="+all[hash.ID]+"#"+i+"' target='_blank'>"+$annolist[i]+"<font size=1>&#9660;</a></font><ul class='db'>";
									var one=$dblist[i].split(",,");
									for(var k in one){
										if(one[k].search(/_/)!=-1){
											one[k]=one[k].split("_")[1];
										}
										var $dbname;
										if(one[k]=='inBio Map'){
											$dbname=one[k]+"<sup>TM</sup>";
										}else{
											$dbname=one[k];
										}
										list=list+"<li><a href='Annotation.php?id="+all[hash.ID]+"#"+i+"_"+one[k]+"' target='_blank'>"+$dbname.replace(/&/,"/")+"</li>";
									}
									list=list+"</ul></li>";
								}
								list=list+"</ul>";
								$("#Annolist").append(list);
								//
								$("#Annolist li").mouseover(function(){
									$(this).closest("li").find(".db").show();
								});
								$("#Annolist li").mouseout(function(){
									$(this).closest("li").find(".db").hide();
								});
							}else{
								$("#liAnnotation").hide();
							}
							//Basic
							//<div id='GeneName'></div>
							//<div id='AnnoBu'></div>
							/*if(all[hash.Aspect]!=''){
								$("#AnnoBu").prepend("<div id='Annotationa'><a href='Annotation.php?id="+all[hash.ID]+"' target='_blank'>Integrated Annotations</a></div>");
							}*/
							if(all[hash.GeneName]==''){
								all[hash.GeneName]="N/A";
								$("#GeneName").append("<h2>&nbsp;&nbsp;<em>"+all[hash.GeneName]+"</em></h2>");
							}else{
								$("#GeneName").append("<h2>&nbsp;&nbsp;"+all[hash.GeneName]+"</h2>");
							}
							//Overview
							$organism=all[hash.organism];
							all[hash.organism]="<em>"+all[hash.organism]+"</em>";
							if(all[hash.Source]=='Identify'){
								all[hash.Source]='Experimentally identified';
							}else{
								all[hash.Source]='Orthologous detected';
							}
							if(all[hash.Isoform]=='Ref.'){
								all[hash.Isoform]='Major';
							}else{
								all[hash.Isoform]='Minor';
							}
							
							//<tr><td class='tablabel'>EPSD ID</td><td class='content'>"+all[hash.ID]+"</td></tr>
							
							var tmp="<table class='array1' cellpadding='4'><tr><td width='150px'></td><td width='400px'></td></tr>";							
							tmp=tmp+"<tr><td class='tablabel' ><span id='content1'>dbPSP ID&nbsp</span></td><td class='content' ><font style='font-weight:bold;'>"+all[hash.ID]+"</font></td></tr>"+"<tr><td class='tablabel' ><span id='content2'>Protein&nbsp</span></td><td class='content' ><font style='font-weight:bold;'>"+all[hash.ProteinName]+"</font></td></tr>"+"<tr><td class='tablabel'><span id='content3'>Gene&nbsp</span></td><td class='content' ><font style='font-weight:bold;'>"+all[hash.GeneName]+"</font></td></tr>"+"<tr><td class='tablabel'><span id='content4'>NCBI Taxa ID&nbsp</span></td><td class='content' >"+all[hash.Taxonomy]+"</td></tr>"+"<tr><td class='tablabel'><span id='content5'>Organism&nbsp</span></td><td class='content' >"+all[hash.organism]+"</td></tr>"+"<tr><td class='tablabel'><span id='content7'>Source&nbsp</span></td><td class='content' >"+all[hash.Source]+"</td></tr>"+"</table><br/>";
							$("#Basic").append("<p class='type'>&#9660;&nbsp;Overview</p>"+tmp);//+createRow("Protein Alias",all[hash.ProteinSynonyms]) +createRow("Gene Synonyms",all[hash.GeneSynonym]) +createRow("<em>p</em>-site number",all[hash.Number])
							
							
							//PTMPDB
							if(all[hash.line]=="-1"){
							}else{
								$("#PTMPDB").show();
								$("#View1").css({height:350});
								//$("#PTMPDB").html("<p>It may take some time, Please wait a moment.</p>");
								$("#Structure").append("<p><span id='struPDB'>PDB&nbsp;</span><span id='struPDB1'></span><a href='https://www.rcsb.org/structure/"+all[hash.PDB]+"' target='_blank' >"+all[hash.PDB]+"</a><span id='chainPDB'>&nbsp;["+all[hash.chain]+"]</span>"+"&nbsp;<a href='#3Structure' >Details&nbsp;</a><select id='pdbsite'><option value='All'>All Sites</option></select>&nbsp;<button id='Refresh'>Refresh</button></p>");
								$.ptmPDB(all[hash.line],all[hash.chain]);
							}
							
							
							
							//PTMSVG
							$("#Sites").show();
							$datasvg=all[hash.ID]+";;"+all[hash.GeneName]+";;"+all[hash.length]+";;"+all[hash.SVG]+";;"+all[hash.region]+";;"+all[hash.mASA]+";;"+all[hash.ASA]+";;"+all[hash.region2];
							$(".SVG").attr({id: all[hash.length]});
							$.ptmSVG(800, $datasvg);
							//Slider
							$( "#slider" ).slider({
								range:'min', min:1, max:6, value:1,
								slide: function(event, ui){
									var $width=ui.value * $(".SVG").attr("id") + 170;
									if(ui.value == 1){
										$width=970;
									}else if($width<970){
										$width=970;
									}
									$(".SVG").width($width);
									$width=$width-170;
									$.ptmSVG($width, $datasvg);
								}
							});
							//
							$(".sliderbutton").click(function(){
								//$(".tmp").text($(this).attr("id"));
								var $value=$(this).attr("id")
								$("#slider").slider({value: $value});
								var $width= $value * $(".SVG").attr("id") + 170;
								if($value == 1){
									$width=970;
								}else if($width<970){
									$width=970;
								}
								$(".SVG").width($width);
								$width=$width-170;
								$.ptmSVG($width, $datasvg);
							});
							$("#dialog").dialog({
								autoOpen: false,
								width:'500px',
								modal:true,
							});
							
							
							//PTMView
							$.ptmView(all[hash.PTMs]);
							
							
							//Nomenclature
							tmp="<p class='type'>&#9660;&nbsp;Nomenclature<hr size='1'/></p><table class='array' cellpadding='4'><tr><td width='200px'></td><td></td></tr>";
							tmp=tmp+createRow("Protein Alias",all[hash.ProteinSynonyms])+createRow("Gene Synonyms",all[hash.GeneSynonym])+createRow("Uniprot Accession", list2link1('http://www.uniprot.org/uniprot/', '', all[hash.UniProt]));
							if(all[hash.GeneID] != ''){
								tmp=tmp+"<tr><td class='tablabel pad' >NCBI</td><td class='second'>Gene ID</td><td class='third'>"+list2link1('https://www.ncbi.nlm.nih.gov/gene/', '', all[hash.GeneID])+"</td></tr>";
							}
							
							if(all[hash.GeneID] == '' && all[hash.locus] != ''){
								tmp=tmp+"<tr><td class='tablabel pad' >NCBI</td><td class='second'>Locus Tag</td><td  class='third'>"+list2link1('https://www.ncbi.nlm.nih.gov/gene/?term=', '', all[hash.locus])+"</td></tr>";
							}else if(all[hash.GeneID] != '' && all[hash.locus] != ''){
								tmp=tmp+"<tr><td class='tablabel'></td><td class='second'>Locus Tag</td><td  class='third'>"+list2link1('https://www.ncbi.nlm.nih.gov/gene/?term=', '', all[hash.locus])+"</td></tr>";
							}
							
							if(all[hash.GeneID] == '' && all[hash.locus] == '' && all[hash.ncbiGenes] != ''){
								tmp=tmp+"<tr><td class='tablabel pad' >NCBI</td><td class='second'>RefSeq Nucleotide ID</td><td  class='third'>"+list2link1('http://www.ncbi.nlm.nih.gov/nuccore/', '', all[hash.ncbiGenes])+"</td></tr>";
							}else if(all[hash.GeneID] != '' || all[hash.locus] != '' && all[hash.ncbiGenes] != ''){
								tmp=tmp+"<tr><td class='tablabel'></td><td class='second'>RefSeq Nucleotide ID</td><td  class='third'>"+list2link1('http://www.ncbi.nlm.nih.gov/nuccore/', '', all[hash.ncbiGenes])+"</td></tr>";
							}
							
							if(all[hash.GeneID] == '' && all[hash.locus] == '' && all[hash.ncbiGenes] == '' && all[hash.ncbiProteins] != ''){
								tmp=tmp+"<tr><td class='tablabel pad' >NCBI</td><td class='second'>RefSeq Protein ID</td><td  class='third'>"+list2link1('http://www.ncbi.nlm.nih.gov/protein/', '', all[hash.ncbiProteins])+"</td></tr>";
							}else if(all[hash.GeneID] != '' || all[hash.locus] != '' || all[hash.ncbiGenes] != '' && all[hash.ncbiProteins] != ''){
								tmp=tmp+"<tr><td class='tablabel'></td><td class='second'>RefSeq Protein ID</td><td  class='third'>"+list2link1('http://www.ncbi.nlm.nih.gov/protein/', '', all[hash.ncbiProteins])+"</td></tr>";
							}
							
							if(all[hash.GeneID] == '' && all[hash.locus] == '' && all[hash.ncbiGenes] == '' && all[hash.ncbiProteins] == '' && all[hash.gndes] != ''){
								tmp=tmp+"<tr><td class='tablabel pad' >NCBI</td><td class='second'>Gene Description</td><td  class='third'>"+all[hash.gndes]+"</td></tr>";
							}else if(all[hash.GeneID] != '' || all[hash.locus] != '' || all[hash.ncbiGenes] != '' || all[hash.ncbiProteins] != '' && all[hash.gndes] != ''){
								tmp=tmp+"<tr><td class='tablabel'></td><td class='second'>Gene Description</td><td  class='third'>"+all[hash.gndes]+"</td></tr>";
							}
							
							if(all[hash.kg] != ''){
								tmp=tmp+"<tr><td class='tablabel pad'>KEGG Gene</td><td class='contentt limit'>"+list2link1('https://www.genome.jp/dbget-bin/www_bget?', '', all[hash.kg])+"</td></tr>";
							}
							
							if(all[hash.Ensembl] != ''){
								tmp=tmp+"<tr><td class='tablabel pad'>Ensembl</td><td class='contentt limit'>"+list2link1('http://www.ensemblgenomes.org/id/', '', all[hash.Ensembl])+"</td></tr>";
							}
							
							//tmp = tmp+createRow("Ensembl", link2Ensembl(all[hash.Ensembl],$organism));
							
							if(all[hash.embl] != ''){
								tmp=tmp+"<tr><td class='tablabel pad'>EMBL</td><td class='contentt limit'>"+list2link1('https://www.ebi.ac.uk/ena/data/view/', '', all[hash.embl])+"</td></tr>";
							}
							
							$("#Nomenclature").append(tmp);
							
							
							//Function
							if(all[hash.function] !='N/A'){
								$("#Function").append("<p class='type'>&#9660;&nbsp;Function</p><hr size='1'/><p id='fun' align='justify'>"+all[hash.function]+"</p><br/>");
							}else{
								$("#liFunction").css("display","none");
							}
							
							
							
							
							//Annotation table
							//Directory name 2 Display
							//var hash1={'1Function':'Protein function annotation', '2Genome':'Prokaryotic genome annotation', '3Structure':'3D structure information', '4Physicochemical':'Physiochemical properties', '5Domain':'Family and domain annotation', '6Interaction':'Molecular interaction', '7Orthologous':'Orthologous information', '8Pathway':'Biological pathway'};
							var hash1={'1Taxonomy annotation':'Taxonomy annotation', '2Genome annotation':'Genome annotation', '3Function annotation':'Function annotation', '4Transcriptional regulation':'Transcriptional regulation', '5Sequence and structure information':'Sequence and structure information', '6Family and domain annotation':'Family and domain annotation', '7Interaction':'Interaction', '8Orthologous information':'Orthologous information', '9Biological pathway':'Biological pathway'};
							//Annoside
							//var hash2={'1Function':'Function', '2Genome':'Genome', '3Structure':'Structure', '4Physicochemical':'Physiochemical', '5Domain':'Domain', '6Interaction':'Interaction', '7Orthologous':'Orthology', '8Pathway':'Pathway'};
							var hash2={'1Taxonomy annotation':'Taxonomy', '2Genome annotation':'Genome', '3Function annotation':'Function', '4Transcriptional regulation':'Regulation', '5Sequence and structure information':'Structure', '6Family and domain annotation':'Domain', '7Interaction':'Interaction', '8Orthologous information':'Orthologous', '9Biological pathway':'Pathway'};
							var hash3={'1Taxonomy annotation':'1Taxonomy', '2Genome annotation':'2Genome', '3Function annotation':'3Function', '4Transcriptional regulation':'4Regulation', 
							'5Sequence and structure information':'5Structure', '6Family and domain annotation':'6Domain', '7Interaction':'7Interaction', '8Orthologous information':'8Orthologous', '9Biological pathway':'9Pathway'};
							
							//File name 2 Display
							var dbhash={'RegPrecise':'RegPrecise 3.0', 'enzyme':'Enzyme', 'footprintDB':'FootprintDB', 't4ss':'T4SS', 'PHI-base':'PHI-Base', 'IMGM':'IMG/M', 'NCBI taxonomy':'NCBI Taxonomy', 'Cath':'CATH','Compute pIMw':'Compute pI/Mw','RAID':'RAID 2.0','TransportDB':'TransportDB 2.0','TADB2':'TADB 2.0','eggNOG':'EggNOG',};
							//Detail Display databases
							var dethash={"CollecTF": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>TF</th><th width='150px'>TF.Family</th></tr>","CoryneRegNet": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>CDS</th><th width='150px'>Target.Gene</th><th width='150px'>Binding.Motif</th><th width='150px'>PubmedIDs</th></tr>","P2CS": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Gene</th><th width='150px'>Class</th><th width='150px'>Type</th><th width='150px'>P2CS.Description</th></tr>","P2TF": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Gene</th><th width='150px'>Class</th><th width='150px'>Type</th><th width='150px'>P2TF.Description</th></tr>","EffectiveDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry</th><th width='150px'>EffectiveCCBD</th><th width='150px'>EffectiveT3</th><th width='150px'>Predotar</th><th width='150px'>EffectiveELD</th><th width='150px'>T4SEpre</th></tr>","RegPrecise": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Transcription.Factor</th><th width='150px'>Regulated.Operons</th></tr>","SigMol": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>QSSM.ID</th><th width='150px'>Signaling.System</th><th width='150px'>Signaling.Molecule</th><th width='150px'>Molecular.Formula</th><th width='150px'>Synthase.Gene</th><th width='150px'>Recipient.Gene</th></tr>","RegulonDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Transcription.Factor</th><th width='150px'>Regulated.Gene</th><th width='150px'>Regulatory.Effect</th></tr>","PSortDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Localization</th><th width='150px'>ExpORCom</th><th width='150px'>Version</th></tr>","t4ss": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ORF.ID</th><th width='150px'>Gene.ID</th><th width='150px'>Gene.Name</th><th width='150px'>Product</th></tr>","PHI-base": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Pathogen</th><th width='150px'>Host.Descripton</th><th width='150px'>Host.Taxon.ID</th><th width='150px'>Disease.Name</th></tr>","CAMP": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry</th><th width='150px'>Description</th><th width='150px'>Peptide</th><th width='150px'>Activity</th></tr>","Island": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry</th><th width='150px'>Island.coordinates</th><th width='150px'>Island.orientation</th></tr>","TransportDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry</th><th width='150px'>Transporter.Name</th><th width='150px'>Transporter.Type</th><th width='150px'>Substrate.Function</th></tr>","MVP": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Host.TaxonID</th><th width='150px'>Viral.ClusterID</th><th width='150px'>Interaction.ID</th></tr>","PRINTS": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Finger.ID</th><th width='150px'>Finger.Name</th><th width='150px'>Element.Involved</th></tr>","SMART": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>SMART.Accession</th><th width='150px'>DOM.Name</th><th width='150px'>Definition</th></tr>","PROSITE": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry</th><th width='150px'>Description</th></tr>","Mentha": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Protein.A</th><th width='150px'>Gene.A</th><th width='150px'>Protein.B</th><th width='150px'>Gene.B</th><th width='150px'>Score</th><th width='150px'>PMID</th></tr>","RAID": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry</th><th width='150px'>Interactor1</th><th width='150px'>Category1</th><th width='150px'>Interactor2</th><th width='150px'>Category2</th><th width='150px'>Methods</th><th width='150px'>References</th><th width='150px'>Score</th></tr>","STITCH": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Protein</th><th width='150px'>Chemical</th><th width='150px'>Score</th></tr>","InParanoid": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Protein ID</th><th width='150px'>Species</th><th width='150px'>Score</th><th width='150px'>Bootstrap</th></tr>","ECMDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry</th><th width='150px'>Metabolites</th></tr>","Compute pIMw": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Isoelectric Point (pI)</th><th width='150px'>Molecular Weight (MW)</th></tr>","fusionDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>TaxonID</th><th width='150px'>Functional Repertoire Size</th><th width='150px'>Habitat Preference</th><th width='150px'>Temperature Preference</th><th width='150px'>Oxygen Preference</th></tr>","COG": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>GI</th><th width='150px'>RefSeq</th><th width='150px'>GeneBank</th><th width='150px'>Taxon ID</th><th width='150px'>species</th><th width='150px'>COG Group</th><th width='150px'>COG Function</th><th width='150px'>COG Name</th></tr>","EnsemblGenome": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Accession</th></tr>","ChEMBL": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>UniProt ID</th><th width='150px'>ChEMBL ID</th><th width='150px'>ChEMBL Description</th><th width='150px'>ChEMBL Type</th></tr>","DBTBS": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Gene</th><th width='150px'>Factor</th><th width='150px'>Regulation</th><th width='150px'>Detailed information</th></tr>","DrugBank": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>UniProt ID</th><th width='150px'>UniProt Name</th><th width='150px'>Protein/Compound Type</th><th width='150px'>DrugBank ID</th><th width='150px'>Drug Name</th><th width='150px'>Drug Type</th><th width='150px'>Drug CAS</th><th width='150px'>Drug Synonyms</th></tr>","enzyme": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>UniProt</th><th width='150px'>ENZYME entry</th><th width='150px'>Accepted name</th><th width='150px'>Alternative name(s)</th><th width='150px'>Reaction catalysed</th><th width='150px'>Cofactor(s)</th><th width='150px'>Comment(s)</th></tr>","footprintDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Accession</th><th width='150px'>Binding Motif(s)</th><th width='150px'>3D-footprint Homologue(s)</th><th width='150px'>Reference</th></tr>","MEROPS": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>MEROPS ID</th><th width='150px'>PEPTIDASE</th><th width='150px'>Cleavages</th><th width='150px'>FAMILY</th><th width='150px'>SUBFAMILY</th><th width='150px'>TYPE ENZYME</th><th width='150px'>FAMILY TYPE</th><th width='150px'>CLAN</th><th width='150px'>TYPE PEPTIDASE</th><th width='150px'>CLAN TYPE</th></tr>","Mycobrowser": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Gene name</th><th width='150px'>Gene identifier</th><th width='150px'>Product</th><th width='150px'>Functional category</th><th width='150px'>Protein molecular mass</th><th width='150px'>Protein isoelectric point</th></tr>","PeroxiBase": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Entry ID</th><th width='150px'>Name (synonym)</th><th width='150px'>Class</th></tr>","PRODORIC2": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Accession</th><th width='150px'>Factor</th><th width='150px'>Motif List(Motif Acc-Motif Name-Binding Sequence-Reference)</th></tr>","PseudoCAP": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Strain</th><th width='150px'>Genomic location</th><th width='150px'>Charge (pH 7)</th><th width='150px'>Kyte-Doolittle Hydrophobicity Value</th><th width='150px'>Molecular Weight (kDa)</th><th width='150px'>Isoelectric Point (pI)</th></tr>","REBASE": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>REBASE Enz Num</th><th width='150px'>Name</th><th width='150px'>Description</th><th width='150px'>Growth Temperature</th><th width='150px'>Molecular Weight</th></tr>","SwissLipids": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ID</th><th width='150px'>Metabolites</th><th width='150px'>Interactions</th><th width='150px'>Genetics</th><th width='150px'>Citations</th></tr>","aBiofilm": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Anti-Biofilm ID</th><th width='150px'>Anti-Biofilm agent</th><th width='150px'>Molecular formula</th><th width='150px'>Agent type</th><th width='150px'>Inhibition</th><th width='150px'>Reference</th></tr>","BacDive": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>NCBI TaxID</th><th width='150px'>Spiecies</th><th width='150px'>BacDive Strain ID</th><th width='150px'>Culture Collection No.</th><th width='150px'>Biosafety level</th><th width='150px'>Pathogenicity (animal)</th><th width='150px'>Pathogenicity (human)</th><th width='150px'>Pathogenicity (plant)</th></tr>","GOLD": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>NCBI TAXON ID</th><th width='150px'>Species</th><th width='150px'>ORGANISM GOLD ID</th><th width='150px'>GOLD ID</th><th width='150px'>LEGACY GOLD ID</th><th width='150px'>OXYGEN REQUIREMENT</th><th width='150px'>METABOLISM</th><th width='150px'>ENERGY SOURCES</th><th width='150px'>PROJECT NAME</th><th width='150px'>NCBI PROJECT NAME</th><th width='150px'>NCBI BIOPROJECT ACCESSION</th><th width='150px'>NCBI BIOSAMPLE ACCESSION</th><th width='150px'>PROJECT TYPE</th><th width='150px'>PROJECT STATUS</th><th width='150px'>SEQUENCING STATUS</th><th width='150px'>SEQUENCING CENTERS</th><th width='150px'>FUNDING</th><th width='150px'>CONTACT NAME</th><th width='150px'>GENBANK</th><th width='150px'>ASSEMBLY ACCESSION</th></tr>","LPSN": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Description</th><th width='150px'>Reference</th></tr>","MicrobesOnline": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ID</th><th width='150px'>Species</th><th width='150px'>Lineage</th><th width='150px'>NCBI Taxonomy ID</th></tr>","MicrobeWiki": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Description</th><th width='150px'>Higher order taxa</th></tr>","MicroScope": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Organism</th><th width='150px'>Accession</th><th width='150px'># Genes</th></tr>","NCBI taxonomy": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Tax_id</th><th width='150px'>Tax_name</th><th width='150px'>Species</th><th width='150px'>Genus</th><th width='150px'>Family</th><th width='150px'>Order</th><th width='150px'>Class</th><th width='150px'>Phylum</th><th width='150px'>Kingdom</th><th width='150px'>Superkingdom</th></tr>","PAIDB 2.0": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Accession</th><th width='150px'>Strain</th><th width='150px'>Type</th><th width='150px'>Size</th><th width='150px'>G+C content</th></tr>","proGenomes": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Genome</th><th width='150px'>Taxonomy</th><th width='150px'>Project</th></tr>","SILVA": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Organism Name</th><th width='150px'>Strain</th><th width='150px'>Length</th><th width='150px'>Taxonomy</th><th width='150px'>Habitat</th></tr>","tRNADB-CE": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Genome ID</th><th width='150px'>Description</th><th width='150px'># HIT</th></tr>","MMDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>MMDB ID</th><th width='150px'>Experimental Method</th><th width='150px'>Source Organism</th><th width='150px'>Reference</th></tr>","PDB": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>PDB ID</th><th width='150px'>Description</th><th width='150px'>Classification</th><th width='150px'>Method</th></tr>","SCOP2": "<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>DOM ID</th><th width='150px'>Sequence</th><th width='150px'>Begin</th><th width='150px'>End</th><th width='150px'>Length</th><th width='150px'>Node</th></tr>","CATH-Gene3D":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Family</th><th width='150px'>Description</th><th width='150px'>Region</th></tr>","ESTHER":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ESTHER ID</th><th width='150px'>Family</th><th width='150px'>Parent Family</th><th width='150px'>Block</th><th width='150px'>Family Comment</th></tr>","HAMAP":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Start Site</th><th width='150px'>End Site</th><th width='150px'>ID</th><th width='150px'>Family</th><th width='150px'>Description</th></tr>","InterPro":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Family</th><th width='150px'>Description</th><th width='150px'>Start Site</th><th width='150px'>End Site</th></tr>","PANTHER":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Family</th><th width='150px'>Description</th></tr>","Pfam":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Family Name</th><th width='150px'>Family</th><th width='150px'>Family Version</th><th width='150px'>Description</th><th width='150px'>Region</th></tr>","PIRSF":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Family</th><th width='150px'>Description</th></tr>","TCDB":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Family</th><th width='150px'>Family Name</th></tr>","TIGRFAMs":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>UniProt</th><th width='150px'>TIGRFAMs Accession</th><th width='150px'>Name</th><th width='150px'>Function</th><th width='150px'>Gene Symbol</th><th width='150px'>Isology Type</th><th width='150px'>Comment</th></tr>","BioGrid":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>BioGRID ID Interactor A</th><th width='150px'>UniProt Interactor A</th><th width='150px'>Official Symbol Interactor A</th><th width='150px'>Organism Interactor A</th><th width='150px'>BioGRID ID Interactor B</th><th width='150px'>UniProt Interactor B</th><th width='150px'>Official Symbol Interactor B</th><th width='150px'>Organism Interactor B</th><th width='150px'>BioGRID Interaction ID</th><th width='150px'>Experimental System</th><th width='150px'>Experimental System Type</th><th width='150px'>Pubmed</th><th width='150px'>Throughput</th><th width='150px'>Score</th></tr>","BioGRIDChemical":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>BioGRID Gene ID</th><th width='150px'>UniProt ID</th><th width='150px'>Official Symbol</th><th width='150px'>Organism</th><th width='150px'>BioGRID Chemical Interaction ID</th><th width='150px'>Action</th><th width='150px'>Interaction Type</th><th width='150px'>Pubmed ID</th><th width='150px'>BioGRID Chemical ID</th><th width='150px'>Chemical Name</th><th width='150px'>Chemical Brands</th><th width='150px'>Molecular Formula</th><th width='150px'>ATC Codes</th><th width='150px'>CAS Number</th></tr>","ComplexPortal":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Complex accession</th><th width='150px'>Recommended name</th><th width='150px'>Aliases for complex</th><th width='150px'>Identifiers (and stoichiometry) of molecules in complex</th><th width='150px'>Confidence</th><th width='150px'>Experimental evidence</th><th width='150px'>Description</th><th width='150px'>Complex properties</th><th width='150px'>Complex assembly</th></tr>","DIP":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ID interactor A</th><th width='150px'>UniProt interactor A</th><th width='150px'>Taxid interactor A</th><th width='150px'>ID interactor B</th><th width='150px'>UniProt interactor B</th><th width='150px'>Taxid interactor B</th><th width='150px'>Interaction identifier(s)</th><th width='150px'>Interaction identifier(s)</th><th width='150px'>Publication Identifier(s)</th><th width='150px'>Interaction type(s)</th><th width='150px'>Processing status</th></tr>","IntAct":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ID interactor A</th><th width='150px'>UniProt interactor A</th><th width='150px'>Alias interactor A</th><th width='150px'>Taxid interactor A</th><th width='150px'>ID interactor B</th><th width='150px'>UniProt(s) interactor B</th><th width='150px'>Alias interactor B</th><th width='150px'>Taxid interactor B</th><th width='150px'>Interaction identifier(s)</th><th width='150px'>Interaction detection method(s)</th><th width='150px'>Publication Identifier(s)</th><th width='150px'>Interaction type(s)</th><th width='150px'>Confidence value(s)</th></tr>","STRING":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>String ID Interactor a</th><th width='150px'>UniProt Interactor a</th><th width='150px'>Protein Name Interactor a</th><th width='150px'>Organism Interactor a</th><th width='150px'>String ID Interactor b</th><th width='150px'>UniProt Interactor b</th><th width='150px'>Protein Name Interactor b</th><th width='150px'>Organism Interactor b</th><th width='150px'>Mode</th><th width='150px'>Direction</th><th width='150px'>Score</th></tr>","eggNOG":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Protein</th><th width='150px'>Organism ID</th><th width='150px'>Organism</th><th width='150px'>Orthologous Group</th><th width='150px'>Protein No.</th><th width='150px'>Species No.</th><th width='150px'>Tag</th><th width='150px'>Group Name</th></tr>","HOGENOM":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ID</th><th width='150px'>Proteins Number</th><th width='150px'>Species Number</th><th width='150px'>Description</th></tr>","KO":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>KEGG Gene</th><th width='150px'>Organism ID</th><th width='150px'>Organism</th><th width='150px'>KEGG ORTHORGY ID</th><th width='150px'>KEGG ORTHORGY Name</th><th width='150px'>KEGG ORTHORGY Definition</th></tr>","OMA":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>OMA Protein ID</th><th width='150px'>OMA Group</th><th width='150px'>Group Description</th></tr>","OrthoDB":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>OMA Group</th><th width='150px'>Protein ID</th><th width='150px'>Taxon ID</th><th width='150px'>Organism</th><th width='150px'>Group Name</th></tr>","OrtholugeDB":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Analysis Type</th><th width='150px'>GI (Strain 1)</th><th width='150px'>Locus Tag (Strain 1)</th><th width='150px'>NCBI RefSeq Accession (Strain 1)</th><th width='150px'>Description (Strain 1)</th><th width='150px'>Strain 1</th><th width='150px'>GI (Strain 2)</th><th width='150px'>Locus Tag (Strain 2)</th><th width='150px'>NCBI RefSeq Accession (Strain 2)</th><th width='150px'>Description (Strain 2)</th><th width='150px'>Strain 2</th><th width='150px'>Inparalogs</th><th width='150px'>Strain 1 Inparalogs (Locus Tag/Name)</th><th width='150px'>Strain 2 Inparalogs (Locus Tag/Name)</th><th width='150px'>Strain 3 Inparalogs (Locus Tag/Name)</th></tr>","PhylomeDB":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Uniprot Seed ID</th><th width='150px'>PhylomeDB Seed ID</th><th width='150px'>Seed Organism</th><th width='150px'>Uniprot Ortholog ID</th><th width='150px'>PhylomeDB Ortholog ID</th><th width='150px'>Ortholog Organism</th><th width='150px'>Type</th><th width='150px'>Score</th><th width='150px'>Co-orthologs</th><th width='150px'>Phylome</th><th width='150px'>Phylome Name</th><th width='150px'>Phylome Comments</th></tr>","BioCyc":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Description</th></tr>","KEGG Pathway":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ID</th><th width='150px'>Description</th></tr>","Reactome":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ID</th><th width='150px'>Description</th></tr>","WikiPathways":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>UniProt</th><th width='150px'>Gene name</th><th width='150px'>Pathway ID</th><th width='150px'>Pathway</th><th width='150px'>Pathway description</th></tr>","CyanoBase":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Organism Name</th><th width='150px'>Assembly ID</th><th width='150px'>BioProject ID</th><th width='150px'>BioSample ID</th><th width='150px'>Taxonomy ID</th><th width='150px'>Assembly Level</th><th width='150px'>Release Date</th></tr>","DisProt":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>DisProt ID</th><th width='150px'>Region start</th><th width='150px'>Region end</th><th width='150px'>Detection method</th><th width='150px'>Region name</th><th width='150px'>PMID</th><th width='150px'>Tags</th><th width='150px'>PDB structure</th></tr>","EchoBASE":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>EchoBASE ID</th><th width='150px'>Gene Name</th><th width='150px'>Subcellular Location</th><th width='150px'>Predicted Molecular weight (Da)</th><th width='150px'>Number of TMH (HMMTOP/TMHMM)</th><th width='150px'>Signal Peptide Cleavage Prob</th><th width='150px'>Function</th></tr>","TADB2":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>UniProt</th><th width='150px'>TA ID</th><th width='150px'>Protein Name</th><th width='150px'>TADB Type</th><th width='150px'>RefSeq</th><th width='150px'>GI</th><th width='150px'>Locus Tag</th><th width='150px'>Strain</th></tr>","ATGC":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>ATGC_COG</th><th width='150px'>RefSeq ID</th><th width='150px'>ATGC ID</th><th width='150px'>GI</th><th width='150px'>Taxon ID</th><th width='150px'>Organism</th></tr>","PATRIC":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>Protein ID</th><th width='150px'>Genome ID</th><th width='150px'>Genome Name</th><th width='150px'>Organism</th><th width='150px'>Genome Status</th><th width='150px'>Publication</th><th width='150px'>Bioproject Accession</th><th width='150px'>Biosample Accession</th><th width='150px'>Assembly Accession</th><th width='150px'>Genbank Accessions</th><th width='150px'>Refseq Accessions</th><th width='150px'>Sequencing Centers</th><th width='150px'>Sequencing Status</th><th width='150px'>Sequencing Platform</th><th width='150px'>Sequencing Depth</th><th width='150px'>Assembly Method</th></tr>","Census of bacterial signal transduction proteins":"<table class='dettab' cellpadding='4' style='border:1px solid black; border-collapse:collapse;'><tr><th width='150px'>UniProt</th><th width='150px'>Locus tag</th><th width='150px'>Signal transduction systems</th><th width='150px'>Refseq ID</th><th width='150px'>Protein ID</th><th width='150px'>Organism</th></tr>",};
							
							
							var pmid={"CoryneRegNet": "4_,","Mentha": "6_ ","RAID": "7_,","BioGrid":"12_,","BioGRIDChemical":"8_,","DIP":"9_;","IntAct":"11_,","MMDB":"4_,","PATRIC":"6_,",};
							//No description databases
							var nodeschash={'':'',};
							//All Databases' Description Order in File
							var dbdes={'ChEMBL':1,'CollecTF':2,'CoryneRegNet':3,'DBTBS':4,'DrugBank':5,'EchoBASE':6,'EcoGene':7,'EffectiveDB':8,'enzyme':9,'footprintDB':10,'Leproma':11,'MEROPS':12,'P2CS':13,'P2TF':14,'PHI-base':15,'PRODORIC2':16,'PseudoCAP':17,'PSortDB':18,'RegPrecise':19,'RegulonDB':20,'SecReT6':21,'SigMol':22,'SwissLipids':23,'t4ss':24,'Mycobrowser':25,'aBiofilm':26,'APD3':27,'BacDive':28,'EnsemblGenome':93,'GOLD':30,'IMGM':31,'LPSN':32,'MicrobesOnline':33,'MicrobeWiki':34,'MicroScope':35,'NCBI taxonomy':36,'PAIDB 2.0':37,'PATRIC':38,'proGenomes':39,'RDP-II':40,'SILVA':41,'CATH':42,'DisProt':43,'MMDB':44,'PDB':45,'SCOP2':46,'ESTHER':47,'CATH-Gene3D':48,'HAMAP':49,'InterPro':50,'PANTHER':51,'PeroxiBase':52,'Pfam':53,'PIRSF':54,'PRINTS':55,'PROSITE':56,'REBASE':57,'SMART':58,'TCDB':59,'TIGRFAMs':60,'BioGrid':61,'ComplexPortal':62,'DIP':63,'Mentha':64,'IntAct':65,'RAID':66,'STITCH':67,'STRING':68,'ATGC':69,'COG':70,'eggNOG':71,'HOGENOM':72,'InParanoid':73,'KO':74,'OMA':75,'OrthoDB':76,'BioCyc':77,'ECMDB':78,'KEGG Pathway':79,'Reactome':80,'CAMP':81,'Island':82,'TADB2':83,'TransportDB':84,'tRNADB-CE':85,'MVP':86,'Compute pIMw':87,'fusionDB':88,'CyanoBase':89,'BacWGSTdb':90,'WikiPathways':91,'BioGRIDChemical':92,'MSA':94,'OrtholugeDB':95,'PhylomeDB':96,'Census of bacterial signal transduction proteins':97,};
							//Direct Display databases
							//var directhash={'EffectiveDB':'', 'RegPrecise':'', 'MEROPS':'', 'PSORTdb':'', 'SecReT6':'', 'footprintDB':'', 'PHI-base':'', 'enzyme':'', 'PIRSF':'', 'PROSITE':'', 'KEGG Pathway':'', 'Reactome':''};
							var directhash={'RDP-II':'', 'Gene3D':'','SecRet6':'',};
							
							var dethash1={'CAMP': 1,'ChEMBL': 2,'CollecTF': 3,'CoryneRegNet': 4,'DBTBS': 5,'DrugBank': 6,'EffectiveDB': 7,'Enzyme': 8,'FootprintDB': 9,'Island': 10,'MEROPS': 11,'Mycobrowser': 12,'P2CS': 13,'P2TF': 14,'PeroxiBase': 15,'PHI-Base': 16,'PRODORIC2': 17,'PseudoCAP': 18,'PSortDB': 19,'REBASE': 20,'RegPrecise 3.0': 21,'RegulonDB': 22,'SigMol': 23,'SwissLipids': 24,'T4SS': 25,'TransportDB 2.0': 26,'aBiofilm': 27,'BacDive': 28,'EnsemblGenome': 29,'fusionDB': 30,'GOLD': 31,'LPSN': 32,'MicrobesOnline': 33,'MicrobeWiki': 34,'MicroScope': 35,'MVP': 36,'NCBI Taxonomy': 37,'PAIDB 2.0': 38,'proGenomes': 39,'SILVA':40,'tRNADB-CE':41,'MMDB':42,'PDB':43,'SCOP2':44,'Compute pI/Mw':45,"CATH-Gene3D":46,'ESTHER':47,'HAMAP':48,'InterPro':49,'PANTHER':50,'Pfam':51,'PIRSF':52,'PRINTS':53,'PROSITE':54,'SMART':55,'TCDB':56,'TIGRFAMs':57,'BioGrid':58,'BioGRIDChemical':59,'ComplexPortal':60,'DIP':61,'IntAct':62,'Mentha':63,'RAID 2.0':64,'STITCH':65,'STRING':66,'COG':67,'EggNOG':68,'HOGENOM':69,'InParanoid':70,'KO':71,'OMA':72,'OrthoDB':73,'OrtholugeDB':74,'PhylomeDB':75,'BioCyc':76,'ECMDB':77,'KEGG Pathway':78,'Reactome':79,'WikiPathways':80,'CyanoBase':81,'DisProt':82,'EchoBASE':83,'TADB 2.0':84,'ATGC':85,'PATRIC':86,'Census of bacterial signal transduction proteins':87,};
							//Database Link 
							var linkhash={'P2CS':'http://www.p2cs.org/getSequence.php?base=','P2TF':'www.p2tf.org/getSequence.php?base=','TransportDB':'http://www.membranetransport.org/transportDB2/protein.php?pSynonym=','EffectiveDB':'https://effectors.csb.univie.ac.at/effective/precalculated/eggnog40/','RegPrecise':'http://regprecise.lbl.gov/RegPrecise/genome.jsp?genome_id=','MEROPS':'','SigMol':'http://bioinfo.imtech.res.in/manojk/sigmol/record.php?details=','Island':'https://bioinformatics.sandia.gov/islander/cgi-bin/island.cgi?island=','PHI-base':'http://www.phi-base.org/searchFacet.htm?queryTerm=','CAMP':'http://www.camp3.bicnirrh.res.in/seqDisp.php?id=','DBTBS':'http://dbtbs.hgc.jp/COG/','RegulonDB':'http://regulondb.ccg.unam.mx/','CoryneRegNet':'https://coryneregnet.compbio.sdu.dk/v6e/CoryneRegNet/queryElement.php?gene=','CollecTF':'http://www.collectf.org/uniprot/',};
							//After Links
							var linkhash2={'P2CS':'','P2TF':'','TransportDB':'','EffectiveDB':'','RegPrecise':'','MEROPS':'','SigMol':'','Island':'','PHI-base':'','CAMP':'','DBTBS':'.html','RegulonDB':'','CoryneRegNet':'','CollecTF':'',};
							
							
							var $dbs="";
							var $desclist="";
							var num=Math.floor(($id-1)/10000);
							var line=Math.floor($id);
							if(all[hash.direct] == 1){
									//$("#print").html("Yes "+line);
									$.get("File.php",{file:"Anno/DirectDisplay.data",id:line},function(response){
										//$("#print").html("Yes");
									response=response.replace(/[\r\n]/g,'');
									var $data=response.split("\t");
									 $dbs=$data[1].split(",,");
									 $desclist=$data[2].split(",,");
									for(i=0;i<$dbs.length;i++){
										if($dbs[i] != ''){
											directhash[$dbs[i]]=$desclist[i];
										}
									}
									//$("#print").html("Yes"+directhash['EffectiveDB']);
									
									
									if(all[hash.Aspect]!=''){
								$annolist=all[hash.Aspect].split(",,");
								$dblist=all[hash.dblist].split(";;");
								$acclist=all[hash.Acc].split(";;");
								$accidlist=all[hash.Accid].split(";;");
								//list="<table id='Annotable' cellpadding='4' cellspacing=0 border=1>";
								list="";
								$asplen = $annolist.length;
								for(var i in $annolist){
									//list=list+"<tr><th colspan=4><a href='Annotation.php?id="+all[hash.ID]+"#"+i+"' target='_blank'>"+$annolist[i]+"</a></th></tr>";
									list=list+"<h4 id='"+hash3[$annolist[i]]+"' >"+hash1[$annolist[i]]+"</h4>";
									$(".annoside").append("<li class='sideli'><span class='arrow_box'>&nbsp;&nbsp;<a href=#"+hash3[$annolist[i]]+" class='lnkpg'>&nbsp;"+hash2[$annolist[i]]+"</a>&nbsp;</span></li>");
									list=list+"<table class='databaseTable'> <tbody>";
									$(".sideli").mouseover(function(){
										$(this).children("span").css("background","rgba(255,255,255,1)");
									});
									$(".sideli").mouseout(function(){
										$(this).children("span").css("background","#963c64");
										
									});
									
									var one=$dblist[i].split(",,");
									var oneacc=$acclist[i].split(",,");
									var oneaccid=$accidlist[i].split(",,");
									//var row=Math.ceil(one.length/4);
									for(var tmp=0;tmp<one.length;tmp++){
										if(one[tmp] in directhash){
											//$("#print").html("Yes "+one[tmp]);
											var $desc=directhash[one[tmp]];
											//$("#print").html("Yes "+$desc);
										if(one[tmp].search(/_/)!=-1){
													one[tmp]=one[tmp].split("_")[1];
												}//one[tmp]=one[tmp].replace(/REP_/,"");
												var $dbname;
												if(one[tmp]=='inBio Map'){
													$dbname=one[tmp]+"<sup>TM</sup>";
												}else{
													$dbname=one[tmp];
												}
												list=list+"<tr>";
												var $dbnamefl=$dbname;
												if($dbname in dbhash){
													$dbname=dbhash[$dbname];
												}
												list=list+"<td class='annodb' id='"+$dbname+"'><span class='context_help' id='"+$dbnamefl+"'>"+$dbname.replace(/&/,"/")+"<sup id='isup'>i</sup>&nbsp;&nbsp;"+"</span></td>";
												//list=list+"<td class='annoacc'><a href=http://www.uniprot.org/uniprot/'>["+$dbname.replace(/&/,"/")+" Accession]</a></td>";
																							
												if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"' target='_blank'>"+oneacc[tmp]+"</a></td>";
													
												}else{
													//$("#print").html("No");
													list=list+"<td class='annoacc'>"+ac2acid(oneacc[tmp],oneaccid[tmp])+"</td>";
												}
												
												
												//if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"'>"+oneacc[tmp]+"</a></td>";
												//}else{
													//$("#print").html("No");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+"'>"+oneacc[tmp]+"</a></td>";
												//}
												list=list+"<td class='annodesc'><span class='context_desc' >&nbsp;&nbsp;&nbsp;"+$desc+"</td></tr>";
										}
										else{
											if(one[tmp] in nodeschash){
												if(one[tmp].search(/_/)!=-1){
													one[tmp]=one[tmp].split("_")[1];
												}//one[tmp]=one[tmp].replace(/REP_/,"");
												var $dbname;
												if(one[tmp]=='inBio Map'){
													$dbname=one[tmp]+"<sup>TM</sup>";
												}else{
													$dbname=one[tmp];
												}
												list=list+"<tr>";
												var $dbnamefl=$dbname;
												if($dbname in dbhash){
													$dbname=dbhash[$dbname];
												}
												list=list+"<td class='annodb' id='"+$dbname+"'><span class='context_help' id='"+$dbnamefl+"'>"+$dbname.replace(/&/,"/")+"<sup id='isup'>i</sup>&nbsp;&nbsp;"+"</span></td>";
												//list=list+"<td class='annoacc'><a href=http://www.uniprot.org/uniprot/'>["+$dbname.replace(/&/,"/")+" Accession]</a></td></tr>";
												//if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"'>"+oneacc[tmp]+"</a></td>";
												//}else{
													//$("#print").html("No");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+"'>"+oneacc[tmp]+"</a></td>";
													//}
												if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"' target='_blank'>"+oneacc[tmp]+"</a></td>";
													
												}else{
													//$("#print").html("No");
													list=list+"<td class='annoacc'>"+ac2acid(oneacc[tmp],oneaccid[tmp])+"</td>";
												}
											}else{
												if(one[tmp].search(/_/)!=-1){
													one[tmp]=one[tmp].split("_")[1];
												}//one[tmp]=one[tmp].replace(/REP_/,"");
												var $dbname;
												if(one[tmp]=='inBio Map'){
													$dbname=one[tmp]+"<sup>TM</sup>";
												}else{
													$dbname=one[tmp];
												}
												list=list+"<tr>";
												var $dbnamefl=$dbname;
												if($dbname in dbhash){
													$dbname=dbhash[$dbname];
												}
												list=list+"<td class='annodb' id='"+$dbname+"'><span class='context_help' id='"+$dbnamefl+"'>"+$dbname.replace(/&/,"/")+"<sup id='isup'>i</sup>&nbsp;&nbsp;"+"</span></td>";
												//list=list+"<td class='annoacc'><a href=http://www.uniprot.org/uniprot/'>["+$dbname.replace(/&/,"/")+" Accession]</a></td>";
												//if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"'>"+oneacc[tmp]+"</a></td>";
												//}else{
													//$("#print").html("No");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+"'>"+oneacc[tmp]+"</a></td>";
												//}
												if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"' target='_blank'>"+oneacc[tmp]+"</a></td>";
													
												}else{
													//$("#print").html("No");
													list=list+"<td class='annoacc'>"+ac2acid(oneacc[tmp],oneaccid[tmp])+"</td>";
												}
												
												var line=Math.floor($id);
												var data='';
												var des='';
												
												$.ajax({
													type: "GET",
													 url: "File.php",
													 data: {file:"Anno/DetailAnno.txt",id:line+1},
													 async:false,
													 success: function(response){
													response=response.replace(/[\r\n]/g,'');
													data=response.split("\t");
													des=data[dethash1[$dbname]];
													//$("#print").html("yes"+des);
												}
													
												});
												//$("#print").html("yes"+des);
												
												
												
												list=list+"<td class='annobut' id='"+$dbname+"'><span id='dt'>&nbsp;&nbsp;&nbsp;"+des+"&nbsp;</span><img title='Data Sheet' class='AnnoDetail' name='"+$annolist[i]+"_"+$dbnamefl+"' src='images/detail1.png' width='42px' height='22px' /> </td></tr>";
												
												
												
												//list=list+"<td class='annobut' id='"+$dbname+"'><span id='dt'>&nbsp;&nbsp;&nbsp;Annotation details&nbsp;</span><img title='Data Sheet' class='AnnoDetail' name='"+$annolist[i]+"_"+$dbnamefl+"' src='images/detail1.png' width='42px' height='22px' /> </td></tr>";
												
											}
											
									//}
										}
								}
									list=list+"</tbody></table>";
							}
							$("#Annotation").append("<p class='type'>&#9660;&nbsp;Annotation</p><hr size='1'/>"+list+"<br/>");
									}
									
								//////////////////////////////////////////////////////////////////////////////
//<div id='Helpdialog' title=''><h4 id="dbdesc"></h4><div id="dblink"></div></div>
//<div id='Detaildialog' title=''></div>

							//context_help dialog
							//$("#Helpdialog").dialog({autoOpen: false, width:'400px'});
							$(".context_help").click(function(){
								var X = $(this).parent().position().left;
								var Y = $(this).parent().position().top+24;
								$("#popBox").css({left:X,top:Y});
								
								var fltag=$(this).attr("id");
								var dbline=dbdes[fltag];
								//read file and get info	
								$.get("File.php",{file:"Anno/DatabaseDescription.txt",id:dbline},function(response){
									response=response.replace(/[\r\n]/g,'');
									var data=response.split("\t");
									var $desc=data[1];
									var $link=data[2];
									var out="<div class='help'><p id='dbdesc'>"+$desc+"</p><br/><a id='dblink' href='"+$link+"' title='The Link to "+fltag+".' target='_blank' id='linkmore'>Go to "+fltag+" <span class='special'>&raquo;</span></a></div><button onclick='closeBox()'>Close</button>";
								$("#Boxcontent").html(out);
								

								popBox();
								$("#popBox button").mouseover(function(){
									$(this).css("font-size","16px");
								});
								$("#popBox button").mouseout(function(){
									$(this).css("font-size","15px");
								});
									//$("#Helpdialog").html(out);
									//$("#Helpdialog").dialog("open");
									//$("#Helpdialog").dialog({width:'400px',position: '100px'});
								});
							});
							
							
							$(".context_help").mouseover(function(){
							$(this).css("color","#71b360");
							$(this).children("sup").css("color","#71b360");
							});
							$(".context_help").mouseout(function(){
							$(this).css("color","rgba(103,108,127,1)");
							$(this).children("sup").css("color","#963c64");
							});
							
							//AnnoDetail dialog 
							//$("#Detaildialog").dialog({autoOpen: false, width:'830px'});
							$(".AnnoDetail").click(function(){
								
								var fltag=$(this).attr("name").split("_");
								var dbname=$(this).parent().attr("id");
								var lnk=$(this).parent().prev().children("a").attr("href");
								
								var gnname=all[hash.GeneName];
								var addpmid=-1;
								var $split='';
								if(fltag[1] in pmid){
									addpmid=pmid[fltag[1]].split("_")[0]-1;
									$split=pmid[fltag[1]].split("_")[1];
								}
								//read file and get info	
								$.get("File.php",{file:"Anno/"+fltag[0]+"/"+fltag[1]+".data",id:line+1},function(response){
									
									
									response=response.replace(/[\r\n]/g,'');
									var data=response.split("\t");
									var row=data[1].split(";;");
									var out="<div class='min'>"+dethash[fltag[1]];
									
									for(i=0;i<row.length;i++){
										var col=row[i].split(",,");
										if(addpmid!=-1){
											col[addpmid]=list2link("https://www.ncbi.nlm.nih.gov/pubmed/","",col[addpmid],$split);
										}
										
										out=out+"<tr>";
										for(j=0;j<col.length;j++){
											if(col[j] == ''){
												col[j] = '-';
											}
											out=out+"<td>"+col[j]+"</td>";
										}
										out=out+"</tr>";
									}
									out=out+"</table></div><br/><div id='detailclose'><button class='hidebtn'><a href='"+lnk+"'>Get More <span class='special'>&raquo;</span></a></button></div>";
									$("#gn").html("<font style='font-weight:bold;font-family:'Open Sans',sans-serif;'>Gene</font>&nbsp;&nbsp;"+gnname);
									$("#db").html("<font style='font-weight:bold;font-family:'Open Sans',sans-serif;'>Database</font>&nbsp;&nbsp;"+dbname);
									$("#DetailTitle2").html("");
									
									$("#Detailcontent").html(out);
									
									detailBox();
									
									var w=$(".dettab").width()/2;
									var h=$(".dettab").height()/2;
									if($(".dettab").width()>900){
										w=450;
									}
									if($(".dettab").height()>480){
										h=240;
									}
									
									
									
									$("#detailBox").css({'margin-top': -h,'margin-right': 0,'margin-bottom': 0,'margin-left': -w});
									//$("#Detaildialog").html(out);
									//$("#Detaildialog").dialog("open");
									//$("#Detaildialog").dialog({'width':'400px'});
								});
								
							});
								//////////////////////////////////////////////////////////////////////////////
									});
								}else{
									if(all[hash.Aspect]!=''){
								$annolist=all[hash.Aspect].split(",,");
								$dblist=all[hash.dblist].split(";;");
								$acclist=all[hash.Acc].split(";;");
								$accidlist=all[hash.Accid].split(";;");
								//list="<table id='Annotable' cellpadding='4' cellspacing=0 border=1>";
								list="";
								$asplen = $annolist.length;
								for(var i in $annolist){
									//list=list+"<tr><th colspan=4><a href='Annotation.php?id="+all[hash.ID]+"#"+i+"' target='_blank'>"+$annolist[i]+"</a></th></tr>";
									list=list+"<h4 id='"+hash3[$annolist[i]]+"' class='xref_category'>"+hash1[$annolist[i]]+"</h4>";
									$(".annoside").append("<li class='sideli'><span class='arrow_box'>&nbsp;&nbsp;<a href=#"+hash3[$annolist[i]]+" class='lnkpg'>&nbsp;"+hash2[$annolist[i]]+"</a>&nbsp;</span></li>");
									list=list+"<table class='databaseTable'> <tbody>";
									$(".sideli").mouseover(function(){
										$(this).children("span").css("background","rgba(255,255,255,1)");
									});
									$(".sideli").mouseout(function(){
										$(this).children("span").css("background","#963c64");
										
									});
				
									var one=$dblist[i].split(",,");
									var oneacc=$acclist[i].split(",,");
									var oneaccid=$accidlist[i].split(",,");
									//var row=Math.ceil(one.length/4);
									for(var tmp=0;tmp<one.length;tmp++){
										if(one[tmp] in nodeschash){
										if(one[tmp].search(/_/)!=-1){
													one[tmp]=one[tmp].split("_")[1];
												}//one[tmp]=one[tmp].replace(/REP_/,"");
												var $dbname;
												if(one[tmp]=='inBio Map'){
													$dbname=one[tmp]+"<sup>TM</sup>";
												}else{
													$dbname=one[tmp];
												}
												list=list+"<tr>";
												var $dbnamefl=$dbname;
												if($dbname in dbhash){
													$dbname=dbhash[$dbname];
												}
												list=list+"<td class='annodb' id='"+$dbname+"'><span class='context_help' id='"+$dbnamefl+"'>"+$dbname.replace(/&/,"/")+"<sup id='isup'>i</sup>&nbsp;&nbsp;"+"</span></td>";
												//list=list+"<td class='annoacc'><a href=http://www.uniprot.org/uniprot/'>["+$dbname.replace(/&/,"/")+" Accession]</a></td></tr>";
												//if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
												//	list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"'>"+oneacc[tmp]+"</a></td>";
												//}else{
													//$("#print").html("No");
												//	list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+"'>"+oneacc[tmp]+"</a></td>";
												//}
												if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"' target='_blank'>"+oneacc[tmp]+"</a></td>";
													
												}else{
													//$("#print").html("No");
													list=list+"<td class='annoacc'>"+ac2acid(oneacc[tmp],oneaccid[tmp])+"</td>";
												}
									}
									else{
										if(one[tmp].search(/_/)!=-1){
													one[tmp]=one[tmp].split("_")[1];
												}//one[tmp]=one[tmp].replace(/REP_/,"");
												var $dbname;
												if(one[tmp]=='inBio Map'){
													$dbname=one[tmp]+"<sup>TM</sup>";
												}else{
													$dbname=one[tmp];
												}
												list=list+"<tr>";
												var $dbnamefl=$dbname;
												if($dbname in dbhash){
													$dbname=dbhash[$dbname];
											}
												list=list+"<td class='annodb' id='"+$dbname+"'><span class='context_help' id='"+$dbnamefl+"'>"+$dbname.replace(/&/,"/")+"<sup id='isup'>i</sup>&nbsp;&nbsp;"+"</span></td>";
												//list=list+"<td class='annoacc'><a href=http://www.uniprot.org/uniprot/'>["+$dbname.replace(/&/,"/")+" Accession]</a></td>";
												//if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"'>"+oneacc[tmp]+"</a></td>";
												//}else{
													//$("#print").html("No");
													//list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+"'>"+oneacc[tmp]+"</a></td>";
												//}
												if($dbnamefl in linkhash2){
													//$("#print").html("Yes");
													list=list+"<td class='annoacc'><a href='"+linkhash[$dbnamefl]+oneaccid[tmp]+linkhash2[$dbnamefl]+"' target='_blank'>"+oneacc[tmp]+"</a></td>";
													
												}else{
													//$("#print").html("No");
													list=list+"<td class='annoacc'>"+ac2acid(oneacc[tmp],oneaccid[tmp])+"</td>";
												}
												
												var line=Math.floor($id);
												var data='';
												var des='';
												
												$.ajax({
													type: "GET",
													 url: "File.php",
													 data: {file:"Anno/DetailAnno.txt",id:line+1},
													 async:false,
													 success: function(response){
													response=response.replace(/[\r\n]/g,'');
													data=response.split("\t");
													des=data[dethash1[$dbname]];
													//$("#print").html("yes"+des);
												}
													
												});
												
												
												
												list=list+"<td class='annobut' id='"+$dbname+"'><span id='dt'>&nbsp;&nbsp;&nbsp;"+des+"&nbsp;</span><img title='Data Sheet' class='AnnoDetail' name='"+$annolist[i]+"_"+$dbnamefl+"' src='images/detail1.png' width='42px' height='22px' /> </td></tr>";
									}
										}
									list=list+"</tbody></table>";
							}
							$("#Annotation").append("<p class='type'>&#9660;&nbsp;Annotation</p><hr size='1'/>"+list+"<br/>");
							}
							
							
							//////////////////////////////////////////////////////////////////////////////
//<div id='Helpdialog' title=''><h4 id="dbdesc"></h4><div id="dblink"></div></div>
//<div id='Detaildialog' title=''></div>

							//context_help dialog
							//$("#Helpdialog").dialog({autoOpen: false, width:'400px'});
							$(".context_help").click(function(){
								var X = $(this).parent().position().left;
								var Y = $(this).parent().position().top+24;
								$("#popBox").css({left:X,top:Y});
								
								var fltag=$(this).attr("id");
								var dbline=dbdes[fltag];
								//read file and get info	
								$.get("File.php",{file:"Anno/DatabaseDescription.txt",id:dbline},function(response){
									response=response.replace(/[\r\n]/g,'');
									var data=response.split("\t");
									var $desc=data[1];
									var $link=data[2];
									var out="<div class='help'><p id='dbdesc'>"+$desc+"</p><br/><a id='dblink' href='"+$link+"' title='The Link to "+fltag+".' target='_blank' id='linkmore'>Go to "+fltag+" <span class='special'>&raquo;</span></a></div><button onclick='closeBox()'>Close</button>";
								$("#Boxcontent").html(out);
								

								popBox();
								$("#popBox button").mouseover(function(){
									$(this).css("font-size","16px");
								});
								$("#popBox button").mouseout(function(){
									$(this).css("font-size","15px");
								});
									//$("#Helpdialog").html(out);
									//$("#Helpdialog").dialog("open");
									//$("#Helpdialog").dialog({width:'400px',position: '100px'});
								});
							});
							
							$(".context_help").mouseover(function(){
							$(this).css("color","#71b360");
							$(this).children("sup").css("color","#71b360");
							});
							$(".context_help").mouseout(function(){
							$(this).css("color","rgba(103,108,127,1)");
							$(this).children("sup").css("color","#963c64");
							});
							
							//AnnoDetail dialog 
							//$("#Detaildialog").dialog({autoOpen: false, width:'830px'});
							$(".AnnoDetail").click(function(){
								
								var fltag=$(this).attr("name").split("_");
								var dbname=$(this).parent().attr("id");
								var lnk=$(this).parent().prev().children("a").attr("href");
								
								var gnname=all[hash.GeneName];
								var addpmid=-1;
								var $split='';
								if(fltag[1] in pmid){
									addpmid=pmid[fltag[1]].split("_")[0]-1;
									$split=pmid[fltag[1]].split("_")[1];
								}
								//read file and get info	
								$.get("File.php",{file:"Anno/"+fltag[0]+"/"+fltag[1]+".data",id:line+1},function(response){
									
									
									response=response.replace(/[\r\n]/g,'');
									var data=response.split("\t");
									var row=data[1].split(";;");
									var out="<div class='min'>"+dethash[fltag[1]];
									
									for(i=0;i<row.length;i++){
										var col=row[i].split(",,");
										if(addpmid!=-1){
											col[addpmid]=list2link("https://www.ncbi.nlm.nih.gov/pubmed/","",col[addpmid],$split);
										}
										out=out+"<tr>";
										for(j=0;j<col.length;j++){
											if(col[j] == ''){
												col[j] = '-';
											}
											out=out+"<td>"+col[j]+"</td>";
										}
										out=out+"</tr>";
									}
									out=out+"</table></div><br/><div id='detailclose'><button class='hidebtn'><a href='"+lnk+"'>Get More <span class='special'>&raquo;</span></a></button></div>";
									$("#gn").html("<font style='font-weight:bold;'>Gene</font>&nbsp;&nbsp;"+gnname);
									$("#db").html("<font style='font-weight:bold;'>Database</font>&nbsp;&nbsp;"+dbname);
									$("#DetailTitle2").html("");
									
									$("#Detailcontent").html(out);
									
									detailBox();
									
									var w=$(".dettab").width()/2;
									var h=$(".dettab").height()/2;
									
									if($(".dettab").width()>900){
										w=450;
									}
									if($(".dettab").height()>480){
										h=240;
									}
									$("#detailBox").css({'margin-top': -h,'margin-right': 0,'margin-bottom': 0,'margin-left': -w});
									//$("#Detaildialog").html(out);
									//$("#Detaildialog").dialog("open");
									//$("#Detaildialog").dialog({'width':'400px'});
								});
								
							});
								//////////////////////////////////////////////////////////////////////////////
								}
							
							
							//Sequence
							$("#Sequence").append("<p class='type'>&#9660;&nbsp;Protein Sequence&nbsp;<button id='Pseq'>FASTA</button></p><hr size='1'/>");
							$("#Sequence").append("<p class='couriernew'>"+seqDisplay(all[hash.sequence])+"</p><br/>");
							$("#Seqdialog").dialog({autoOpen:false, width:"800", maxHeight:500, resizable:false});
							$("#Pseq").click(function(){
								$("#Seqdialog").attr({title:"Protein sequence"});
								$("#Seqdialog").html("<p>>"+all[hash.ID]+" "+all[hash.GeneName]+"<br/>"+all[hash.sequence]+"</p>");
								$("#Seqdialog").dialog("option","title","Protein sequence").dialog("open");
							});
							//CDS
							if(all[hash.CDS]!='N/A'){
								$("#CDS").append("<p class='type'>&#9660;&nbsp;Nucleotide Sequence&nbsp;<button id='CDSseq'>FASTA</button></p><hr size='1'/>");
								$("#CDS").append("<p class='couriernew'>"+seqDisplay(all[hash.CDS])+"</p><br/>");
							}
							$("#CDSseq").click(function(){
								$("#Seqdialog").html("<p>>"+all[hash.ID]+" "+all[hash.GeneName]+"<br/>"+all[hash.CDS]+"</p>");
								$("#Seqdialog").dialog("option","title","Nucleotide sequence").dialog("open");
							});
							//Keyword $("#Keyword").append(all[hash.keyword]);
							if(all[hash.keyword]!='N/A'){ 
								var $key=all[hash.keyword].split(".");
								$tmp="<table id='Keytab' cellpadding='4'><tr><th width='110'>Term</th><th width='290'>Description</th></tr>";
								for(var k=0;k<$key.length-1;k++){
									var $one=$key[k].split(";");
									$tmp=$tmp+"<tr><td><a href='http://www.uniprot.org/keywords/"+$one[0]+"' target='_blank'>"+$one[0]+"</td><td class='keydes'>"+$one[1]+"</td></tr>";
								}
								$tmp=$tmp+"</table>";
								$("#Keyword").append("<p class='type'>&#9660;&nbsp;Keyword</p><hr size='1'/>"+$tmp+"<br/>");
							}
							//GO $("#GO").append(all[hash.GO]);
							if(all[hash.GO]!=''){
								$tmp="<table id='Gotab' cellpadding='4'><tr><th width='110'>Term</th><th width='160'>Classification</th><th>Description</th></tr>";
								var go=all[hash.GO].split(".");
								for(var k=0;k<go.length-1;k++){
									var $goterm=go[k].split(";");
									var $two=$goterm[1].split(":");
									if($two[0]=='C'){
										$two[0]="Cellular Component";
									}else if($two[0]=='F'){
										$two[0]="Molecular Function";
									}else{
										$two[0]="Biological Process";
									}
									$tmp=$tmp+"<tr><td><a href='http://www.ebi.ac.uk/QuickGO/GTerm?id="+$goterm[0]+"' target='_blank'>"+$goterm[0]+"</a></td><td class='gotd'>"+$two[0]+"</td><td class='gotd'>"+$two[1]+"</td></tr>";
								}
								
								$tmp=$tmp+"</table>";
								$("#GO").append("<p class='type'>&#9660;&nbsp;Gene Ontology</p><hr size='1'/>"+$tmp);
							}else{
								$("#liGO").hide();
							}
							//
							$(document).mouseup(function(e){
								if(!$(".ui-dialog").is(e.target) && $(".ui-dialog").has(e.target).length == 0){
									$("#dialog").dialog("close");
									$("#MSAdialog").dialog("close");
									$("#Seqdialog").dialog("close");
									closeBox();
									//$("#Helpdialog").dialog("close");
									//closedetailBox();
									//$("#Detaildialog").dialog("close");
								}
							});
						}
					});
				}
				//
				
				
								
				$("#gbnav li").mouseover(function(){
					$(this).css({background:'url(images/manu_main11.png) 0 0 no-repeat'});
				});
				$("#gbnav li").mouseout(function(){
					$(this).css({background:''});
				});
				$(".sideview li").mouseover(function(){
					$(this).css("background-color","rgba(202, 135, 153, 0)");
					$(this).children("a").css("color","rgba(202,135,153,1)");
				});
				$(".sideview li").mouseout(function(){
					$(this).css("background-color","rgba(202,135,153,0.8)");
					$(this).children("a").css("color","rgba(255,255,255,1)");
				});
				
				$("#sideimgdown").click(function(){
					$("#liSequence").css("margin-top",asphash[$asplen]);
					$(".annoside").css("display","block");
					$("#sideimgup").css("display","inline");
					$(this).css("display","none");
				});
				
			

				$("#sideimgup").click(function(){
					$("#liSequence").css("margin-top","2px");
					$(".annoside").css("display","none");
					$("#sideimgdown").css("display","inline");
					$(this).css("display","none");
				});
				
				$("#bt").mouseover(function(){
					$(this).children("img").css("width","17px");
					$(this).children("img").css("height","17px");
				});
				$("#bt").mouseout(function(){
					$(this).children("img").css("width","14px");
					$(this).children("img").css("height","14px");
				});
				
				//$("#print").html($("#liAnnotation").index());

			
				
				
			});
		</script>
		<br class="clearfloat" /><br/><br/>
		<div id='print'></div>
		<?php require("common/foot.php"); ?>