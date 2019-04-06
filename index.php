<?
	
function summ($one_line,$two_line)
{
	$return = "";
	$kol_s_one = strlen(trim($one_line)); // количество символов в первой строке
	$kol_s_two = strlen(trim($two_line)); // количество символов в первой строке
	$max_chislo =""; // для записи  большего кол.символов
	$i=1; // счетчик 
	$kesh=0;  // число которое держим в уме 
	
	($kol_s_one<=$kol_s_two)? $max_chislo = $kol_s_two : $max_chislo = $kol_s_one; // выясняем где количество символов больше

	while($i<=$max_chislo)
	{ 
		$data = $kesh + $one_line[$kol_s_one-$i] + $two_line[$kol_s_two-$i]; // складываем два числа + число в уме
		 		
		if($data>9)
		{	 
			$data = (string)$data;
			$return .=  $data[1] ;
			$kesh =  $data[0];
		}
		else
		{
			$return .= $data;
			$kesh = 0;
		}
		$i++;
	}
	return strrev($return);
}

$one_line = "1234567898765433";
$two_line = "665432123493344343";	

	echo "Число 1 = ".$one_line;
	echo "<br />";
	echo "Число 2 = ".$two_line;
	echo "<br />";
	echo "сумма чисел = ".summ($one_line,$two_line);
	
?>