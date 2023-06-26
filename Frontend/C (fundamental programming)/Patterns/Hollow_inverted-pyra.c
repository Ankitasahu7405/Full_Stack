#include<stdio.h>
int main()
{
	int i,j,row=6;
	
	for(i=1 ;i<=row ;i++)
	{
		for(j=1;j<i;j++)
		{
			printf("  ");
		}
		for(j=1;j<=(row*2 - (2*i-1));j++)
		{
			if(i==1 || j==1 || j==(row*2 - (2*i-1)))
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
