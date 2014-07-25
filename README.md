ACBrNFeMonitor
==============

ACBr NFe Monitor em PHP

## Ativo
```php
/**
 * @return mixed boolean ou string com o erro 
 */	
```
### Exemplo
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
### Exemplo
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
### Exemplo
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

## Ativo
```php
```
### Exemplo
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