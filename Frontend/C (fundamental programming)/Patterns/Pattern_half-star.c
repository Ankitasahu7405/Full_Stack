#include<stdio.h>
int main()
{
	int n,i,j,k;
	
	printf("Enter the num :");
	scanf("%d",&n);
	
	for(i=1 ;i<=6 ;i++)
	{
		for(k=4 ;k>=i ;k--)
		{
			printf(" ");
		}
		for(j=1 ;j<=i ;j++)
		{
			printf("* ",i);
		}
		printf("\n");
	}
}
