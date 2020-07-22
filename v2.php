<?php



/*
 * Complete the 'compareFriends' function below.
 *
 * The function is expected to return a STRING_ARRAY.
 * The function accepts STRING_ARRAY frndsList as parameter.
 */

function compareFriends($frndsList) {

	$two_dimensional_array = [];
	foreach ($frndsList as $f) {
		
		$f = str_replace('"', "", $f);
		if (strpos($f, ",") !== false) {
			$bits = explode(",", $f);
			$tmp = [$bits[0],$bits[1]];
			
			$two_dimensional_array[] = $tmp;
		}else{
			continue;
		}
		
	}

		for($i = count($two_dimensional_array)-1; $i >= 0 ; $i--) {
		   $j = $i-1; 
		   while ($j >= 0) { 
		      if (count(array_intersect($two_dimensional_array[$i],$two_dimensional_array[$j])) == count($two_dimensional_array[$i]))
		           {
		            unset($two_dimensional_array[$i]);
		             break;
		            }
		       else $j--;
		   }
		}

		usort($two_dimensional_array, function($a, $b) {
		    return $a['0'] <=> $b['0'];
		});

		

		$final_output = [];
		foreach ($two_dimensional_array as $t) {
		
			$fv = implode(",", $t);

			$final_output[] = $fv;
		}
	
	return $final_output;


}


$frndsList  = ["3","MARY,JOE","JOE,MARY","A,B"];

$result = compareFriends($frndsList);

echo "<br>";
print_r($result);

/*
javascript solution: 
-------------------------
function intersect(a, b) {
  return a.filter(Set.prototype.has, new Set(b));
}

function compareFriends(frndsList) {

	var two_dimensional_array = [];
	frndsList.forEach(item => {
  	console.log(item);
    if(item.includes(",")){
    	var bits = item.split(",");
      var tmp = [];
      tmp.push(bits[0]);
      tmp.push(bits[1]);
			
			two_dimensional_array.push(tmp);
			//two_dimensional_array[] = tmp;
    }
  })
  
  console.log(two_dimensional_array);
  
  for(var i = two_dimensional_array.length-1; i >= 0 ; i--) {
		   var j = i-1; 
		   while (j >= 0) { 
		      if ( ( intersect(two_dimensional_array[i],two_dimensional_array[j]) ).length == two_dimensional_array[i].length )
		           {
		            
                two_dimensional_array.splice(i, 1);
		             break;
		            }
		       else j--;
		   }
		}
    
    
    
    two_dimensional_array.sort(function(a, b) {
		    return a[0] - b[0];
		});
    
    var final_output = [];
    two_dimensional_array.forEach(item => {
    	var fv = item.join(',');
      final_output.push(fv);
    })
		
	
	return final_output;
		


}

frndsList  = ["3","MARY,JOE","JOE,MARY","A,B"];

result = compareFriends(frndsList);

*/