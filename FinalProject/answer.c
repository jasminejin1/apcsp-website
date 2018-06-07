#include <stdio.h>

int main(int argc, char* argv[])
{
  if (argc != 3)
  {
    printf("expected 2 args, please enter two integers\n");
    return 1;
  }
 
  int arg1;
  sscanf(argv[1], "%d", &arg1);

  int arg2;
  sscanf(argv[2], "%d", &arg2);

  if (arg1 == 1)
  {
    if (arg2 == 40)
    { 
      return 1;
    }
    else 
    {
      return 0;
    }
  }

  if (arg1 == 2)
  { 
    if (arg2 == 4)
    {  
      return 1;
    }
    else
    {
      return 0;
    }
  }
  if (arg1 == 3)
  { 
    if (arg2 == 256)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  if (arg1 == 4)
  { 
    if (arg2 == 1)
    {    
      return 1;
    }
    else
    {
      return 0;
    }
  }
  if (arg1 == 5)
  { 
    if (arg2 == 5)
    {    
      return 1;
    }
    else
    {
      return 0;
    }
  }
  if (arg1 == 6)
  {
    if (arg2 == 4)
    {
      return 1;
    }
    else 
    {    
      return 0;
    }
  }
  if (arg1 == 7)
  { 
    if (arg2 == 586)
    {
      return 1;
    }
    else
    {
    return 0;
    }
  }
  if (arg1 == 8)
  { 
    if (arg2 == 4)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  if (arg1 == 9)
  { 
    if (arg2 == 5)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  if (arg1 == 10)
  { 
    if (arg2 == 7)
    {
      return 1;
    }
    else
    {
    return 0;
    }
  }
}
