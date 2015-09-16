<?php 
	/**
	* 冒泡排序
	* 把最大的放在最后，然后排除，第二层循环就不用考虑它
	*/
	function maopao($arr){
		for($i=0;$i<count($arr)-1;$i++){
			for($j=0;$j<count($arr)-$i-1;$j++){/*把最大的放在最后,这个思想来写for*/
				if($arr[$j]>$arr[$j+1]){		//如果上一个数组大于下一个数组，换值
					$temp = $arr[$j+1];
					$arr[$j+1]=$arr[$j];
					$arr[$j]=$temp;
				}
			}
		}
		return $arr;
	}



	/**
	*	顺序排序
	*	把最小的放到首位，把最小的放在第一位
	*/
	function shunxu($arr){
		for($i=0;$i<count($arr)-1;$i++){
			$p = $i;
			for($j=$i+1;$j<count($arr);$j++){	/*把最小的放到首位,这个思想来写for*/
				$p = $arr[$i]<$arr[$j]?$i:$j; //保持P中的下标对应值为最小的
				if($i!=$p){					//每次把【最新的】第一位总存储最小的
					$temp = $arr[$p];
					$arr[$p] = $arr[$i];
					$arr[$i] = $temp;
				}
			}
		}
		return $arr;
	}
	$arr=array(55,14,2,32);
	// print_r(maopao($arr));
	print_r(shunxu($arr));

 ?>