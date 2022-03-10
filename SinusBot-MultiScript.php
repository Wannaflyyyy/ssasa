<?php

// www.server-verstehen.de
// Tech Tutorials & Tips

system('clear');

echo 'Lade...';

$loadingfiglet = shell_exec('apt-get install figlet libXcomposite* libpci* -y');
$screen = shell_exec('apt-get install screen -y');
$sudo = shell_exec('apt-get install sudo -y');

system('clear');


$output2 = shell_exec('figlet Willkommen');
echo "$output2";
echo PHP_EOL;
echo '              beim SinusBot MultiScript!';


sleep(3);


echo PHP_EOL;

echo "
                     .--.
                    |o_o |
                    |:_/ |
                   //   \ \
                  (|     | )
                 /'\_   _/`\
                 \___)=(___/";

    echo PHP_EOL;

    echo '
############################################
#                                          #
#           SinusBot MultiScript           #
#           Patch Version 2021.2           #
#                                          #
#               Script by                  #
#        RAW Networks & CookieMC337        #
#                                          #
############################################
#                                          #
# _________________________________________#
#                                          #
#             Grundfunktionen              #
# _________________________________________#
#                                          #
# 1. SinusBot installieren                 #
# 2. Sinusbot Deinstallieren               #
# 3. YoutubeDL installieren                #
# 4. SinusBot starten                      #
# 5. SinusBot stoppen                      #         
# 6. Alle Bots Stoppen (killall screens)   #
# 7. Passwort Neu Setzen                   #
#                                          #
############################################';


echo PHP_EOL;

$opt = readline("Geben Sie eine Zahl ein: ");

