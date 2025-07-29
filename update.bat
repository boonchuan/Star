@echo off
cd /d C:\starfallcatastrophe

echo ================================
echo GitHub Push: Standard Update
echo ================================

git add .
set /p commitMsg="Enter commit message: "
git commit -m "%commitMsg%"
git push origin main

echo ================================
echo Done! Press any key to close.
pause > nul
