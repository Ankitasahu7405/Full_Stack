//WAP to print find alphabets are vowels or consonant.

#include<stdio.h>

int main()
{
	char a,e,i,o,u;
	printf("Enter the any char :");
	scanf("%d", &a,e,i,o,u);
	
	switch(a,e,i,o,u)
	{
		case 'a':
			printf("Vowel");
			break;
		case 'e':
			printf("Vowel");
			break;
		case 'i':
			printf("Vowel");
			break;
		case 'o':
			printf("Vowel");
			break;
		case 'u':
			printf("Vowel");
			break;
		default:
			printf("Consonant");
			break;					
	}
}
