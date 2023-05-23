#include<stdio.h>
int main()
{
	int n,i,j;
	
	printf("Enter the num :");
	scanf("%d",&n);
	
	for(i=n ;i>=1 ;i--)
	{
		for(j=1 ;j<=i ;j++)
		{
			printf(" ");
		}
		for(j=i ;j<=5 ;j++)
		{
			printf("* ");
		}
		printf("\n");
	}
	
	for(i=1 ;i<=n ;i++)
	{
		for(j=1 ;j<=i ;j++)
		{
			printf(" ");
		}
		for(j=5 ;j>=i ;j--)
		{
			printf("* ");
		}
		printf("\n");
	}
}
