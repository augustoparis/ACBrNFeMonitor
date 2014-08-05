ACBrNFeMonitor em PHP
=====================

## Descrição 

Realizar a conexão via socket TCP/IP com o "ACBrNFeMonitor" com a finalidade de realizar melhores tratamentos nas respostas do ACBrMonitor.

## Sobre o ACBrNFeMonitor

O ACBrMonitor é um programa executável desenvolvido usando os componentes do [ACBr](http://acbr.sourceforge.net/). A finalidade do ACBrMonitor é permitir que qualquer linguagem capaz de ler e criar arquivos TXT ou utilizar Sockets (TCP/IP) consiga usar todos os recursos dos componentes ACBr.

## Referências
- [ACBrMonitor](http://acbr.sourceforge.net/drupal/?q=node/19)
- [Comandos do ACBrNFeMonitor](http://acbr.sourceforge.net/drupal/?q=node/40)
- [+ Comandos do ACBrNFeMonitor](http://anfm.blogspot.com.br/2010/02/comandos-do-acbrnfemonitor.html)

## Ativo

```php
$ativo = $nfe->ativo();
echo '<pre>';
echo print_r( $ativo );
echo '</pre>';
```

#### Retorno

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
NFE.INUTILIZARNFE("99999999999999","Teste de inutilizacao",14,55,5,17,17)
OK: Inutilizacao de numero homologado
[INUTILIZACAO]
Versao=PR-v3_0_10
TpAmb=2
VerAplic=PR-v3_0_10
CStat=102
XMotivo=Inutilizacao de numero homologado
CUF=41
DhRecbto=25/07/2014 17:01:16
NProt=999999999999999

ALERTA: Fim da Conexão com: 192.168.1.100 em: 25/07/14 17:01:16
```
#### ACBrMonitorPhp
```php
Array
(
    [OK] => Array
        (
            [INUTILIZACAO] => Array
                (
                    [Versao] => PR-v3_0_10
                    [TpAmb] => 2
                    [VerAplic] => PR-v3_0_10
                    [CStat] => 102
                    [XMotivo] => Inutilizacao de numero homologado
                    [CUF] => 41
                    [DhRecbto] => 25/07/2014 17:01:16
                    [NProt] => 999999999999999
                )
        )
)
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

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Test your changes to the best of your ability.
4. Update the documentation to reflect your changes if they add or changes current functionality.
5. Commit your changes (`git commit -am 'Added some feature'`)
6. Push to the branch (`git push origin my-new-feature`)
7. Create new Pull Request

## License

"THE BEER-WARE LICENSE" (Revision 42):

As long as you retain this notice you can do whatever you want with this stuff. If we meet some day, and you think this stuff is worth it, you can buy me a beer in return.

## Creators

**Eduardo Malherbi Martins**

- <http://emalherbi.com>
- <https://github.com/emalherbi>

**Roberto Godinho**

- <suporte.desyscom@gmail.com>
- <roberto.godinho.gd@gmail.com>