#!/bin/bash -ex

ssh -v ubuntu@fabrika.space << EOF
  
  echo '1. Updating sources'
  cd ~/repos/fabrika-wordpress-theme
  git checkout --force master
  git pull

  echo "2. Restart apache"
  sudo apache2ctl graceful

  echo 'Done!'
  
EOF
