//WAP find greatest number from the three numbers using nested if.

#include<stdio.h>
int main()
{
	int a,b,c;
	printf("enter any a:");
	scanf("%d",&a);
	printf("enter any b:");
	scanf("%d",&b);
	printf("enter any c:");
	scanf("%d",&c);
	if(a>b)
	{
		if(a>c)
		{
			printf("a is greatest");
		}
	}
	else
	{
		if(b>c)
		{
			printf("b is greatest");
		}
		else
		{
			printf("c is greatest");
		}
	}
}
