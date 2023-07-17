docker-compose down -v && docker-compose up -d && sleep 2 && docker-compose exec payment-service php spark migrate && docker-compose exec payment-service php spark db:seed PaymentServiceSeeder && docker-compose up

