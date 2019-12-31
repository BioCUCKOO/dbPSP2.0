<?php
//protein	id, primaryAcc, Status, UniProtAccession, ProteinName, ProteinAltNames, GeneName, GeneAltNames, Species
class Search{
	public function simpleSearch($context, $tag, $page){
		if(!isset($_SESSION)){
			session_start();
		}
		if($tag == 'Any'){
			$tag = "id UniProtAccession ProteinName ProteinAltNames GeneName GeneAltNames Species";
		}
		//$query ="select * from `protein` where (".$this->subQuery($context,$tag).") order by Status,field(Species,'Mus musculus (MOUSE)','Homo sapiens (HUMAN)') DESC";
		$query ="select * from `protein` where (".$this->subQuery($context,$tag).") order by Status DESC";
		//echo "$query<br />";
		
		//$db = mysqli_connect("localhost","root","819490","dbpsp"); 
		//if ( $db ) {
		//		   echo "数据库连接成功"; 
		//}else {
		//		   echo "数据库连接失败"; 
		//}
		
		$db = $this->connectDB();
		$result = $db->query($query);
		$resultsNumber = $result->num_rows;
		if($resultsNumber==0){
			echo "<h3 align='center'>Sorry, your input couldn't be found in the database: $context.</h3>";
		}else{
			//Number
			$numquery="select Status,count(*) as num from `protein` where (".$this->subQuery($context,$tag).") group by Status";
			//echo "$numquery<br />";
			$numresult = $db->query($numquery);
			$num=$numresult->num_rows;
			$total='';
			for($i=0;$i<$num;$i++){
				$row = $numresult->fetch_assoc();
				if($row['Status']=='Identify'){
					$total="<img src='images/r.png' /> Experimentally identified (<font id='Num'>$row[num]</font>) ";
				}else{
					$total=$total."or <img src='images/u.png' /> Potentially conserved (<font id='Num'>$row[num]</font>) ";
				}
			}
			$total=preg_replace("/^or/","",$total);
			echo "<p><font id='Name'>Substrate Search: $resultsNumber</font></p><hr/>";
			//
			echo "<table width='1000'  style='text-align:center;border-collapse:collapse;' cellpadding='4' >\n<thead>\n<tr>\n";
			//echo "<th width='60' scope='col'>Status</th>\n";
			echo "<th width='98' scope='col'>dbPSP ID</th>\n";
			echo "<th width='100' scope='col'>UniProt Accession</th>\n";
			echo "<th width='130' scope='col'>Gene Name</th>\n";
			echo "<th width='350' scope='col'>Protein Name</th>\n";
			echo "<th width='350' scope='col'>Organism</th>\n</thead>\n<tbody>\n";
			$displaybegin = ($page - 1)*20;
			$displayend = $page * 20;
			$tmp = (int)($resultsNumber/20);
			$pageall = $tmp*20 < $resultsNumber?$tmp+1:$tmp;
			for($i = 0;$i<$resultsNumber;$i++){
				$row = $result->fetch_assoc();
				$spid = stripslashes($row['id']);
				if( $i>= $displaybegin and $i < $displayend){
					//if($row['Status']=='Identify'){
					//	echo "<tr><td><img src='images/r.png'/></td>";
					//}else{
					//	echo "<tr><td><img src='images/u.png'/></td>";
					//}
					echo "<td><a href='View.2.php?id=$spid' target='_blank'><font>".$spid."</font></a></td>";
					echo "<td><a href='http://www.uniprot.org/uniprot/$row[primaryAcc]' target='_blank'>".$row['primaryAcc']."</a></td>";
					echo "<td>".$row['GeneName']."</td>";
					echo "<td>".$row['ProteinName']."</td>";
					echo "<td><em>".$row['Species']."</em></td></tr>\n";
				}
			}
			$_SESSION['simpleSearch'] = array($context, $tag);
			$one = 1;
			if($pageall == 1 or $pageall == 0){
				echo "<tr><td colspan='9' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=simple&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;Next&nbsp;&nbsp;|&nbsp;&nbsp;Last&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
			}elseif($page == $pageall){
				$pre=$page-1;
				echo "<tr><td colspan='9' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=simple&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=simple&page=$pre'>Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;Next&nbsp;&nbsp;|&nbsp;&nbsp;Last&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
			}elseif($page == 1){
				$aft=$page+1;
				echo "<tr><td colspan='9' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;First&nbsp;&nbsp;|&nbsp;&nbsp;Previous&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=simple&page=$aft' >Next</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=simple&page=$pageall'>Last</a></font>&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
			}else{
				$pre=$page-1;
				$aft=$page+1;
				echo "<tr><td colspan='9' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=simple&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=simple&page=$pre'>Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=simple&page=$aft'>Next</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=simple&page=$pageall'>Last</a></font>&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
			}
			echo "</tbody>\n</table>\n";
		}
	}
	
