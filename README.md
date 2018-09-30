# RPi CONTROLE
Este é um projeto de automação residencial utilizando a Raspberry Pi 3. É um simples controle que através da Web você pode ligar e desligar aparelhos eletronicos. Nesta versão, o programa tem apenas uma tela para ligar uma bomba d'água. Obs: Este projeto foi criado com intuino para uso pessoal.

# Requisitos
* Módulo Relê
* Apache
* PHP 5.6^
* WiringPi library 

Como instalar o apache e php:
https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md

Como instalar WiringPi:
http://wiringpi.com/download-and-install/

# Instalação
Clone o projeto no diretório /var/www(diretório padrão do apache):

```sh
 $ cd /var/www
 $ git clone https://github.com/naamaslima/rpi_controle.git
```

# Montagem do circuito
![N|Solid](https://bl3302files.storage.live.com/y4p4V4CbDtlPuBvalilTBU-WA54GB4DlWLpk6MORpmO30prOVCat_vNMFGL019uWzVRYP8re_EQ8yTbsMYec3bumTTbXjEfh60I7P6AYGXEeSTLLkqAQ5AmHkgE_w9im6pZYA08Lna5eH2TAUuNsM_tDlV7sd-nwqjug2jHxeRRMZb9qP_CSGVpW0k-iZzzXept/Circuito%20RPi%20Controle.jpg?psid=1&width=1138&height=537)

O circuito acima está funcionando com o código do projeto, tente deixar igual.

# Considerações
Se estiver tudo ok, você conseguirá acessar o servidor web através do ip da raspberry pi, e terá acesso ao programa no diretório onde o projeto foi clonado. Qualquer dúvida ou sugestão, por favor entrar em contato através do email naamalima32@gmail.com. Obrigado!
