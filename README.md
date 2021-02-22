# Modulo di PHP

## Creazione del repository

Se avete un repository locale e lo volete collegare a un repostitory in remoto già esistente (github).


Nel mio caso:

> url repository: 
> https://github.com/corsidrive/formarete-2020-21-linguaggio-di--programmazione-php.

Quindi:

```bash

git remote add origin https://github.com/corsidrive/formarete-2020-21-linguaggio-di--programmazione-php.git
git branch -M main
git push -u origin main

```

### string

https://www.php.net/manual/en/ref.strings.php


### array

[array su w3school](https://www.w3schools.com/php/php_arrays.asp)

[array su tutorialspoint](https://www.tutorialspoint.com/php/php_arrays.htm)

### iterazione di array

paradigma imperativo

- ciclo for
- ciclo foreach

paradigma dichiarativo

- array_map (trasforma un array)
- array_filter (filtra un array)




### Espressioni regolari

Sito per testare espressioni regolari

[Esempio di espressione regolare](https://regex101.com/r/powozc/1)

[funzioni du PHP che usano le espressioni regolari](https://www.php.net/manual/en/ref.pcre.php)

Noi abbiamo usato

[preg_replace](https://www.php.net/manual/en/function.preg-replace.php)

Per togliere le cifre dai nomi.

### PHP Filter per Validare e Sanificare id dati

https://www.php.net/manual/en/function.strip-tags.php

oppure  

https://www.php.net/manual/en/function.filter-var.php

che utilizza i filtri

https://www.php.net/manual/en/filter.filters.php
