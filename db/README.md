# Phinx - PHP Database Migrations
[https://phinx.org/](https://phinx.org/)

## Konfigurácia
najprv je potrebné nakonfigurovať pripojenie k testovacej databáze
v súbore `./phinx.yml`

```
environments:
    development:
        adapter: mysql
        host: 127.0.0.1
        name: nazov_databazy
        user: root
        pass: 'root'
        port: 3306
        charset: utf8
        table_prefix: wame_
```
ak `./phinx.yml` neexistuje tak ho vytvoríme príkazom
```
MacOS
$ vendor/bin/phinx init

Windows
$ vendor\bin\phinx init
```

## Spustenie migrácie
```
MacOS
$ vendor/bin/phinx migrate -e development

Windows
$ vendor\bin\phinx migrate -e development
```

## Vytvorenie migrácie

```
MacOS
$ vendor/bin/phinx create MyMigrationName

Windows
$ vendor\bin\phinx create MyMigrationName
```

súbor sa vytvorí do `./db/migrations/`
kde zapíšeme úpravy podľa dokumentácie 
[http://docs.phinx.org/en/latest/migrations.html#creating-a-new-migration](http://docs.phinx.org/en/latest/migrations.html#creating-a-new-migration)

# Seeding

## Prvé spustenie

na začiatku projektu spustíme všetky seedy ktoré nám doplnia aj ukážkové dáta

```
MacOS
$ vendor/bin/phinx seed:run -e development

Windows
$ vendor\bin\phinx seed:run -e development
```

## Spustenie konkrétneho seedu
potom už spúšťame jednotlivé seedy podľa potreby tým že zadáme ich názov

```
MacOS
$ vendor/bin/phinx seed:run -e development -s UserSeeder -s PermissionSeeder -s LogSeeder

Windows
$ vendor\bin\phinx seed:run -e development -s UserSeeder -s PermissionSeeder -s LogSeeder
```

## Vytvorenie seedu

```
MacOS
$ vendor/bin/phinx seed:create MySeedName

Windows
$ vendor\bin\phinx seed:create MySeedName
```

súbor sa vytvorí do `./db/seeds/`
kde zapíšeme úpravy podľa dokumentácie 
[http://docs.phinx.org/en/latest/seeding.html#creating-a-new-seed-class](http://docs.phinx.org/en/latest/seeding.html#creating-a-new-seed-class)