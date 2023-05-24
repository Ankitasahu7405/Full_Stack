//Function With default parameter.
#include<iostream>
using namespace std;

void s(string sname="Hello All!!")
{
	cout<<sname<<endl;
}
int main()
{
	s();
	s("How are you??");
}
