#include <iostream>

using namespace std;

struct data{
		string NIM;
		float IPK;
		string Nama;
		string Jurusan;
	};


int main(){
		int menu = -1;
		struct data MHS[100];
		int batas = 0;
		int temp = 0;
		while(menu){
			cout << "1. Input data mahasiswa\n2. Tampilan data mahasiswa\n>>";
			cin >> menu;
			switch(menu){
				case 1:
					cout << "input berapa data? \n";
					cin>>temp;
					
					for(int i=0;i<temp;i++){
							cout << "Mahasiswa ke - "<< (i+1)<<endl;
							cout << "NIM :";
							cin >> MHS[batas+i].NIM;
							cin.ignore(1);
							cout << "Nama :";
							getline(cin, MHS[batas+i].Nama);
							cout << "Jurusan :";
							getline(cin, MHS[batas+i].Jurusan);
							cout << "IPK :";
							cin >> MHS[batas+i].IPK;
						}
					batas += temp;
				break;
				case 2:
					cout << "NIM\tNama\t\tJurusan\t\tIPK"<< endl << "==========================================================================" << endl;
					for(int i=0;i<batas;i++){
							cout << MHS[i].NIM << "\t" << MHS[i].Nama << "\t" << MHS[i].Jurusan << "\t" << MHS[i].IPK << endl;
						}
				break;
				}
		}
	}
