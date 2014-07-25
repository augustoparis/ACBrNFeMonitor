ACBrNFeMonitor
==============

ACBr NFe Monitor em PHP

## Ativo
```php
/**
 * @return mixed boolean ou string com o erro 
 */	
```
#### ACBrMonitor
```
NFE.ATIVO
OK: Ativo
```
#### ACBrMonitorPhp
```php
true
```

## Status Serviço
```php 
/**
 * @return mixed array ou string com o erro 
 */	
```
#### ACBrMonitor
```
NFE.STATUSSERVICO
OK: Servico em Operacao
[STATUS]
Versao=PR-v3_0_9
TpAmb=2
VerAplic=PR-v3_0_9
CStat=107
XMotivo=Servico em Operacao
CUF=41
DhRecbto=25/07/2014 11:50:41
TMed=1
DhRetorno=30/12/1899
XObs=

ALERTA: Fim da Conexão com: 192.168.1.100 em: 25/07/14 11:50:40
```
#### ACBrMonitorPhp
```php
Array
(
    [OK] => Array
        (
            [STATUS] => Array
                (
                    [Versao] => PR-v3_0_9
                    [TpAmb] => 2
                    [VerAplic] => PR-v3_0_9
                    [CStat] => 107
                    [XMotivo] => Servico em Operacao
                    [CUF] => 41
                    [DhRecbto] => 25/07/2014 11:50:41
                    [TMed] => 1
                    [DhRetorno] => 30/12/1899
                    [XObs] => 
                )
        )
)
```

## Assinar NFe
```php
/**
 * @return mixed boolean ou string com o erro  
 */	
```
#### ACBrMonitor
```
NFE.ASSINARNFE("C:\ACBrNFeMonitor\WEB\nfe\99999999999999999999999999999999999999999999.xml")
OK: C:\ACBrNFeMonitor\WEB\nfe\99999999999999999999999999999999999999999999.xml
ALERTA: Fim da Conexão com: 192.168.1.100 em: 25/07/14 13:36:05
```
#### ACBrMonitorPhp
```php
true
```

## Validar NFe
```php
/**
 * @return mixed boolean ou string com o erro 
 */	
```
#### ACBrMonitor
```
NFE.VALIDARNFE("C:\ACBrNFeMonitor\WEB\nfe\99999999999999999999999999999999999999999999.xml")
OK: 
ALERTA: Fim da Conexão com: 192.168.1.100 em: 25/07/14 13:53:47
```
#### ACBrMonitorPhp
```php
true
```

## Consultar NFe
```php
/**
 * @return mixed array ou string com o erro 
 */	
```
#### ACBrMonitor
```
NFE.CONSULTARNFE("99999999999999999999999999999999999999999999")
OK: Autorizado o uso da NF-e
[CONSULTA]
Versao=PR-v3_0_10
TpAmb=2
VerAplic=PR-v3_0_10
CStat=100
XMotivo=Autorizado o uso da NF-e
CUF=41
ChNFe=99999999999999999999999999999999999999999999
DhRecbto=25/07/2014 14:05:20
NProt=999999999999999
DigVal=uHxGXmvx/9xEOuDqcvKht0O0j1Y=

ALERTA: Fim da Conexão com: 192.168.1.100 em: 25/07/14 14:38:47
```
#### ACBrMonitorPhp
```php
Array
(
    [OK] => Array
        (
            [CONSULTA] => Array
                (
                    [Versao] => PR-v3_0_10
                    [TpAmb] => 2
                    [VerAplic] => PR-v3_0_10
                    [CStat] => 100
                    [XMotivo] => Autorizado o uso da NF-e
                    [CUF] => 41
                    [ChNFe] => 99999999999999999999999999999999999999999999
                    [DhRecbto] => 25/07/2014 14:05:20
                    [NProt] => 999999999999999
                    [DigVal] => uHxGXmvx/9xEOuDqcvKht0O0j1Y
                )
        )
)
```

## Cancelar NFe
```php
/**
 * @return mixed array ou string com o erro 
 */		
```
#### ACBrMonitor
```
NFE.CANCELARNFE("99999999999999999999999999999999999999999999","Teste de cancelamento utilizando ACBrMonitor")
OK: Lote de Evento Processado
[CANCELAMENTO]
Versao=PR-v3_0_10
TpAmb=2
VerAplic=PR-v3_0_10
CStat=135
XMotivo=Evento registrado e vinculado a NF-e
CUF=41
ChNFe=99999999999999999999999999999999999999999999
DhRecbto=25/07/2014 16:34:10
NProt=999999999999999
tpEvento=110111
xEvento=Cancelamento
nSeqEvento=1
CNPJDest=
emailDest=
XML= XML

ALERTA: Fim da Conexão com: 192.168.1.100 em: 25/07/14 16:34:10
```
#### ACBrMonitorPhp
```php
Array
(
    [OK] => Array
        (
            [CANCELAMENTO] => Array
                (
                    [Versao] => PR-v3_0_10
                    [TpAmb] => 2
                    [VerAplic] => PR-v3_0_10
                    [CStat] => 135
                    [XMotivo] => Evento registrado e vinculado a NF-e
                    [CUF] => 41
                    [ChNFe] => 99999999999999999999999999999999999999999999
                    [DhRecbto] => 25/07/2014 16:34:10
                    [NProt] => 999999999999999
                    [tpEvento] => 110111
                    [xEvento] => Cancelamento
                    [nSeqEvento] => 1
                    [CNPJDest] => 
                    [emailDest] => 
                    [XML] =>  XML
                )
        )
)
```

