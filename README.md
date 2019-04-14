# Fortics
Teste FullStack da Fortics
<br/>
*Instrução para uso do projeto*

**Não pode esquecer de que o docker deve está instalado na máquina**
<br/>
<br/>
#### PASSO 01
Fazer o clone do repositorio na sua máquina<br/>
#### PASSO 02
Manter a configuração do arquivo docker-compose.yml, mas se preferir pode alterar para sua informações.
#### PASSO 03
Dá o comando: `docker-compose up`
#### PASSO 04
 * A porta da aplicação é a :3000 , a porta do phpmyadmin é a :8081;
 * Acessar aplicação pelo IP: 192.168.99.100:3000 se estiver usando o Windows com Docker Toolbox;
 * Acessar o phpmyadmin pelo IP: 192.168.99.100:8081 se estiver usando o Windows com Docker Toolbox;
 * Se estiver usando o *Linux* deve dá o comando `docker inspect ID_CONTAINER` "container appfortics" para saber qual o ip, em geral são os ips -**172.19.0.3:3000** , **172.20.0.3:3000** , **172.22.0.3:3000** e o phpmyadmin so altera o *3* e coloca um *4*;
