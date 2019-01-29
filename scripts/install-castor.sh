#!/bin/sh
# v1.0.1

DEFAULT_NAME=${PWD##*/}
DIR_THEME="${PWD}/theme"
DIR_DEST="${PWD}/public/app/themes"
WHITE=`tput setaf 15`
YELLOW=`tput setaf 3`

install_castor() {
	if [ ! -d $DIR_THEME ]; then
		git clone https://github.com/pryley/castor theme
		rm -rf "$DIR_THEME/.git"
		cd $DIR_THEME
		composer install
	fi
	ln -fhs $DIR_THEME "$DIR_DEST/$THEME"
}

echo "--------------------------------------------"
echo "Install Castor                              "
echo "--------------------------------------------"

read -r -p "Enter the theme name [${YELLOW}${THEME_NAME:-$DEFAULT_NAME}${WHITE}]: " THEME

THEME=${THEME:-${THEME_NAME:-$DEFAULT_NAME}}

install_castor
