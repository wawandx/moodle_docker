docker compose up -d --build
chmod -R 777 moodledata
docker compose exec web composer install --no-dev --classmap-authoritative         
host basis data db
docker exec -it moodle-web-1 php admin/cli/cron.php
