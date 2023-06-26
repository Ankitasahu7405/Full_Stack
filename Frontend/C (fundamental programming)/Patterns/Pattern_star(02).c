#include<stdio.h>
int main()
{
	int i,j,row=6;
	
	for(i=1 ;i<=row ;i++)
	{
		for(j=1 ;j<=i ;j++)
		{
			printf("  ");
		}
		for(j=i ;j<=row; j++)
		{
			printf("* ");
		}
		printf("\n");
	}
	for(i=row ;i>=1 ;i--)
	{
		for(j=1 ;j<=i ;j++)
		{
			printf("  ");
		}
		for(j=i ;j<=row; j++)
		{
			printf("* ");
		}
		printf("\n");
	}
	
}
