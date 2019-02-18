um-admin


#### Manage Dependencies



1.
#### Publish 

php artisan vendor:publish --tag=config
php artisan vendor:publish --tag=public

2.
#### Seeders:
Run:
```
php artisan db:seed --class=Untrefmedia\\UMAdmin\\Database\\Seed\\DatabaseSeeder
```