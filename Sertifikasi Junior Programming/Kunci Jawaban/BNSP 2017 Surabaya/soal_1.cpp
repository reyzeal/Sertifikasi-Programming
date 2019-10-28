#include <iostream>

using namespace std;
void genap(int batas){
		cout << "hasil:";
		for(int i=2, j = 0; j<batas;j++, i+=2){
				cout << i;
				if(j+1 < batas) cout << ", ";
				else cout << " \n";
		} 
	}
void faktorial(int batas){
		int j =1;
		cout << "hasil: "<<batas<<"! = ";
		for(int i=batas; i>0;j*=i, i--){
				cout << i;
				if(i-1 > 0) cout << "* ";
		}
		if(batas!=0) cout << "= "<< j <<" \n";
		else cout <<" "<<j<<endl;
	}
bool checkPrima(int nilai){
		int t = 0;
		for(int i=1;i<=nilai;i++){
			t += nilai%i==0;
		}
		return t==2;
	}
void prima(int batas){
		cout << "hasil:";
		int array[batas];
		for(int i=2, j = 0; j<batas;i++){
			if(checkPrima(i)){ 
				array[j] = i;
				j++;
			}
		}
		for(int i=0;i<batas;i++){
			cout << array[i] << ((i+1<batas)?", ":" ");
			}
		cout<<endl;
	}
int main(){
		int menu = -1, batas = 0;
		while(menu){

			cout << "1. Bilangan Genap\n2. Bilangan Faktorial\n3. Bilangan Prima\n>>";
			cin >> menu;
			if(cin.fail()){
				menu = -1;
				cin.clear();
				cin.ignore(INT_MAX,'\n');
				system("cls");
			}
			
			switch(menu){
					case 1:
					cout <<"Batas:";
					cin >> batas;
					if(cin.fail()){
						cin.clear();
						cin.ignore(INT_MAX,'\n');
						system("cls");
					}else genap(batas);
					break;
					case 2:
					cout <<"Batas:";
					cin >> batas;
					if(cin.fail()){
						cin.clear();
						cin.ignore(INT_MAX,'\n');
						system("cls");
					}else faktorial(batas);
					break;
					case 3:
					cout <<"Batas:";
					cin >> batas;
					if(cin.fail()){
						cin.clear();
						cin.ignore(INT_MAX,'\n');
						system("cls");
					}else prima(batas);
					break;
					case 0:
					break;
					default:
					system("cls");
					cout << " Tidak ada di menu\n";
				}
			
		}
	}
