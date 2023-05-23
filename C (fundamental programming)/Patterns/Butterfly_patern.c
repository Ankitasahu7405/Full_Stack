#include<stdio.h>
int main()
{
	int i,j,k,row=12;
	
	for(i=1 ;i<=row ;i++)
	{
		for(j=1 ;j<=row ;j++)
		{
			if(j<=k || j>=row-k+1)
			{
				printf("* ");
			}
			else
			{
				printf("  ");
			}
		}
		if(i<=row/2)
		{
			k++;
		}
		else
		{
			k--;
		}
		printf("\n");
	}
}
