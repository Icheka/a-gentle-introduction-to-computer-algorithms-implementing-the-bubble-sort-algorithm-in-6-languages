```
/**
* Author: Ozuru Icheka
* GitHub: https://github.com/icheka
* Email: rhemafortune@gmail.com
*/
```


class Sort:
    def _swap(self, arr, idx1, idx2):
        if (arr[idx1] > arr[idx2]):
            tmp = arr[idx1]
            arr[idx1] = arr[idx2]
            arr[idx2] = tmp

        return arr
    
    def bubbleSort(self, arr):
        for i in range(0, len(arr) - 1):
            for idx in range(0, len(arr) - 1):
                arr = self._swap(arr, idx, idx + 1)
            
        return arr


def main():
    arr = [3,5,1,-3,4,8,7,9]
    sort = Sort()
    sorted_arr = sort.bubbleSort(arr)
    return sorted_arr

print("Sorted list: {}".format(main()))
