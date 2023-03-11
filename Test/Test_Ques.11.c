//WAP to short the array of 5 elementes.

#include<stdio.h>

int main()
{
	int a[4][2]={3,4,6,7,2,1,5};
	int i,j;
	
	for(i=0;i<4;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("\na[%d][%d]=%d",i,j,a[i][j]);
		}
	}
}
