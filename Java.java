// Java

class Sort { 
    void bubbleSort(int arr[]) { 
        int n = arr.length; 
        for (int i = 0; i < n-1; i++) 
            for (int j = 0; j < n-i-1; j++) 
                if (arr[j] > arr[j+1]) 
                { 
                    // swap arr[j+1] and arr[j] 
                    int temp = arr[j]; 
                    arr[j] = arr[j+1]; 
                    arr[j+1] = temp; 
                } 
    } 
  
    /* Output the array */
    void printArray(int arr[]) { 
        int n = arr.length; 
        System.out.print("["):
        for (int i = 0; i < n; ++i) System.out.print(arr[i] + ", "); 
        System.out.print("["):
        System.out.println();
    } 
  
    public static void main(String args[]) { 
        Sort sort = new Sort(); 
        int arr[] = {5,3,1,4,8,7,9};
        sort.bubbleSort(arr); 
        System.out.println("Sorted array"); 
        sort.printArray(arr); 
    } 
}