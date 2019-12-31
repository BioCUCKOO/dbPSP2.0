<?php
class Peptide{
	public function BasicPeptide($id){
		if(preg_match("/^PPP/",$id)){
			$row=substr($id,3);
			if($row<1 or $row>14540){
				echo "<br/><h3 align='center'>Sorry, your input couldn't be found in the database: $id.</h3>";
			}else{
				$row=$row-1;
				$file="Basic/2--Peptide-ID-Raw.txt";
				$fp = new SplFileObject($file, 'rb');
				$fp->seek($row);
				//echo $fp->current()."<br/>";
				$array=explode("\t",$fp->current());
				$file=null;
				if(count($array)==1){
					echo "<div><br/><h3 align='center'>Sorry, your input couldn't be found in the database: $id.</h3></div>";
				}else{
					echo "<div id='peptide'><div style=''>";
					$array[1]=str_replace("_","",$array[1]);
					$array[1]=str_replace("Sp","<font color='red'>pS</font>",$array[1]);
					$array[1]=str_replace("Tp","<font color='red'>pT</font>",$array[1]);
					$array[1]=str_replace("Yp","<font color='red'>pY</font>",$array[1]);
					echo "<h1 ><span id='tit'>&nbsp;&nbsp;$array[0]</span><br/>&nbsp;&nbsp;$array[1]<span id='org'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organism: <em>$array[3]</em></span></h1><hr id='hr1'/>";
					echo "</div></div><br/><br/><br/>";
					echo "";
					echo "<div>";
					//
					echo "<p class='type'>&#9660;&nbsp;Sites</p><hr class='hr2'/>";
					echo "<table class='Peptidetab' cellpadding='4' cellspacing=0 style='border-collapse:collapse;'>";
					echo $this->map($array[5]);
					echo "</table><br/>";
					//
					echo "<p class='type'>&#9660;&nbsp;References</p><hr class='hr2'/>";
					echo "<table class='Peptidetab' cellpadding='4' cellspacing=0 style='border-collapse:collapse;'>";
					$tmp=explode("::",$array[4]);
					echo $this->info($tmp[0]);
					echo "</table>";
					//
					echo "</div>";
				}
			}
		}else{
			echo "<br/><h3 align='center'>Sorry, your input couldn't be found in the database: $id.</h3>";
		}
	}
	
	public function info($list){
		$array=explode(";;",$list);
		echo "<tr><th width='120px'>Class</th><th width='180px'>LP score</th><th>PMIDs</th></tr>";
		foreach($array as $row){
			$info=explode(",,",$row);
			//echo "<tr><th>$row</th></tr>";
			if(count($info)==5){
				echo "<tr class='normal'>";
				//if($info[2]=="-"){
				//	echo "<td align='left'>$info[1]</td>";
				//}else{
					//echo "<td align='left'>$info[1] [$info[2]]</td>";
				//}
				if($info[4]=="N/A"){
					echo "<td><em>N/A</em></td><td><em>N/A</em></td>";
				}else{
					$info[4]=round($info[4],3);
					if($info[4]>0.75){
						echo "<td>Class I</td>";
					}else if($info[4]>0.5){
						echo "<td>Class II</td>";
					}else if($info[4]>=0.25){
						echo "<td>Class III</td>";
					}else{
						echo "<td>Class IV</td>";
					}
					echo "<td>$info[4]</td>";
				}
				echo "<td>".$this->str2link('https://www.ncbi.nlm.nih.gov/pubmed/','',$info[3])."</td>";
				echo "</tr>";
			}else{
				//if($info[0]=="PhospoPep 2.0"){
				//	$info[0]="PhosphoPep 2.0";
				//}else if($info[0]=="P3DB 3.0"){
				//	$info[0]="P<sup>3</sup>DB 3.0";
				//}
				//if($info[0]=="MPPD"){
				//	$info[2]="22701463,19923235";
				//}
				//echo "<tr class='normal'><td align='left'><a href='$info[1]' target='_blank'>$info[0]</a></td><td><em>N/A</em></td><td><em>N/A</em></td>";
				//$three=explode(",",$info[2]);
				//if($three[1]=="NA"){
				//	//echo "<td><a href='https://www.ncbi.nlm.nih.gov/pubmed/$three[0]' target='_blank'>$three[0]</a></div></td>";
				//}else{
				//	$three[0]=$three[0].";".$three[1];
				//}
				//echo "<td><div>".($this->array2links('https://www.ncbi.nlm.nih.gov/pubmed/', explode(';',$three[0]), ''))."</div></td>";
				//echo "</tr>";
			}
		}
	}
	
	public function map($list){
		$array=explode(";;",$list);
		echo "<tr><th>dbPSP ID</th><th>Protein Name</th><th>UniProt Accession</th><th>Position</th></tr>";
		foreach($array as $row){
			$info=explode(",,",$row);
			echo "<tr class='normal'><td><a href='View.2.php?id=$info[0]' target='_blank'>$info[0]</a></td><td>$info[1]</td><td>".$this->str2link('http://www.uniprot.org/uniprot/', '', $info[2])."</td><td>$info[3]</td></tr>";
		}
	}
	
	public function peptideinfo($list){
		$desc=explode(";;",$list);
		$str='';
		foreach ($desc as $one){
			$two=explode(",,",$one);
			if(count($two)==4){
				if($two[2]=='-'){
					$str=$str."$two[0]: $two[1] (PubMed: ".$this->str2link('https://www.ncbi.nlm.nih.gov/pubmed/','',$two[3]).").<br/>";
				}else{
					$str=$str."$two[0]: $two[1] [$two[2]] (PubMed: ".$this->str2link('https://www.ncbi.nlm.nih.gov/pubmed/','',$two[3]).").<br/>";
				}
			}else if(count($two)==3){
				$str=$str."<a href='$two[1]' target='_blank'>$two[0]</a> (PubMed: ".$this->str2link('https://www.ncbi.nlm.nih.gov/pubmed/','',$two[2]).").<br/>";
			}else{
				$two=explode("!",$one);
				$two[1]=str_replace(";","; ",$two[1]);
				$two[1]=str_replace(",",", ",$two[1]);
				$str=$str."$two[1]<br/>";
			}
		}
		return $str;
	}
	public function str2link($pre,$after,$str){
		$links="<a href='".$pre.$str.$after."' target='_blank'>".$str."</a>";
		return $links;
	}
	
	public function array2links($pre, $items, $after){
		$links = "";
		foreach ($items as $item){
			$links = $links.($this->str2link($pre, $after, trim($item)))."; ";
		}
		$links = substr($links,0,strlen($links)-4);
		return $links;
	}
}