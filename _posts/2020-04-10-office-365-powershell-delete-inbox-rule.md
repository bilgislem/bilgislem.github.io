---
title: Office 365 Powershell Gelen Kutusu Kurallarını Silme
author: ramazan
categories: office365
---

Merhabalar
Office 365 de powersell ile gelen kutusundaki kuralları silmek için aşağıdaki kodları kullanabiliriz.
Powershelli yönetici olarak açıyoruz.
```
Set-ExecutionPolicy RemoteSigned

$UserCredential = Get-Credential

$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri https://outlook.office365.com/powershell-liveid/ -Credential $UserCredential -Authentication Basic -AllowRedirection

Import-PSSession $Session -DisableNameChecking

Get-InboxRule -Mailbox "mail@adresi.com" | Remove-InboxRule

```
