//Without using third variable.
#include<iostream>
using namespace std;
int main()
{
	int a,b,c;
	cout<<"---Value before swap---"<<endl;
	cout<<"Values of A is =";
	cin>>a;
	cout<<"Values of B is =";
	cin>>b;
	
	a=a+b;
	b=a-b;
	b=b-a;
	
	cout<<"---Value after swap---"<<endl;
	cout<<"Value of A is ="<<a<<endl;
	cout<<"Value of B is ="<<b;
}
