//WAP of Single Inheritance.
#include<iostream>
using namespace std;

class parent
{
	public:
		int num=18,c;
};
class child: public parent
{
	public:
		string name="Ankita";
};
int main()
{
	child c;
	cout<<"class child's member :"<<c.name<<endl;
	cout<<"class parent's member using child's object :"<<c.num;	
	return 0;
}
