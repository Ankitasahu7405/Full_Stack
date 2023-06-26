//WAP number checking using nested if.

#include<stdio.h>
int main()
{
	int a=65,b=34;
	if(a>b)
	{
		if(a%2==0)
		{
			printf("even");
		}
		else
		{
			printf("odd");
		}
	}
	else
	{
		printf("a is smaller");
	}
	return 0;
}

