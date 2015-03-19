#include <ctime>
#include <string>
// #include <sstream>
#include <iostream>
#include <boost/lexical_cast.hpp>

int main()
{
    std::time_t seconds = std::time(NULL);
    std::string ts = boost::lexical_cast<std::string>(seconds);
    std::cout << ts << std::endl;
    return 0;
}
