<?php
//if(!empty($data)){
	foreach ($data as $key => $value) {
				foreach ($value as $k => $v) {
					if($k=="nom"){
						$nom = $v;
						echo $nom;
						array_push($a, $nom);

					}elseif($k=="cognom"){
						$cognom = $v;
						array_push($a, $cognom);
					}elseif($k=="correu"){
						$correu = $v;
						array_push($a, $correu);
					}elseif($k=="contrasenya"){
						$pass = $v;
						array_push($a, $pass);
					}elseif($k=="telefon"){
						$telf = $v;
						array_push($a, $telf);
					}elseif($k=="compte"){
						$compte = $v;
						array_push($a, $compte);
					}elseif($k=="dir1"){
						$dir1 = $v;
						array_push($a, $dir1);
					}elseif($k=="dir2"){
						$dir2 = $v;
						array_push($a, $dir2);
					}
				}
			}
			echo "workin";
//}else{
	echo "nonono";
//}
?>