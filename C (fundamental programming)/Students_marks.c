//WAP to check the marks of the student whether the student is pass or fail.

#include<stdio.h>

int main()
{
	int marks;
	printf("enter your marks:");
	scanf("%d",&marks);
	(marks>=40)?printf("pass"):printf("fail");
}
