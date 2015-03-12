#include <ctime>
#include <iostream>
#include <string>
#include <sstream>

int main()
{
    std::time_t result = std::time(NULL);
    std::cout << result << std::endl;
    std::cout << std::asctime(std::localtime(&result)) << std::endl;
    return 0;
}
