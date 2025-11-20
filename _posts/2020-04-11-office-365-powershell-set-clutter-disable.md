---
title: Office 365 Powershell ile İkincil Özelliğini Kapatma
author: ramazan
categories: office365
image: /assets/images/Disable-clutter-by-using-the-PowerShell-command.jpg
---
Merhabalar
Office365 de powershell ile mail hesabının ikincil özelliğini kapatmak için aşağıdaki komutları kullanabilirsiniz.
Powershelli yönetici olarak açıyoruz.
```
Set-ExecutionPolicy RemoteSigned

$UserCredential = Get-Credential

$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri https://outlook.office365.com/powershell-liveid/ -Credential $UserCredential -Authentication Basic -AllowRedirection

Import-PSSession $Session -DisableNameChecking

Set-Clutter -Identity "mail adresi " -Enable $false
```

Mail hesaplarının tümünün ikincil özelliğini kapatmak istersek, aşağıdaki gibi bir komut yazabiliriz.

```
Get-Mailbox –resultSize unlimited | Set-Clutter -Identity $_.PrimarySmtpAddress -Enable $false
```
