<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Pasos para abrir en Desarrollo
1. Verificar el archivo .env crearlo en base al .env.template
```
copy /.env.template /.env
```
2. Instalar los paquetes de Node.
```
npm i 
```
3. Instalar los paquetes de composer
```
composer install
```
4. Levantar el servidor
```
php artisan serve 
```
5. Levantar el front end
```
npm run dev
```

## Pasos para despliegue en producción
1. Posicionarse en la rama master.
```
git checkout master
```
2. Hacer merge con la rama que estuvimos trabajando.
```
git merge nombre_de_rama_utilizada
```
3. Entrar al servidor de producción.
```
ssh -i SanMartin-HW.pem NombreUsuario@Ip_Servidor
```
4. Ir al proyecto.
```
cd /var/www/html/web-dallas
```
5. Sincronizar la rama master de git.
```
git pull
```
5. Instalar paquetes y habilitar lo necesario.
```
composer install
```
```
npm run build
```

## Nota verificar en el archivo php.ini dentro de xampp descomentar
```
extension=zip
extension=fileinfo
extension=gd
extension=pgsql
extension=zip
```