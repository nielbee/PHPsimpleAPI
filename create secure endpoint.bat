@echo off
:repeat
cls
echo create secure endpoint
echo -------------------------

set /p URL="endpoint url : root/"

set URL=%URL:/=-%.php
copy .\api\src\files\secureEndpoint .\endpoint\%URL%

echo ctrl + c to exit, enter to make new secure endpoint
pause

goto repeat