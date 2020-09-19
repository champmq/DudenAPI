# DudenAPI (Scrapper)

## Installation

```
git clone https://github.com/ChampOfGames/DudenAPI.git
```

## Usage

```php
require_once("scrapper.php");

$duden = new DudenAPI();
$wort = $duden->getWord("Hilfe");
print_r($wort);
```

## Output

```php
Array (
    [bedeutung] => das Helfen; das Tätigwerden zu jemandes Unterstützung
    [synonym] => Anstrengung[en], Assistenz, Beistand, Bemühungen
    [herkunft] => mittelhochdeutsch hilfe, althochdeutsch hilfa, zu helfen
    )
```

## Probleme/Ideen/Fragen

Solltest du ein Probleme, eine Idee oder eine Frage haben einfach eine [Issue](https://github.com/ChampOfGames/DudenAPI/issues) eröffnen und ich antworte so schnell wie möglich.