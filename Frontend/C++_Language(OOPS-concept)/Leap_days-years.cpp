//Leap year_days into years.
#include<iostream>
using namespace std;

int main()
{
	int day,year;
	
	cout<<"Enter the Years :";
	cin>>year;
	
	if(year % 4 == 0)
	{
		cout<<(year*365)+1;
	}
	else
	{
		cout<<year*365;
	}
}
