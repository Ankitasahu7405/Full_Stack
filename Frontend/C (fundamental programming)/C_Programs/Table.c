//WAP to print a table of any number.

#include<stdio.h>

int main()
{
	int no,i;
	
	printf("Enter the no.:");
	scanf("%d", &no);
	
	for(i=1;i<=10;i++)
	{
		printf("%d * %d =%d \n",no,i,no*i);
	}
	return 0;
}
