#include<iostream>
using namespace std;

class overload
{
	public:
		int string,result=0;
		overload(string)
		{
			string=val;
		}
		void add(overload obj)
		{
			result=string+obj.string;	
		}
		
		void display()
		{
			cout<<"Concate two strig ="<<result;
		}	
};

int main()
{
	overload o1("Hello");
	overload o2("World");
	
	o1.add(o2);
	o1.display();
	
}
