//WAP using number check the day.(switch-case is same as if-else-if ladder)
#include<stdio.h>
int main()
{
	int day;
	printf("Enter any number from 1 to 7 for week days:");
	scanf("%d",&day);
	
	switch(day)
	{
		case 1:
			printf("sunday");
			break;
		
		case 2:
			printf("monday");
			break;
		
		case 3:
			printf("tuesday");
			break;
		
		case 4:
			printf("wednesday");
			break;
		
		case 5:
			printf("thursday");
			break;
		
		case 6:
			printf("friday");
			break;
		
		case 7:
			printf("saturday");
			break;
		
		default:
			printf("invalid input");
			break;
	}
	return 0;
}
