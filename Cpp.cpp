// C++

#include <stdio.h>

#define MAXSIZE 10



int main()

{

	int array[MAXSIZE];

	int i, j, num, temp;



	printf("Enter the count of elements \n");

	scanf("%d", &num);



	printf("Enter the elements one by one \n");

	for (i = 0; i < num; i++)

	{

		printf("Enter element %d of %d\n", (i+1), num);

		scanf("%d", &array[i]);

	}



   /*   Bubble sorting begins */

	for (i = 0; i < num; i++)

	{

		for (j = 0; j < (num - i - 1); j++)

		{

			if (array[j] > array[j + 1])

			{

				temp = array[j];

				array[j] = array[j + 1];

				array[j + 1] = temp;

			}

		}

	}

	

	printf("Sorted array is...\n");

	for (i = 0; i < num; i++)

	{

		printf("%d\n", array[i]);

	}

}