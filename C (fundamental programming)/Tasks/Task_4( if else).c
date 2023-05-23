#include<stdio.h>

int main()
{
	int sub1,sub2,sub3,sub4,sub5,;
	
	
	printf(" \n Enter the Economics marks :");
	scanf("%d",&marks);
	printf(" \n Enter the Geography marks :");
	scanf("%d",&marks);
	printf(" \n Enter the History marks :");
	scanf("%d",&marks);
	printf(" \n Enter the English marks :");
	scanf("%d",&marks);
	printf(" \n Enter the Hindi marks :");
	scanf("%d",&marks);
	percentage("")
	
	if(marks<0 || marks>100)
	{
		printf("wrong entry");
	}
	else if(marks<50)
    {
        printf("Grade F");
    }
    else if(marks>=50 && marks<60)
    {
        printf("Grade D");
    }
    else if(marks>=60 && marks<70)
    {
        printf("Grade C");
    }
    else if(marks>=70 && marks<80)
    {
        printf("Grade B");
    }
    else if(marks>=80 && marks<90)
    {
        printf("Grade A");
    }
    else
    {
        printf("Grade A+");
    }
}
