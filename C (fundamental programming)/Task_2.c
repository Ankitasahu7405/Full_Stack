//WAP to take input from the user and print the information.
#include<stdio.h>
int main()
{		
	char name[15],gender[6],e_mail[40],add[20];
	int dob,age,pin_code;
	long contact_no;
	printf("--------------------------Enter Details-------------------------------------");
	printf("\nEnter Name : ");
	gets(name);
	printf("\nEnter DOB :");
	scanf("%d",&dob);
	printf("Enter Age : ");
	scanf("%d",&age);
	printf("Enter Gender : ");
	scanf("%s",gender);
	printf("Enter E-mail : ");
	scanf("%s",e_mail);
	printf("Enter Contact No. : ");
	scanf("%ld",&contact_no);
	fflush(stdin);
	printf("Enter Address : ");
	gets(add);
	printf("Enter PIN-CODE : ");
	scanf("%d",&pin_code);
	printf("\n\n--------------------------Your Information-------------------------------------");
	printf("\nName : %s",name);
	printf("\nAge : %d",age);
	printf("\nGender : %s",gender);
	printf("\nE-mail : %s",e_mail);
	printf("\nContact No. : %d",contact_no);
	printf("\nAddress : %s",add);
	printf("\nPIN-CODE : %d",pin_code);
	return 0;
} 
