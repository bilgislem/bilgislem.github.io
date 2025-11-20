---
title: Ücretsiz Döviz Kütüphanesi
author: ramazan
categories: php
short_name: ramazan
tags: php döviz kur sınıf class kütüphane
image: /assets/images/doviz.png
image_alt: Ücretsiz Döviz Kütüphanesi
---

Merhabalar

Bu postta php ile döviz kurlarını çeken bir class örneği oluşturduk.

Bu oluşturduğumuz class ile günlük ve detaylı olarak döviz kurlarına ulaşabilirsiniz.

Class ın çalışma örneği
```php
<?php
include("kur.php");
$d = new KurBilgi();
//Günlük olarak çekmek için
echo $d->gunlukGetir();
//Geçmişten günümüze
echo $d->tumGetir();
```
Class datayı json olarak veriyor, sitenizde kullanmak için json_decode() fonksiyonunu kullanmalısınız.

[Döviz sınıf dosyasını buradan indirebilirsiniz](https://raw.githubusercontent.com/bilgislem/bilgislem.github.io/master/scripts/kur.php)
