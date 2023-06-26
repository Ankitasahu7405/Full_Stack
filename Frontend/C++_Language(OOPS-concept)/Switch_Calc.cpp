#include<iostream>
using namespace std;

int main()
{
	int a,b;
	char op;
	
	cout<<"Enter the value of A =";
	cin>>a;
	
	cout<<"Enter the value of B =";
	cin>>b;
	
	cout<<"+, -, *, /, % :";
	cin>>op;
	
	switch(op)
	{
		case '+':
			{
				cout<<"Addition ="<<a+b;
				break;
			}
		case '-':
			{
				cout<<"Substraction ="<<a-b;
				break;
			}
		case '*':
			{
				cout<<"Multiplication ="<<a*b;
				break;
			}
		case '/':
			{
				cout<<"Division ="<<a/b;
				break;
			}
		case '%':
			{
				cout<<"Modulo ="<<a%b;
				break;
			}
		default :
			{
				cout<<"Invalid Input!!";
				break;
			}					
	}
}
