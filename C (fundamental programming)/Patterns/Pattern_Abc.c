#include<stdio.h>
int main()
{
	int i,j,n,rows = 5;
	char character ='A';
	
	printf("Enter the num :");
	scanf("%d",&n);
	
	for(i=0;i<rows;i++)
	{
		for(j=0;j<=i;j++)
		{
			printf(" %c ",character);
			character++;
			
		}
		printf("\n");
	}
}
