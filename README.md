# SAL PLUS : Sistema de Acompanhamento de Licitações e Contratos    

## Sistema para empresas privadas que participam de licitações públicas no Brasil

**Atenção! Existem pessoas que estão vendendo o SAL PLUS na internet se aproveitando da licença MIT. Eu não faço ideia se estas pessoas fizeram alguma modificação no sistema que justifique a cobrança, mas deixo claro que não ofereço suporte para estes casos. O projeto original do SAL PLUS oferece o software gratuitamente. Caso existam necessidades específicas que não foram atendidas pelo sistema, entre em contato para solicitar orçamento para as modificações. ~ Luís Dias

**Changelog da versão 2.1**  
* enhancement: Novo design responsive com bootstrap  

**Changelog da versão 2.0**  
* new feature: Aditivos  
* new feature: Contratos  
* new feature: Garantias  
* new feature: Mapa de contas a receber  
* new feature: Mapa de contas em atraso  
* new feature: Mapa de contratos  
* new feature: Ocorrências de contratos  
* new feature: Pessoas  
* new feature: Reajustes de contratos  
* new feature: Recebimentos de contratos  
* new feature: Recursos alocados nos contratos  
* new feature: Situações de contratos  
* new feature: Tipos de Aditivo  
* new feature: Tipos de Ocorrência   
* new feature: Visualização de todos Eventos  
* bugfix: Alteração da relação hasAndVBelongsToMany entre Licitações e Resultados  
* new feature: Visualização de todos Lotes  
* new feature: Visualização, filtro e ordenação de todos os Resultados  
* enhancement: Validação de Eventos  
* enhancement: Validação de Licitações  
* enhancement: Validação de Lotes  
* enhancement: Validação de Resultados  
* enhancement: Validação de Licitações  
* enhancement: remoção do campo id de todas as views index.ctp ( exceto Usuários )  
* enhancement: alteração do datepicker nas views form.ctp para jQuery UI  
* bugfix: correção do campo de ordenação no cabeçalho das tabelas das views index.ctp  
* enhancement: melhoria no tratamento da foreign key nas views form.ctp  
* enhancement: botões de ação reunidos numa mesma coluna nas view index.ctp  
* new feature: plugin ReportManager para gestão de relatórios  

## Notas  

* CakePHP 1.3.20  
* jQuery v1.9.1  
* jQuery UI v1.10.1
* FancyBox v2.1.5  
* Crédito da foto login-bg.jpg : https://www.flickr.com/photos/agecombahia/4304483450/in/photostream/
* Based on Dashgum Bootstrap Free Dashboard

## Instalação  

**Para usuários que NÃO utilizam a versão anterior do SAL**  

* Descompactar o sistema  
Descompacte o arquivo na pasta de documentos de seu servidor web  

* Criar o banco de dados  
Use o arquivo salplus-database.sql para criar o banco de dados e incluir dados de exemplo  

* Configurações do banco de dados  
Altere o arquivo app/config/database.php indicando o host, login e password do banco de dados.  

**Para usuários que já utilizam a versão anterior do SAL ( até v1.1.1 ) e pretendem fazer o UPGRADE para o SAL PLUS**  

* Descompactar o sistema  
Renomeie a pasta atual do aplicativo SAL ( por exemplo: de sal para saltemp )  
Descompacte o arquivo na pasta de documentos de seu servidor web 

* Atualizar o banco de dados  
Realize o BACKUP do seu banco de dados atual  
Em seguida utilize o arquivo salplus-database-update.sql para atualização  

Luis E. S. Dias  
Contato: smartbyte.systems@gmail.com
