----------------README.md-------------------
Nb: Le systèeme d'authentification se sera pas intégrer sur cette application
-Prémierement pour lancer cette application,on n'a pas besoin d'Apache sur le port :8080,
car Laravel tourne sur port:8000 en générale mais nous pouvons modifier cet port.
Donc nous devons installer tout d'abord Nodejs sur notre machine et composer qui est le gestionnaire de 
dépendance PHP;
Comme cet projet est cloné directement sur un repository, donc le dossier "vendor" ne sera
pas importer, alors que notre application a besoin , pour le faire
lancez la ligne de commande sur notre projet et tapez le commande:
> composer update
- La base de données:
Notre base de données est déjà configurer et il suffit de lancer le commande:
>php artisan migrate
Enfin lancez notre application avec le commande:
>php artisan serve

" Il n'y a pas d'application parfaite, ce pourquio il y a toujour de version,
mais l'important ce que l'application est fonctionnelle et répond au besoin
d'utilisateur".
