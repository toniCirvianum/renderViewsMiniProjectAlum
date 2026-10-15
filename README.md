# Miniprojecte 3 — Classe Controller base

**Objectiu:** compartir `render()` entre diversos controladors gràcies a l'herència i seleccionar layouts diferents.

## Execució

```bash
php -S localhost:8003
```

Obre:

- `http://localhost:8003/` (productes, layout públic)
- `http://localhost:8003/?page=users` (usuaris, layout administració)
- `http://localhost:8003/?page=categories` (categories, layout públic)

## Què canvia respecte al projecte 2?

- `render()` s'ha mogut a `App/Core/Controller.php`.
- `ProductController`, `UserController` i `CategoryController` hereten de `Controller`.
- El tercer argument de `render()` permet seleccionar un layout diferent.
- `autoload.php` carrega automàticament classes de `App\`.

## Reptes

1. Modifica `UserController` perquè utilitzi el layout `main` i observa el canvi.
2. Crea un `OrderController` i una vista `orders/index.view.php` que mostri tres comandes.
3. Crea un layout `compact.layout.php` i utilitza'l des de `OrderController`.
4. Explica per què `render()` és `protected` i no cal repetir-lo als altres controladors.
5. Compara el codi dels tres miniprojectes i identifica què ha canviat en cada fase.

**Nota:** `CategoryController` s'inclou ja implementat com a exemple; `OrderController` és el repte d'ampliació.

## Adaptació a les classes Product i PriceFormatter

- `App/Models/Product.php`: dades de prova del catàleg (`getAll()` i `getFeatured()`).
- `App/Utils/PriceFormatter.php`: formata els imports en euros amb `format()`.
- `ProductController` crea les dues classes, prepara les dades i les passa a `render()`.
- Les vistes mostren `name` i `formattedPrice`.
- Les dades encara són en memòria, sense base de dades.

**Important:** S'ha incorporat una implementació autònoma de `Product` i `PriceFormatter` perquè el projecte sigui executable sense altres dependències. Si les classes treballades a classe tenen altres noms de mètodes, es poden substituir mantenint la mateixa idea.
