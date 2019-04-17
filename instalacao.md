# Instalação

Descrição de passo a passo para instalação do projeto.

Instalar o docker no seu computador.

1. Fazer o clone do repositório na sua máquina do [GitHub](https://github.com/Junior-Shyko/Fortics)
2. **Manter** a configuração do arquivo _docker-compose.yml_, mas se preferir **pode altera**r para sua informações.
3. Dá o comando: `docker-compose up`

Verificar os seguintes instruções finais:

* A porta da aplicação é a :3000 , a porta do phpmyadmin é a :8081;
* Acessar aplicação pelo IP: 192.168.99.100:3000 se estiver usando o Windows com Docker Toolbox;
* Acessar o phpmyadmin pelo IP: 192.168.99.100:8081 se estiver usando o Windows com Docker Toolbox;
* Se estiver usando o _Linux_ deve dá o comando `docker inspect ID_CONTAINER` "container appfortics" para saber qual o ip, em geral são os ips -**172.19.0.3:3000** , **172.20.0.3:3000** , **172.22.0.3:3000** e o phpmyadmin so altera o _3_ e coloca um _4_;
* Para acessar o container via bash utilize `docker exec -it ID_CONTAINER bash` assim poderá dá o comando `npm run dev` para copilação do webpack por conta da permissão de usuário.





