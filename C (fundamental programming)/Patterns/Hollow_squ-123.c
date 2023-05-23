#include<stdio.h>
int main()
{
	int i,j,row;
	
	for(i=1 ; i<=row ; i++)
	{
		for(j=i ; j<=row ; j++)
		{
			if(i==1 || i==row || j==i )
			{
				printf("  ");
			}
			else
			{
				printf("%d ",j+1);
			}
		}
		printf("\n");
	}
}
