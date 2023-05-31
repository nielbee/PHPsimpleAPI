@echo off
:repeat
cls
echo create open endpoint
echo --------------------

set /p URL="endpoint url : root/"

set URL=%URL:/=-%.php
copy .\api\src\files\endpoint .\endpoint\%URL%
echo :
echo press enter to make open endpoint
echo ctrl + c to exit
pause

goto repeat