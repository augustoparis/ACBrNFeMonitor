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
```
#### ACBrMonitorPhp
```php
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

## Ativo
```php
```
#### ACBrMonitor
```
```
#### ACBrMonitorPhp
```php
```



### Retorno do ACBrMonitor
```
NFE.INUTILIZARNFE("99999999999999","Teste de inutilizacao",14,55,1,1,5)
OK: Inutilizacao de numero homologado
[INUTILIZACAO]
Versao=PR-v2_8_7
TpAmb=2
VerAplic=PR-v2_8_7
CStat=102
XMotivo=Inutilizacao de numero homologado
CUF=41
DhRecbto=25/07/2014 09:47:11
NProt=999999999999999
```

### Retorno do ACBrMonitorPhp
```php
Array
(
    [OK] => Array
        (
            [INUTILIZACAO] => Array
                (
                    [Versao] => PR-v2_8_7
                    [TpAmb] => 2
                    [VerAplic] => PR-v2_8_7
                    [CStat] => 102
                    [XMotivo] => Inutilizacao de numero homologado
                    [CUF] => 41
                    [DhRecbto] => 25/07/2014 09:47:11
                    [NProt] => 999999999999999
                )
        )
)
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