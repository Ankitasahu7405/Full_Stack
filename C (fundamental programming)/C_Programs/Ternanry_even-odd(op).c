//WAP to check whether the input number is even or odd with ternary operator.
#include<stdio.h>

int main()
{
	int num;
	printf("enter a number:");
	scanf("%d",&num);
	
	(num%2==0)?printf("number is even"):printf("number is odd");
}