if ($opt == "1") {

    
system('clear');


echo 'Auf welchem Port soll die Instanz laufen? (Wichtig: Nur 1 Port Angeben)';

        echo PHP_EOL;

        $sportstart = readline("Geben Sie einen Port ein, der noch frei ist: ");

        echo PHP_EOL;

        $passwordstart = readline("Vergeben Sie ein Passwort fuer den SinusBot: ");


echo 'Installiere Pakete...';


    $insstart = shell_exec('sudo dpkg --force-all -r atftpd
                sudo apt-get -y purge 
                sudo dpkg --add-architecture i3860 
                sudo apt-get -y update 
                sudo apt-get -y dist-upgrade 
                apt-get -y -qq install screen x11vnc xvfb libpci* libxcursor1 libpulse0 libpulse0:i386 pulseaudio ca-certificates bzip2 psmisc libglib2.0-0 less cron-apt ntp python iproute2 dbus libnss3 libegl1-mesa x11-xkb-utils libasound2 libxcomposite-dev libxi6 unzip 
                update-ca-certificates 
                apt-get -qq -y install ca-certificates bzip2 python wget -y 
                update-ca-certificates ');

                echo "$insstart";         

                system('clear');


        $sport = $sportstart;

        $password = $passwordstart;


        echo PHP_EOL;

        $adduser = shell_exec('adduser --disabled-login --home /opt/SinusPort-'.$sport.' --gecos "" --force-badname SinusPort-'.$sport.'');

        $update = shell_exec("apt-get -qq update -y; apt-get -qq upgrade -y; update-ca-certificates;");

        $update = shell_exec("rm -rf /tmp/.X11-unix; rm -rf /tmp/.sinusbot.lock");

        $update = shell_exec("apt-get install x11vnc xvfb libxcursor1 ca-certificates libfontconfig1 libxkbcommon0 libxkbcommon-x11-0 libxslt-dev bzip2 libnss3 libegl1-mesa x11-xkb-utils libasound2 -y; update-ca-certificates; apt-get install libglib2.0-0 -y; chmod 7777 /opt/");

        $rules = shell_exec('chown -R SinusPort-'.$sport.':SinusPort-'.$sport.' /opt/SinusPort-'.$sport.'');

        $pak1 = shell_exec("apt-get install libnss3-dev -y");

        $pak2 = shell_exec("apt-get -qq install x11vnc xinit xvfb libxcursor1 ca-certificates bzip2 curl libglib2.0-0 nano screen unzip -y; rm -rf /tmp/.X11-unix/X40 /tmp/.sinusbot.lock");

        $pak3 = shell_exec('su -c " cd; wget http://update.rawnetworks.eu/2021/sinusbot/phpmulti-sinusbot.zip" SinusPort-'.$sport.'');

        $pak4 = shell_exec('su -c " cd; wget http://update.rawnetworks.eu/2021/sinusbot/ts3php.zip" SinusPort-'.$sport.'');

        $pak5 = shell_exec(' su -c " cd; wget http://update.rawnetworks.eu/2021/sinusbot/config.zip" SinusPort-'.$sport.'');
        system('clear');
        $sport2 = $sport;

        $password2 = $password;

        echo PHP_EOL;
        $pak7 = shell_exec('su -c "cd; unzip phpmulti-sinusbot.zip" SinusPort-'.$sport.'; su -c "cd; unzip config.zip" SinusPort-'.$sport.'; su -c "cd; unzip ts3php.zip" SinusPort-'.$sport.'; su -c "cd;" SinusPort-'.$sport.'; su -c "cd; mkdir -p TeamSpeak3-Client-linux_amd64/plugins; cp plugin/libsoundbot_plugin.so TeamSpeak3-Client-linux_amd64/plugins/" SinusPort-'.$sport.'');
        $pak8 = shell_exec('sudo ln -sf /usr/lib/x86_64-linux-gnu/qt5/plugins/platforms/ /usr/bin/');
        $pak9 = shell_exec('printf "password" > /opt/SinusPort-'.$sport.'/password.txt; sed -i s/8087/"'.$sport.'"/g /opt/SinusPort-'.$sport.'/config.ini');
        $pak10 = shell_exec('su -c "sed -i s/password/"'.$password.'"/g /opt/SinusPort-'.$sport.'/password.txt" SinusPort-'.$sport.'');
        $pak11 = shell_exec('sed -i s/sinusbot/"SinusPort-'.$sport.'"/g /opt/SinusPort-'.$sport.'/config.ini');
        $pak12 = shell_exec("rm -rf /tmp/.X11-unix; rm -rf /tmp/.sinusbot.lock; rm /opt/SinusPort-'$sport'/config.ini.dist; rm /opt/SinusPort-'$sport'/config.zip; rm /opt/SinusPort-'$sport'/ts3php.zip; rm /opt/SinusPort-'$sport'/phpmulti-sinusbot.zip");
        $pak13 = shell_exec('su -c "cd; chmod 777 *" SinusPort-'.$sport.'');
        $pak14 = shell_exec('chown -R SinusPort-'.$sport.':SinusPort-'.$sport.' /opt/SinusPort-'.$sport.'');
        $pak15 = shell_exec('su -c "cd && screen -AmdS SinusPort-'.$sport.' ./sinusbot -override-password '.$password.' >/dev/null" SinusPort-'.$sport.'');
        system('clear');
        echo 'Bot instance SinusPort-'.$sport.' wurde Erstellt';
        echo PHP_EOL;
        echo 'Falls die bots nicht Starten bzw auf den server verbinden, führe bitte "apt install libXcomposite* libpci* -y" aus';
        echo PHP_EOL;
}
if ($opt == "2") {
    system('clear');
    echo 'Bot Instance Deinstallieren';
    echo PHP_EOL;
    $instanceport = readline("Geben sie den Port ein: ");
    echo PHP_EOL;
   $instancepassword = readline("Geben sie das Panel Password ein: ");
    $password = shell_exec('cat /opt/SinusPort-'.$instanceport.'/password.txt'); 

    if ($password != $instancepassword){echo 'Das passwort stimmt nicht Überein! Deinstallation Abgebrochen';}else{
       $instancedelete = readline("Moechten sie diese Instance wirklich Entfernen? (yes / no): ");
        if ($instancedelete == "yes"){
            $pak1 = shell_exec('su SinusPort-'.$instanceport.' -c "killall screen"');
            $pak2 = shell_exec("deluser SinusPort-'$instanceport'");
            $pak3 = shell_exec('rm -r /opt/SinusPort-'.$instanceport.'');

            echo 'Deinstallation Abgeschlossen';
            echo PHP_EOL;
        } else {echo 'Deinstallation Abgebrochen';}
    }
}
if ($opt == "3") {
    system('clear');
    echo 'YoutubeDL wird installiert...';
    echo PHP_EOL;
    $pak1 = shell_exec("apt-get update && apt-get install python -y");
    $pak2 = shell_exec('cd /usr/local/bin && curl -L -O https://yt-dl.org/downloads/latest/youtube-dl');
    $pak3 = shell_exec('chmod a+rx /usr/local/bin/youtube-dl');
    $pak4 = shell_exec('chmod 777 /usr/local/bin/youtube-dl');
    system('clear');
    echo 'YoutubeDL wurde Erfolgreich installiert und konfiguriert!';
    echo PHP_EOL;
    exit;
}
if ($opt == "4") {
    system('clear');
    echo 'Welche instance soll Gestartet werden.';
    echo PHP_EOL;
    $instanceport = readline("Geben sie den Port ein: ");
    echo PHP_EOL;
    $password = shell_exec('cat /opt/SinusPort-'.$instanceport.'/password.txt');
    $pak1 = shell_exec("rm -rf /tmp/.X11-unix; rm -rf /tmp/.sinusbot.lock");
    $pak2 = shell_exec('su -c "cd /opt/SinusPort-'.$instanceport.'; screen -AmdS SinusPort-'.$instanceport.' ./sinusbot -override-password '.$password.'" SinusPort-'.$instanceport.'');
    echo 'Die Instance SinusPort-'.$instanceport.' wurde Gestartet!';
    echo PHP_EOL;
    exit;
}
if ($opt == "5") {
    system('clear');
    echo 'Welche instance soll Gestoppt werden.';
    echo PHP_EOL;
    $instanceport = readline("Geben sie den Port ein: ");
    echo PHP_EOL;
    $pak1 = shell_exec('su -c "killall screen" SinusPort-'.$instanceport.'');
    system('clear');
    echo 'Die Instance SinusPort-'.$instanceport.' wurde Gestoppt!';
    echo PHP_EOL;
    exit;
}
if ($opt == "6") {
    system('clear');
    echo 'Instancen werden Gestoppt...';
    echo PHP_EOL;
    $pak1 = shell_exec('killall screen');
    $pak2 = shell_exec("rm -rf /tmp/.X11-unix; rm -rf /tmp/.sinusbot.lock");
    system('clear');
    echo 'Alle instancen wurden Gestoppt';
    echo PHP_EOL;
    exit;
}
if ($opt == "7") {
    system('clear');
    echo 'Instance Passwort neu Setzen';
    echo PHP_EOL;
    $instanceport = readline("Geben sie den Port ein: ");
    echo PHP_EOL;
    $instancepassword=shell_exec('cat /opt/SinusPort-'.$instanceport.'/password.txt');
    $instanceoldpassword = readline("Geben sie das alte Passwort ein: ");
    echo PHP_EOL;
    if ($instanceoldpassword != $instancepassword){
        echo 'Deine eingabe stimmt nicht mit dem Alten Passwort ueberein!';
        echo PHP_EOL;
        exit;
    } 
    $instancenewpassword = readline("Geben sie das neue Passwort ein: ");
    echo PHP_EOL;
    $instancenewpassword2 = readline("Geben sie erneut das neue Passwort ein: ");
    echo PHP_EOL;

    if ($instancenewpassword == $instancenewpassword2){
        $pak1 = shell_exec(' sed -i s/"'.$instanceoldpassword.'"/"'.$instancenewpassword.'"/g /opt/SinusPort-'.$instanceport.'/password.txt');
        system('clear');
            echo 'Das Passwort wurde Geaendert';
                echo PHP_EOL;
                exit;
    }
    else{
        system('clear');
            echo 'Die eingaben stimmen nicht Ueberein!';
                echo PHP_EOL;
        exit;
    }
    
}
?>