	public function advanceSearch($num,$tag,$input,$nameTagOptions,$nameTags,$nameInputs) {
		$db = $this->connectDB();
		//echo "$num,$tag,$input,$nameTagOptions,$nameTags,$nameInputs";
		if($tag == 'Any'){
			$tag = "id UniProtAccession ProteinName ProteinAltNames GeneName GeneAltNames Species";
		}
		$query ="select * from `protein` where (".$this->subQuery($input,$tag).") ";
		$str = "";
		for($i=0;$i<$num;$i++){
			$nto = $nameTagOptions[$i];
			if($nameTags[$i] == 'Any'){
				$nameTags[$i] = "id UniProtAccession ProteinName ProteinAltNames GeneName GeneAltNames Species";
			}
			$str .= $nto." (".$this->subQuery($nameInputs[$i],$nameTags[$i]).") ";
		}
		$query = $query.trim($str);
		//echo "$query<br/>";
		$name="Advance Search";
		$this->databasesSearch($query,$name);
	}
	
	public function BatchSearch($context, $tag){
		if($tag == 'Any'){
			$tag = "id UniProtAccession ProteinName ProteinAltNames GeneName GeneAltNames Species";
		}
		$query = $this->BatchSubQuery($context,$tag);
		//echo "$context,A,$query<br>";
		$name="Batch Search";
		$this->databasesSearch($query,$name);
	}
	
