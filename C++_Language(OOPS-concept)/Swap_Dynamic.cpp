//Using third variable.
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
	
	c=a;
	a=b;
	b=c;
	cout<<"---Value after swap---"<<endl;
	cout<<"Value of a is ="<<a<<endl;
	cout<<"Value of b is ="<<c;
}
