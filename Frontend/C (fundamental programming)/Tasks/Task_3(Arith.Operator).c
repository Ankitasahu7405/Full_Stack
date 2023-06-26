#include<stdio.h>

int main()
{
	int a , b ;
	
	printf("Enter the number a=");
	scanf("%d", &a);
	printf("Enter the number b=");
	scanf("%d", &b);
	
	printf(" \n \n a=%d b=%d", a,b);
	printf(" \n \n Addition a + b = %d", a+b);
	printf(" \n \n Substraction a - b = %d", a-b);
	printf(" \n \n Multiplication a * b = %d", a*b);
	printf(" \n \n Division a / b = %d", a/b);
	printf(" \n \n Modulo a % b = %d", a%b);
}
