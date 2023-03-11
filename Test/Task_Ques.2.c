//WAP to find number is even or odd using ternary operator.

#include<stdio.h>

int main()
{
	int a;
	printf("enter a number:");
	scanf("%d",&a);
	
	if(a%2==0)
	{
		printf("Number is even");
	}
	else
	{
		printf("Number is odd");
	}
	
	return 0;
}
