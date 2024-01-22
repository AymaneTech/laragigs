@echo off

set xamppPath=C:\xampp

echo Starting Apache and MySQL...
cd %xamppPath%
xampp-control.exe start

echo XAMPP services started successfully.

