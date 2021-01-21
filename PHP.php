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
		for ($i = 0; $i < count(arr) - 1; $i++) {
			for ($j = 0; $j < count(arr) - 1; $j++) {
				$arr = $this->bubbleSort($arr, $j, $j + 1);
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