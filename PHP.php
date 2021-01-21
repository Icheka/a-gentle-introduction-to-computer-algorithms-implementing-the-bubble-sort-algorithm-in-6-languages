/**
* Author: Ozuru Icheka
* GitHub: https://github.com/icheka
* Email: rhemafortune@gmail.com
*/

class Sort {
	protected sort(array $arr, int $idx1, int $idx2) {
		if ($arr[idx1] > $arr[idx2]) {
			$tmp = $arr[idx1];
			$arr[idx1] = $arr[idx2];
			$arr[idx2] = $tmp;
		}

		return arr;
	}
	
	public function bubbleSort(array $arr) {
		for ($i = 0; $i < count(arr) - 1; $i++) { //perform the swap operation on each item in the array
			for ($j = 0; $j < count(arr) - 1; $j++) { //get each item and its near-right neighbor
				$arr = $this->swap($arr, $j, $j + 1); //perform the swap 
			}
		}

		return $arr;
	}

}

function main() {
	$arr = array(3,5,1,4,8,7,9);
	$sort = new Sort();
	print_r($sort->bubbleSort($arr));	
}

main();