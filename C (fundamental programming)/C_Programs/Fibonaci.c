#include<stdio.h>
int main()
{
	int n,i,n1,n2,n3;
	
	printf("Enter the num :");
	scanf("%d",&n);
	
	printf("\n %d %d",n1,n2);
	for(i=1;i<=n;i++)
	{
		n3=n1+n2;
		printf("%d \t",n3);
		n1=n2;
		n2=n3;
	}
	
}
