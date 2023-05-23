#include<stdio.h>
int main()
{
	int i,n,fact;
	
	printf("Enter the num :");
	scanf("%d", &n);
	
	for(i=1;i<=n;i++)
	{
		fact=fact*i;
	}
	
	printf("Factorial of a num %d=%d",n,fact);
	
}
