//WAP to take 10 number from user and identify even,odd number and count even and odd numbers.

#include<stdio.h>
int main()
{
	int num,i,count1=0,count2=0;
	printf("enter any ten numbers:\n");
	
	for(i=1;i<=10;i++)
	{
		scanf("%d",&num);
		if(num%2==0)
		{
			count1++;
		}
		else
		{
			count2++;
		}
	}
	printf("count of even numbers : %d\n",count1);
	printf("count of odd numbers : %d",count2);
	return 0;
}
