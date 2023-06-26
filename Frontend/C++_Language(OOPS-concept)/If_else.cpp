#include<iostream>
using namespace std;

int main()
{
	int a,b;
	
	cout<<"Enter the value of A =";
	cin>>a;
	
	cout<<"Enter the value of B =";
	cin>>b;
	
	if(a>b)
	{
		cout<<"A is bigger";
	}
	else if(a<b)
	{
		cout<<"B is bigger";
	}
	else
	{
		cout<<"Both are equal";
	}
}
