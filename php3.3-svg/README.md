# SVG Paišytuvas

## Aprašymas

Užduotis yra sukurti klasių hierarchiją, leidžiančią nesudėtingai braižyti
įvairias figūras ir sukurti pavyzdinių paveikslėlių.

## Klasės:

### Shape
*Shape* klasės paskirtis yra atvaizdavimas ir bendri bruožai. *Shape*'ai yra paprasti
tagai, skirti SVG viduriams išreikšti.

#### Savybės (angl. *properties*)
* attributes - masyvas, kuris saugo atributus ir reikšmės
* name - tago pavadinimas
* value - reikšmė (jei tagas yra viduje)

#### Metodai
* draw() - nubrėžia formą (išveda vieną tagą)

### Rectangle : Shape
Klasė *Rectangle* paveldi klasę *Shape*. Ji nubrėžia keturkampį pagal duotus duomenis.

#### Metodai
* __construct($width, $height, $color) - aukštis, plotis, spalva

### Circle : Shape
Klasė *Circle* paveldi klasę *Shape*. Ji nubrėžia apskritimą pagla duotas centro koordinates ir spindulį.

#### Metodai
* __construct($x, $y, $radius, $color) - centro koordinatės, spindulys ir spalva

### Text : Shape
Klasė *Text* paveldi klasę *Shape*. Ji užrašo tekstą tam tikroje paveikslo vietoje.

#### Metodai
* __construct($x, $y, $content) - koordinatės ir teksto turinys

### Paint
Klasė *Paint* atitinka paveikslą - kažkokį formų rinkinį

#### Savybės (angl. *properties*)
* *shapes* - masyvas, kuriame 
* *width* - paveikslo plotis
* *height* - paveikslo ilgis

#### Metodai
* *__construct($width, $height, $shapes)* - inicializuoja
* *paint()* - nubrėžia visą paveikslą (kiekvieną iš *Shape*'ų po vieną)
* *addShape($shape)* - prideda dar vieną figūrą į paveikslą

### ExamplePaint : Paint
Sugalvoti kažkokį piešinį, kurį būtų galima nupiešti su tokiu kodu:
```php
<?php

$paint = new ExamplePaint();
$paint->draw();

```

#### Metodai
* *__construct()* - nustato paveikslo dydį ir iš anksto nusakytas formas (*Shape* tipo objektus)

Papildomai:
### Wave : Shape
Nubrėžti bangą (pvz. sinusoidė)

### LayeredPaint : Paint
Klasė *LayeredPaint* yra sluoksniuotas paveikslas (t.y. dalis formų yra piešiamos anksčiau nei kitos)

### 2 paveikslų pavyzdžiai
Nubrėžti

## Pavyzdys

Pateiktas kodo pavyzdys:

```php
<?php

$shapes = [
	new Rectangle("100%", "100%", "red"),
	new Circle(150, 100, 80, "green")
];

$paint = new Paint(300, 200, $shapes);
$paint->draw();
```

Paleidus tokią programą, turėtų būti sugeneruojamas štai toks SVG vaizdas

```html
<svg version="1.1"
	 baseProfile="full"
	 width="300" height="200"
	 xmlns="http://www.w3.org">
	 <rect width="100%" height="100%" fill="red" />
	 <circle cx="150" cy="100" r="80" fill="green" />
</svg>
```
