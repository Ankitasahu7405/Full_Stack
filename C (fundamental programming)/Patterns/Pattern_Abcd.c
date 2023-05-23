#include<stdio.h>
int main()
{
	int i,j,n;
	char A=65;
	
	printf("Enter the num :");
	scanf("%d",&n);
	
	for(i=0;i<=4;i++)
	{
		for(j=0;j<=i;j++)
		{
			printf(" %c ",A+j);
//			j=+1;
		}
		printf("\n");
	}
}
