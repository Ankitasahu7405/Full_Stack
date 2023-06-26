#include<stdio.h>
int main()
{
	int n,reverse,num;
	
	printf("Enter the number :");
	scanf("%d",&n);
	
	while(n!=0)
	{
		num=n%10;
		reverse=reverse*10+num;
		n/=10;
	}
	printf("Reversed number : %d",reverse);
}
