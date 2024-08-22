## Run app
Run `docker` or `orbstack`

You can add in `~/.zshrc` or `~/.bashrc` this alias ```alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'``` and then use `sail`

OR

Use ```./vendor/bin/sail``` in app project

1. ```sail up``` or ```sail up -d```
2. ```sail composer install```
3. ```sail artisan migrate```
4. ```sail npm install```
5. ```sail npm run dev``` or ```sail npm run build```
6. go to [localhost](http://localhost)


