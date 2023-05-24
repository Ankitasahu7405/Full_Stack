#include<iostream>
using namespace std;

int main()
{
	int days;
	
	cout<<"Enter the days :";
	cin>>days;
	
	switch(days)
	{
		case 1:
			{
				cout<<"Monday";
				break;
			}
		case 2:
			{
				cout<<"Tuesday";
				break;
			}
		case 3:
			{
				cout<<"Wednasday";
				break;
			}
		case 4:
			{
				cout<<"Thursday";
				break;
			}
		case 5:
			{
				cout<<"Friday";
				break;
			}
		case 6:
			{
				cout<<"Satureday";
				break;
			}
		case 7:
			{
				cout<<"Sunday";
				break;
			}
		default :
			{
				cout<<"Invaild Input";
				break;
			}							
	}
}
