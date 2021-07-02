---
title: Office 365 Powershell Bağlantısı
author: ramazan
categories: Office365
short_name: ramazan
---

Merhabalar 
Office 365 i powershell den müdahele etmek için powershell yönetici olarak başlatıyoruz.
```
Set-ExecutionPolicy RemoteSigned

$UserCredential = Get-Credential

$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri https://outlook.office365.com/powershell-liveid/ -Credential $UserCredential -Authentication Basic -AllowRedirection

Import-PSSession $Session -DisableNameChecking

Get-mailbox|out-grid
```
