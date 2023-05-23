#include<stdio.h>
int main()
{
	int i,j,row=6;
	
	for(i=0;i<row;i++)
	{
		for(j=0;j<row;j++)
		{
			if(i>0 && i<row-1 && j>0 && j<row-1)
			{
				printf("  ");
			}
			else
			{
				printf("* ");
			}
		}
		printf("\n");
	}
}
