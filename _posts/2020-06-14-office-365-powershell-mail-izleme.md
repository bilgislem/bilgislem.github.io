---
title: Office 365 Powershell Mail İzleme
author: ramazan
categories: office365
short_name: ramazan
---

Powershell komutu ile office365 üzerinde mail izleme nasıl yapılır.

Powershell de bağlantımızı yaptıktan sonra aşağıdaki komut ile istediğimiz kişinin attığı mailleri görebiliriz.

```
Get-MessageTrace -SenderAddress "mail@example.com"
```
Alıcı olarak filtrelemek istersek

```
Get-MessageTrace -RecipientAddress "mail@example.com"
```

Tarih olarak filtrelemek istersek

```
Get-MessageTrace -SenderAddress "mail@example.com" -StartDate 09/05/2020 -EndDate 14/05/2020
```

Csv olarak dışarı aktarmak istersek

```
Get-MessageTrace -SenderAddress "mail@example.com" -StartDate 09/05/2020 -EndDate 14/05/2020|Export-csv -Path "D:\mailgidenmailler.csv"
```
