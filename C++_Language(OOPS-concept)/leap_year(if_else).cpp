//Leap year or not.
#include<iostream>
using namespace std;
int main()
{
	int year;
	
	cout<<"Enter the Year :";
	cin>>year;
	
	if(year % 400 == 4)
	{
		cout<<"Leap year";
	}
	else
	{
		cout<<"Not a leap year";
	}
}