	public function blastSearch($inputSeq,$eValue){
		$tempFile = tempnam("./tmp", "P");
		$handle = fopen($tempFile , "w");
		fwrite($handle, $inputSeq);
		fclose($handle);
		
		//echo $tempFile."<br/>";
		//echo $inputSeq."<br/>";
		
		
		//exec("blastall.exe -p blastp -d ./Blast/Protein.fa -i $tempFile -e $eValue  -m 8",$array);
		exec("./blastall -p blastp -d Blast/Protein.fa -i $tempFile -e $eValue -m 8",$array);
		$num=sizeof($array);
		//echo $num;
		
		if($num==0){
			echo "<h3 align='center'>Sorry, your input couldn't be found in the database.</h3>";
		}else{
			echo "<p><font id='Name'>dbPSP proteins: ".sizeof($array)."</p><hr/>";
			if(sizeof($array) != 0){
				echo "<table width='1000'  style='text-align:center;border-collapse:collapse;' cellpadding='4' ><thead><tr>";
				echo "<th width='98' scope='col'>dbPSP ID</th>\n";
				echo "<th width='350' scope='col'>Protein Name</th>\n";
				echo "<th width='350' scope='col'>Organism</th>\n";
				echo "<th width='90' scope='col'><nobr>Identity</nobr></th>\n";
				echo "<th width='90' scope='col'><nobr>E-value</nobr></th>\n";
				echo "<th width='90' scope='col'><nobr>Score (bits)</nobr></th>\n</thead>\n<tbody align='center'>";
				$db = $this->connectDB();
				foreach ($array as $row){
					$arr = explode("\t",$row);
					//echo $arr[1];
					$query = "select * from protein where id = '".$arr[1]."'";
					//echo $query;
					$result = $db->query($query);
					$row = $result->fetch_assoc();
					$id = $row['id'];
					echo "<tr><td><a href='View.2.php?id=$id' target='_blank'>".$row['id']."</a></td>";
					echo "<td>".($row['ProteinName'] == ''?'':$row['ProteinName'])."</td>
					<td><em>$row[Species]</em></td>
					<td>".$arr[2]."%</td><td>".$arr[10]."</td><td>".$arr[11]."</td></tr>\n";
				}
				$db->close();
				echo "</tbody></table><br/><br/>";
			}
		}
	}
	public function browse($context, $page){
		if(!isset($_SESSION)){
			session_start();
		}
		$query ="select * from `protein` where (Species like '%$context%') order by Status";
		$numquery="select Status,count(*) as num from `protein` where (Species like '%$context%') group by Status";
		//echo "$query<br />$numquery";
		$db = $this->connectDB();
		$result = $db->query($query);
		$resultsNumber = $result->num_rows;
		$numresult = $db->query($numquery);
		$num=$numresult->num_rows;
		$total='';
		$data='';
		for($i=0;$i<$num;$i++){
			$row = $numresult->fetch_assoc();
			if($row['Status']=='Identify'){
				$total="<img src='images/r.png'/> Experimentally identified (<font id='Num'>$row[num]</font>) ";
			}else{
				$total=$total."or <img src='images/u.png' /> Potentially conserved (<font id='Num'>$row[num]</font>) ";
			}
		}
		

		$total=preg_replace("/^or/","",$total);
		echo "<p><br/><font id='Name'>Proteins of <em>$context</em>: $resultsNumber</font></p><hr/>";
		//
		echo "<table width='1000'  style='text-align:center;border-collapse:collapse;' cellpadding='4' ><thead><tr>\n";
		//echo "<th width='60' scope='col'>Status</th>\n";
		echo "<th width='98' scope='col'>dbPSP ID</th>\n";
		echo "<th width='100' scope='col'>UniProt Accession</th>\n";
		echo "<th width='110' scope='col'>Gene Name</th>\n";
		echo "<th width='300' scope='col'>Protein Name</th>\n";
		echo "<th width='350' scope='col'>Organism</th>\n</thead>\n<tbody>\n";
		$displaybegin = ($page - 1)*20;
		$displayend = $page * 20;
		$tmp = (int)($resultsNumber/20);
		$pageall = $tmp*20 < $resultsNumber?$tmp+1:$tmp;
		for($i = 0;$i<$resultsNumber;$i++){
			$row = $result->fetch_assoc();
			$spid = stripslashes($row['id']);
			if( $i>= $displaybegin and $i < $displayend){
				//if($row['Status']=='Identify'){
				//	echo "<tr><td><img src='images/r.png'/></td>";
				//}else{
				//	echo "<tr><td><img src='images/u.png'/></td>";
				//}
				echo "<td><a href='View.2.php?id=$spid' target='_blank'><font>".$spid."</font></a></td>";
				echo "<td><a href='http://www.uniprot.org/uniprot/$row[primaryAcc]' target='_blank'>".$row['primaryAcc']."</a></td>";
				echo "<td>".$row['GeneName']."</td>";
				echo "<td>".$row['ProteinName']."</td>";
				echo "<td><em>".$row['Species']."</em></td></tr>\n";
				$data .=$spid."\t".$row['primaryAcc']."\t".$row['GeneName']."\t".$row['ProteinName']."\t".$row['Species']; 
				nl2br($data);
			}
		}
		//echo $data;
		$_SESSION['Browse']=$context;
		$one = 1;
		if($pageall == 1 or $pageall == 0){
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#4' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;Next&nbsp;&nbsp;|&nbsp;&nbsp;Last&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}elseif($page == $pageall){
			$pre=$page-1;
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#4' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$pre'>Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;Next&nbsp;&nbsp;|&nbsp;&nbsp;Last&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}elseif($page == 1){
			$aft=$page+1;
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#4' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;First&nbsp;&nbsp;|&nbsp;&nbsp;Previous&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$aft' >Next</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$pageall'>Last</a></font>&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}else{
			$pre=$page-1;
			$aft=$page+1;
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#4' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$pre'>Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$aft'>Next</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse&page=$pageall'>Last</a></font>&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}
		echo "</tbody>\n</table>\n";
	}
	
	//protein1	id, uni, Status, pos, res, pro, org
	public function browse1($context, $page){
		if(!isset($_SESSION)){
			session_start();
		}
		$query ="select * from `protein1` where (res like '%$context%') order by Status";
		$numquery="select Status,count(*) as num from `protein1` where (res like '%$context%') group by Status";
		//echo "$query<br />$numquery";
		$db = $this->connectDB();
		$result = $db->query($query);
		$resultsNumber = $result->num_rows;
		$numresult = $db->query($numquery);
		$num=$numresult->num_rows;
		$total='';
		for($i=0;$i<$num;$i++){
			$row = $numresult->fetch_assoc();
			if($row['Status']=='Identify'){
				$total="<img src='images/r.png'/> Experimentally identified (<font id='Num'>$row[num]</font>) ";
			}else{
				$total=$total."or <img src='images/u.png' /> Potentially conserved (<font id='Num'>$row[num]</font>) ";
			}
		}
		$total=preg_replace("/^or/","",$total);
		if($context == 'S'){
			$res = 'Serine';
		}else if($context == 'T'){
			$res = 'Threonine';
		}else if($context == 'Y'){
			$res = 'Tyrosine';
		}else if($context == 'R'){
			$res = 'Arginine';
		}else if($context == 'C'){
			$res = 'Cysteine';
		}else if($context == 'D'){
			$res = 'Asparagicacid';
		}else if($context == 'H'){
			$res = 'Histidine';
		}
		
		echo "<p><br/><font id='Name'>Sites of $res Phosphorylation: $resultsNumber</font></p><hr/>";
		//
		echo "<table width='1000'  style='text-align:center;border-collapse:collapse;' cellpadding='4' ><thead><tr>\n";
		
		echo "<th width='110' scope='col'>dbPSP ID</th>\n";
		echo "<th width='100' scope='col'>UniProt Accession</th>\n";
		echo "<th width='90' scope='col'>Position</th>\n";
		echo "<th width='90' scope='col'>Residue</th>\n";
		echo "<th width='350' scope='col'>Protein Name</th>\n";
		echo "<th width='350' scope='col'>Organism</th>\n</thead>\n<tbody>\n";
		$displaybegin = ($page - 1)*20;
		$displayend = $page * 20;
		$tmp = (int)($resultsNumber/20);
		$pageall = $tmp*20 < $resultsNumber?$tmp+1:$tmp;
		for($i = 0;$i<$resultsNumber;$i++){
			$row = $result->fetch_assoc();
			$spid = stripslashes($row['id']);
			if( $i>= $displaybegin and $i < $displayend){
				echo "<td><a href='View.2.php?id=$spid' target='_blank'><font>".$spid."</font></a></td>";
				echo "<td><a href='http://www.uniprot.org/uniprot/$row[uni]' target='_blank'>".$row['uni']."</a></td>";
				echo "<td>".$row['pos']."</td>";
				echo "<td>".$row['res']."</td>";
				echo "<td>".$row['pro']."</td>";
				echo "<td><em>".$row['org']."</em></td></tr>\n";
			}
		}
		$_SESSION['Browse1']=$context;
		$one = 1;
		if($pageall == 1 or $pageall == 0){
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#5' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;Next&nbsp;&nbsp;|&nbsp;&nbsp;Last&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}elseif($page == $pageall){
			$pre=$page-1;
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#5' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$pre'>Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;Next&nbsp;&nbsp;|&nbsp;&nbsp;Last&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}elseif($page == 1){
			$aft=$page+1;
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#5' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;First&nbsp;&nbsp;|&nbsp;&nbsp;Previous&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$aft' >Next</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$pageall'>Last</a></font>&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}else{
			$pre=$page-1;
			$aft=$page+1;
			echo "<tr><td colspan='2' align='left'><img src='images/down/2.png' width='19px' height='19px'/>&nbsp;<a class='resdw' href='Download.php#5' target='_blank'>Download</a></td><td colspan='8' align='right'><font color='#963c64'>Page:&nbsp;".$page."&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$one'>First</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$pre'>Previous</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$aft'>Next</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='Result.php?type=Browse1&page=$pageall'>Last</a></font>&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		}
		echo "</tbody>\n</table>\n";
	}
	
	public function peptideSearch($context, $tag){
		//echo "$context,$tag<br/>";
		if($tag=='All'){
			$query="select * from peptide where (binary peptide like '%$context%')";
		}else{
			$query="select * from peptide where (binary peptide like '%$context%' and Species like '%$tag%')";
		}
		//echo "$query";
		$db = $this->connectDB();
		$result = $db->query($query);
		$resultsNumber = $result->num_rows;
		if($resultsNumber==0){
			echo "<h3 align='center'>Sorry, your input couldn't be found in the database: $context.</h3>";
		}else{
			echo "<p><font id='Name'>Peptide Search: $resultsNumber</font></p><hr/>";
			echo "<table width='1000'  style='text-align:center;border-collapse:collapse;' cellpadding='4'>";
			echo "<tr><th width=98>dbPSP ID</th><th>Phospho-Peptide</th><th width=350>Organism</th></tr>";
			for($i = 0;$i<$resultsNumber;$i++){
				$row = $result->fetch_assoc();
				$row['Species']=str_replace(";","<br>",$row['Species']);
				echo "<tr>";
				echo "<td><a href='Peptide.php?pid=$row[id]' target='_blank'>$row[id]</a></td>";
				$row['peptide']=str_replace("pS","<font color='red'>pS</font>",$row['peptide']);
				$row['peptide']=str_replace("pT","<font color='red'>pT</font>",$row['peptide']);
				$row['peptide']=str_replace("pY","<font color='red'>pY</font>",$row['peptide']);
				$row['peptide']=str_replace("pR","<font color='red'>pR</font>",$row['peptide']);
				$row['peptide']=str_replace("pC","<font color='red'>pC</font>",$row['peptide']);
				$row['peptide']=str_replace("pD","<font color='red'>pD</font>",$row['peptide']);
				$row['peptide']=str_replace("pH","<font color='red'>pH</font>",$row['peptide']);
				echo "<td style='word-wrap:break-word;'>$row[peptide]</td><td><em>$row[Species]</em></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
	
	public function databasesSearch($query,$name){
		$numquery=str_replace("select *","select Status,count(*) as num",$query);
		$numquery=$numquery." group by Status";
		//
		$query=$query."order by Status,field(Species,'Mus musculus (MOUSE)','Homo sapiens (HUMAN)') DESC";
		$db = $this->connectDB();
		$result = $db->query($query);
		$resultsNumber = $result->num_rows;
		if($resultsNumber==0){
			echo "<h3 align='center'>Sorry, your input couldn't be found in the database.</h3>";
		}else{
			//echo "$numquery";
			$numresult = $db->query($numquery);
			$num=$numresult->num_rows;
			$total='';
			for($i=0;$i<$num;$i++){
				$row = $numresult->fetch_assoc();
				if($row['Status']=='Identify'){
					$total="<img src='images/r.png'/> Experimentally identified (<font id='Num'>$row[num]</font>) ";
				}else{
					$total=$total."or <img src='images/u.png' /> Potentially conserved (<font id='Num'>$row[num]</font>) ";
				}
			}
			$total=preg_replace("/^or/","",$total);
			echo "<p><font id='Name'>$name: ";
			echo "$resultsNumber</font></p><hr/>";
			//echo "$numquery";
			echo "<table width='1000'  style='text-align:center;border-collapse:collapse;' cellpadding='4'>\n<thead>\n<tr>\n";
			//echo "<th width='60' scope='col'>Status</th>\n";
			echo "<th width='98' scope='col'>dbPSP ID</th>\n";
			echo "<th width='100' scope='col'>UniProt Accession</th>\n";
			echo "<th width='130' scope='col'>Gene Name</th>\n";
			echo "<th width='350' scope='col'>Protein Name</th>\n";
			echo "<th width='350' scope='col'>Organism</th>\n</thead>\n<tbody>\n";
			for($i = 0;$i<$resultsNumber;$i++){
				$row = $result->fetch_assoc();
				$spid = stripslashes($row['id']);
					//if($row['Status']=='Identify'){
					//	echo "<tr><td><img src='images/r.png'/></td>";
					//}else{
					//	echo "<tr><td><img src='images/u.png'/></td>";
					//}
					echo "<td><a href='View.2.php?id=$spid' target='_blank'><font>".$spid."</font></a></td>";
					echo "<td><a href='http://www.uniprot.org/uniprot/$row[primaryAcc]' target='_blank'>".$row['primaryAcc']."</a></td>";
					echo "<td>".$row['GeneName']."</td>";
					echo "<td>".$row['ProteinName']."</td>";
					echo "<td><em>".$row['Species']."</em></td></tr>\n";
			}
			echo "</tbody></table><br/><br/>";
		}
	}
	
	private function subQuery($context,$key){
		$kwArray = explode(" ",$context);
		$keyArray = explode(" ",$key);
		$subQuery = "";
		for($i=0;$i<sizeof($kwArray);$i++){
			$subQuery = $subQuery." (";
			for($keyi =0;$keyi<sizeof($keyArray);$keyi++){
				$subQuery = $subQuery." $keyArray[$keyi] like '%$kwArray[$i]%' or";
				
			}
			$subQuery= substr($subQuery,0,strlen($subQuery)-3);
			$subQuery = $subQuery.")";
			$subQuery = $subQuery." and";
		}
		$subQuery= substr($subQuery,0,strlen($subQuery)-4);
		return $subQuery;
	}
	
	private function BatchSubQuery($context,$tag)
	{
		$context=preg_replace("/\r/","",$context);
		$context=preg_replace("/\n$/","",$context);
		$context=preg_replace("/\n+/","\n",$context);
		$kwArray = explode("\n",$context);
		$keyArray = explode(" ",$tag);
		$subQuery = "";
		for($keyi =0;$keyi<sizeof($keyArray);$keyi++){
			for($i =0;$i<sizeof($kwArray);$i++){
				$subQuery = $subQuery." $keyArray[$keyi] like '%".trim($kwArray[$i])."%' or";
			}
			$subQuery= substr($subQuery,0,strlen($subQuery)-3);
			$subQuery = $subQuery." or";
		}
		$subQuery= substr($subQuery,0,strlen($subQuery)-3);
		$query = "select * from protein where ($subQuery)";
		return $query;
	}
	
	public function connectDB() {
		//@ $db = new mysqli('localhost','biocucko_epsd','epsd520','biocucko_epsd');
		//$db = mysqli_connect("localhost","root","819490","dbpsp"); 
		//@ $db = new mysqli('localhost','root','shiying521','dbpsp');
		//@ $db = new mysqli('localhost','root','root','dbpsp');
		@ $db = new mysqli('localhost','biocucko_dbpsp','dbpsp520','biocucko_dbpsp');
		if (!$db) {
			echo ("Can't connect to MySQL Server. Errorcode: %s ". mysqli_connect_error());
			exit;
		}else {
			return $db;
		}
	}
	
}
?>