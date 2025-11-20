---
title: Office 365 Powershell Mail Arama ve Silme
author: ramazan
categories: Office365
image: /assets/images/exchange-search-mailbox-powershell.jpg.webp
image_alt: Office 365 Powershell Mail Arama ve Silme
---
Merhabalar
Office365 de powershell üzerinden mail arama ve silme işlemi için aşağıdaki komutlar kullanılabilir.
Powershell i yönetici olarak başlatıyoruz.

```
Set-ExecutionPolicy RemoteSigned

$UserCredential = Get-Credential

$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri https://outlook.office365.com/powershell-liveid/ -Credential $UserCredential -Authentication Basic -AllowRedirection

Import-PSSession $Session -DisableNameChecking
get-mailbox | Search-Mailbox -SearchQuery 'subject:"INVOICES ADVANCE AGAINST P.O"' -SearchDumpsterOnly -DeleteContent 
```