## Imprimir Danfe PDF 
```php
/**
 * @return mixed boolean ou string com o erro 
 */		
```
#### ACBrMonitor
```
NFE.IMPRIMIRDANFEPDF("C:\ACBrNFeMonitor\WEB\nfe\99999999999999999999999999999999999999999999.xml")
OK: Arquivo criado em: C:\ACBrNFeMonitor\WEB\pdf\99999999999999999999999999999999999999999999.pdf

NFE.LOADFROMFILE("C:\ACBrNFeMonitor\WEB\pdf\99999999999999999999999999999999999999999999.pdf", "60")
OK: RETORNO É UMA STRING DO PDF
```
#### ACBrMonitorPhp
```php
- SALVA O PDF NO PATHWEB
true
```

## Inutilizar NFe
```php
/**
 * @return mixed array ou string com o erro 
 */	
```
#### ACBrMonitor
```
```
#### ACBrMonitorPhp
```php
```

## Enviar NFe
```php
/**
 * @return mixed array ou string com o erro 
 */		
```
#### ACBrMonitor
```
NFE.ENVIARNFE("C:\ACBrNFeMonitor\WEB\nfe\99999999999999999999999999999999999999999999.xml",198,1,0)
OK: Lote recebido com sucesso
[ENVIO]
Versao=PR-v3_0_10
TpAmb=2
VerAplic=PR-v3_0_10
CStat=103
XMotivo=Lote recebido com sucesso
CUF=41
NRec=999999999999999
DhRecbto=25/07/2014 16:11:09
TMed=1
Autorizado o uso da NF-e
[RETORNO]
Versao=PR-v3_0_10
TpAmb=2
VerAplic=PR-v3_0_10
NRec=999999999999999
CStat=100
XMotivo=Autorizado o uso da NF-e
CUF=41
[NFE70]
Versao=PR-v3_0_10
TpAmb=2
VerAplic=PR-v3_0_10
CStat=100
XMotivo=Autorizado o uso da NF-e
CUF=41
ChNFe=99999999999999999999999999999999999999999999
DhRecbto=25/07/2014 16:11:09
NProt=999999999999999
DigVal=EO+Zev17Ce02kUNCMfiAlCiET9A=

ALERTA: Fim da Conexão com: 192.168.1.100 em: 25/07/14 16:11:09
```
#### ACBrMonitorPhp
```php
Array
(
    [OK] => Array
        (
            [ENVIO] => Array
                (
                    [Versao] => PR-v3_0_10
                    [TpAmb] => 2
                    [VerAplic] => PR-v3_0_10
                    [CStat] => 103
                    [XMotivo] => Lote recebido com sucesso
                    [CUF] => 41
                    [NRec] => 999999999999999
                    [DhRecbto] => 25/07/2014 16:11:09
                    [TMed] => 1
                )
            [RETORNO] => Array
                (
                    [Versao] => PR-v3_0_10
                    [TpAmb] => 2
                    [VerAplic] => PR-v3_0_10
                    [NRec] => 999999999999999
                    [CStat] => 100
                    [XMotivo] => Autorizado o uso da NF-e
                    [CUF] => 41
                )
            [NFE70] => Array
                (
                    [Versao] => PR-v3_0_10
                    [TpAmb] => 2
                    [VerAplic] => PR-v3_0_10
                    [CStat] => 100
                    [XMotivo] => Autorizado o uso da NF-e
                    [CUF] => 41
                    [ChNFe] => 99999999999999999999999999999999999999999999
                    [DhRecbto] => 25/07/2014 16:11:09
                    [NProt] => 999999999999999
                    [DigVal] => EO+Zev17Ce02kUNCMfiAlCiET9A
                )
        )
)
```

## Enviar Email NFe
```php
/**
 * @return mixed boolean ou string com o erro
 */		
```
#### ACBrMonitor
```
NFE.ENVIAREMAIL("seu@email.com.br","C:\ACBrNFeMonitor\WEB\nfe\99999999999999999999999999999999999999999999.xml",1)
OK: Email enviado com sucesso
ALERTA: Fim da Conexão com: 192.168.1.131 em: 25/07/14 16:22:33
```
#### ACBrMonitorPhp
```php
true
```

## Contributing

Anyone and Everyone is welcome to contribute.

## License

"THE BEER-WARE LICENSE":

As long as you retain this notice you can do whatever you want with this stuff. If we meet some day, and you think this stuff is worth it, you can buy me a beer in return.

## Creators

**Eduardo Malherbi Martins**

- <http://emalherbi.com>
- <https://github.com/emalherbi>