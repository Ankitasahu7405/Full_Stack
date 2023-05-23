#include<stdio.h>
int main()
{
	int i,j,row=6;
	
	for(i=1 ;i<=row ;i++)
	{
		for(j=i ;j<=row ;j++)
		{
			printf("* ");
		}
		for(j=1 ;j<=(i*2-2) ;j++)
		{
			printf("  ");
		}
		for(j=i ;j<=row ;j++)
		{
			printf("* ");
		}
		printf("\n");
	}
}
