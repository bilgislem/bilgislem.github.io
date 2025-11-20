---
title: Office 365 Powershell Bağlantısı
author: ramazan
categories: Office365
short_name: ramazan
image: https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930
image_alt: Office 365 Powershell Bağlantısı
---

Merhabalar 
Office 365 i powershell den müdahele etmek için powershell yönetici olarak başlatıyoruz.
```powerhell
Set-ExecutionPolicy RemoteSigned

$UserCredential = Get-Credential

$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri https://outlook.office365.com/powershell-liveid/ -Credential $UserCredential -Authentication Basic -AllowRedirection

Import-PSSession $Session -DisableNameChecking

Get-mailbox|out-grid
```
