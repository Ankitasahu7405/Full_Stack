#include<stdio.h>
int main()
{
	int i,j,k,row=8;
	
	for(i=1 ;i<=row ;i++)
	{
		for(j=i ;j<=row ;j++)
		{
			printf("  ");
		}
		for(k=1 ;k<=2*i-1 ;k++)
		{
			if(k==1 || k==(2*i-1))
			{
				printf("* ");
			}
			else
			{
				printf("  ");
			}
		}
		printf("\n");	
	}
	for(i=row ;i>=1 ;i--)
	{
		for(j=row ;j>=i ;j--)
		{
			printf("  ");
		}
		for(k=1 ;k<=2*i-1 ;k++)
		{
			if(k==1 || k==(2*i-1))
			{
				printf("* ");
			}
			else
			{
				printf("  ");
			}
		}
		printf("\n");	
	}
}
