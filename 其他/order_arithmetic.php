<?php 
	/**
	* 冒泡排序
	* @param array
	* 原理：将最大的数每次放在最后一位
	* 步骤：
	* n个元素,最多做n-1趟排序, 
	* 第1趟:将最大的   移动到第n个位置上,		   从第1个开始,到第n - 1个位置,均依次交换; 
	* 第2趟:将次大的   移动到第n - 1个位置上,	   从第1个开始,到第n - 2个位置,均依次交换; 
	* 第3趟:将第三大的 移动到第n - 2个位置上,    从第1个开始,到第n - 3个位置,均依次交换; 
	* 第i趟:将第二小的 移动到第n - i + 1个位置上,从第1个开始,到第n - i个位置,均依次交换; 
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
	*	选择排序/顺序排序
	*	@param array
	*	原理：把最小的放在第一位
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

	/**
	*	枚举排序
	*	@param array
	*	关键：数组中每个数和其他数做对比，统计出比自己小的数，作为新数组的下标
	*	原理: 越小的数，其比它小的数越少，下标越靠前
	*	注意：我写的时候直接在元数组中交换赋值，导致有些数据被覆盖丢失
	*/
	function meiJu($arr){
		foreach ($arr as $k => $v) {
			$count=0;
			for($i=0;$i<count($arr);$i++){
				if($v>$arr[$i])  $count+=1;
			}
			$return_arr[temp]=$arr[k];
		}
		return $return_arr;
	}
	$arr=array(55,14,2,32);
	// print_r(maopao($arr));
	print_r(shunxu($arr));

 ?>