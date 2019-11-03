sudo mkdir /var/www/html/mongodb/data
sudo mkdir /var/www/html/mongodb/data/db
sudo mkdir /var/www/html/mongodb/data/R0S1
sudo mkdir /var/www/html/mongodb/data/R0S2
sudo mkdir /var/www/html/mongodb/data/R0S3
sudo mkdir /var/www/html/mongodb/data/arb
sudo chmod 777 /var/www/html/mongodb/data
sudo chmod 777 /var/www/html/mongodb/data/*

gnome-terminal -- bash -c "mongod --replSet rs0 --port 27017 --dbpath /var/www/html/mongodb/data/R0S1; exec bash"
gnome-terminal -- bash -c "mongod --replSet rs0 --port 27018 --dbpath /var/www/html/mongodb/data/R0S2; exec bash"
gnome-terminal -- bash -c "mongod --replSet rs0 --port 27019 --dbpath /var/www/html/mongodb/data/R0S3; exec bash"
gnome-terminal -- bash -c "mongod --port 30000 --dbpath /var/www/html/mongodb/data/arb --replSet rs0; exec bash"
sleep 3
mongo --eval "rs.initiate()"
mongo < initiate.js
sleep 2
mongo < add.js






