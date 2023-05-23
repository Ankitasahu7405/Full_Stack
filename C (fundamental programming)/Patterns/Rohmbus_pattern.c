#include<stdio.h>
int main()
{
	int row=5,i,j;
	
	for(i=1 ;i<=row ;i++)
	{
		for(j=1 ;j<=row-i ;j++)
		{
			printf(" ");
		}
		for(j=1 ;j<=row ;j++)
		{
			printf("* ");
		}
		printf("\n");
	}
}
