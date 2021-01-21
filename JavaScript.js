/**
* Author: Ozuru Icheka
* GitHub: https://github.com/icheka
* Email: rhemafortune@gmail.com
*/

class Sort {
  swap(arr, idx1, idx2) {
    if (arr[idx1] > arr[idx2]) {
      let tmp = arr[idx1];
      arr[idx1] = arr[idx2];
      arr[idx2] = tmp;
    }
    return arr;
  }

  bubbleSort(arr) {
    for (let i = 0; i < arr.length - 1; i++) {
      for (let j = 0; j < arr.length - 1; j++) {
        arr = this.swap(arr, j, j + 1);
      }
    }

    return arr;
  }
}

function main() {
	const arr = [3,5,1,4,8,7,9];
	const Sort = new Sort();
	return Sort.bubbleSort(arr);
}

console.log(main());