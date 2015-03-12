#include <ctime>
#include <string>
#include <iostream>
using namespace std;

std::string now()
{
    time_t now = time(NULL);
    struct tm *Tm;
    char buf[80];
    Tm = localtime(&now);

    strftime(buf, sizeof(buf), "%Y-%m-%d %X", Tm);
    return buf;
}

int main()
{
    std::string time_c = now();
    cout << time_c << endl;
}
